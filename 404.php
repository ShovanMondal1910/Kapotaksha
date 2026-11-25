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
    <link rel="stylesheet" href="css/404.css">
    <link rel="icon" href="photos/KHS.png" type="image/png">
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
