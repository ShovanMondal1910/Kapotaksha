param (
    [int]$MaxDimension = 1920,
    [int]$Quality = 85,
    [int]$MinSizeKB = 400,
    [switch]$Backup
)

Add-Type -AssemblyName System.Drawing

$rootDir = Split-Path -Parent $PSScriptRoot
$photosDir = Join-Path $rootDir "photos"

if (-not (Test-Path $photosDir)) {
    Write-Error "photos directory not found at $photosDir"
    exit 1
}

if ($Backup) {
    $backupDir = Join-Path $rootDir "photos_backup"
    if (-not (Test-Path $backupDir)) {
        Write-Host "Creating backup directory at $backupDir..." -ForegroundColor Cyan
        Copy-Item -Path $photosDir -Destination $backupDir -Recurse
    }
}

$imageFiles = Get-ChildItem -Path $photosDir -Recurse -File | Where-Object {
    $_.Extension -match '^\.(jpg|jpeg|png)$' -and ($_.Length / 1KB) -gt $MinSizeKB
}

$codec = [System.Drawing.Imaging.ImageCodecInfo]::GetImageEncoders() | Where-Object { $_.MimeType -eq 'image/jpeg' }
$encoderParams = New-Object System.Drawing.Imaging.EncoderParameters(1)
$encoderParams.Param[0] = New-Object System.Drawing.Imaging.EncoderParameter([System.Drawing.Imaging.Encoder]::Quality, [long]$Quality)

$totalSavedBytes = 0
$optimizedCount = 0

Write-Host "Found $($imageFiles.Count) images over $MinSizeKB KB to optimize..." -ForegroundColor Yellow

foreach ($file in $imageFiles) {
    $filePath = $file.FullName
    $originalLength = $file.Length

    try {
        $img = [System.Drawing.Image]::FromFile($filePath)
        $origW = $img.Width
        $origH = $img.Height

        if ($origW -gt $MaxDimension -or $origH -gt $MaxDimension) {
            if ($origW -gt $origH) {
                $newW = $MaxDimension
                $newH = [int]($origH * ($MaxDimension / $origW))
            } else {
                $newH = $MaxDimension
                $newW = [int]($origW * ($MaxDimension / $origH))
            }
        } else {
            $newW = $origW
            $newH = $origH
        }

        $bmp = New-Object System.Drawing.Bitmap($newW, $newH)
        $g = [System.Drawing.Graphics]::FromImage($bmp)
        $g.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
        $g.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
        $g.PixelOffsetMode = [System.Drawing.Drawing2D.PixelOffsetMode]::HighQuality
        $g.DrawImage($img, 0, 0, $newW, $newH)

        $tempPath = $filePath + ".tmp.jpg"
        if ($file.Extension -match '^\.png$') {
            # For PNGs, keep as PNG or optimize as PNG
            $bmp.Save($tempPath, [System.Drawing.Imaging.ImageFormat]::Png)
        } else {
            $bmp.Save($tempPath, $codec, $encoderParams)
        }

        $g.Dispose()
        $bmp.Dispose()
        $img.Dispose()

        $tempFile = Get-Item $tempPath
        if ($tempFile.Length -lt $originalLength) {
            $saved = $originalLength - $tempFile.Length
            $totalSavedBytes += $saved
            Move-Item -Path $tempPath -Destination $filePath -Force
            $optimizedCount++
            $origMB = [math]::Round($originalLength / 1MB, 2)
            $newKB = [math]::Round((Get-Item $filePath).Length / 1KB, 1)
            Write-Host "[OPTIMIZED] $($file.Name): $origMB MB -> $newKB KB ($origW x $origH -> $newW x $newH)" -ForegroundColor Green
        } else {
            Remove-Item $tempPath -Force
            Write-Host "[SKIPPED] $($file.Name): Already optimal." -ForegroundColor Gray
        }
    } catch {
        Write-Warning "Could not process $($file.Name): $_"
        if (Test-Path ($filePath + ".tmp.jpg")) {
            Remove-Item ($filePath + ".tmp.jpg") -Force
        }
    }
}

$totalSavedMB = [math]::Round($totalSavedBytes / 1MB, 2)
Write-Host "`nFinished! Optimized $optimizedCount images. Saved $totalSavedMB MB of bandwidth!" -ForegroundColor Cyan
