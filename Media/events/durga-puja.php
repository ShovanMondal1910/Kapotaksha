<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Durga Puja  |  KHS Gallery</title>
    <link href="../../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="css/event-gallery.css">
    <link rel="icon" href="../../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Navigation Bar -->
    <?php
$root = '../../';
include __DIR__ . '/../../components/navbar.php';
?>

    <!-- Cover Banner -->
    <div class="cover-wrapper">
        <img src="../../photos/Cover.gif" alt="AHS Cover" class="gallery-cover-img">
        <div class="gallery-cover-overlay">
            <h1 class="gallery-cover-title">DURGA PUJA</h1>
            <a href="../Gallery.php" class="gallery-cover-back">&#8592; Back to Gallery</a>
        </div>
    </div>

    <!-- Photos by Year -->
    <div class="event-gallery-page">

        <!-- -- YEAR: 2026 -- -->
        <div class="year-section">
            <h2 class="year-heading">2026</h2>
            <div class="photo-grid" data-year="2026">

                <div class="photo-item">
                    <img src="../../photos/Swarashoti Ma.jpg" alt="Durga Puja 2026" loading="lazy">
                    <div class="photo-item-label">Durga Puja 2026</div>
                </div>

                <div class="photo-item">
                    <img src="../../photos/GroupPhoto.jpg" alt="Durga Puja 2026 Group" loading="lazy">
                    <div class="photo-item-label">Group Photo</div>
                </div>

            </div>
        </div>

    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../../components/footer.php'; ?>

    <script src="../../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../js/lightbox.js"></script>
    <script src="../../js/search.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
