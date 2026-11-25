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
            <h1 class="error-title">Page Not Found</h1>  
            <p class="error-desc">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
        </div>
    </main>

    <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
