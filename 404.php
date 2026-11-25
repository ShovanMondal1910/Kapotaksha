<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Kapotaksha High School</title>
    <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="photos/KHS.png" type="image/png">
    <style>
        .error-page-wrapper {
            min-height: 65vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px;
            background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
        }
        .error-code {
            font-size: 6rem;
            font-weight: 900;
            color: #1a72b8;
            line-height: 1;
            margin-bottom: 12px;
            letter-spacing: -2px;
        }
        .error-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 16px;
        }
        .error-desc {
            font-size: 1.05rem;
            color: #64748b;
            max-width: 520px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }
        .error-actions {
            display: flex;
            gap: 14px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn-error-primary {
            background-color: #1a72b8;
            color: #fff;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: background 0.2s ease;
        }
        .btn-error-primary:hover {
            background-color: #1565c0;
            color: #fff;
        }
        .btn-error-secondary {
            background-color: #f1f5f9;
            color: #334155;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            border: 1px solid #cbd5e1;
            transition: all 0.2s ease;
        }
        .btn-error-secondary:hover {
            background-color: #e2e8f0;
            color: #1e293b;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <?php
$root = '';
include __DIR__ . '/components/navbar.php';
?>

    <!-- Error Content -->
    <main class="error-page-wrapper">
        <div class="container">
            <div class="error-code">404</div>
            <h1 class="error-title">Page Not Found / পৃষ্ঠাটি পাওয়া যায়নি</h1>
            <p class="error-desc">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            <div class="error-actions">
                <a href="index.php" class="btn-error-primary">Go to Homepage</a>
                <a href="activities-and-news/ActivityAndNews.php" class="btn-error-secondary">View Notices &amp; Exam Routines</a>
                <a href="index.php#contact" class="btn-error-secondary">Contact Us</a>
            </div>
        </div>
    </main>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
