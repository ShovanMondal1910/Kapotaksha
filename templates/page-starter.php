<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Page Title | Kapotaksha High School</title>
    
    <!-- Core Stylesheets -->
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/variables.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/search.css">
    
    <!-- Favicon -->
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Global Navigation Bar -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Page Header Banner -->
    <header class="page-banner text-center text-white py-5 mb-4 position-relative">
        <div class="container position-relative z-1 py-4">
            <h1 class="display-4 fw-bold">Page Main Title</h1>
            <p class="lead mb-0">Short descriptive subtitle about this section or department</p>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="container my-5">
        <!-- Breadcrumb navigation -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Current Page</li>
            </ol>
        </nav>

        <!-- Main Section Content -->
        <section class="mb-5">
            <h2 class="section-title">Section Heading</h2>
            <p class="lead">
                This is a starter boilerplate for new pages. Replace this placeholder text with your content, cards, tables, or media.
            </p>
            <div class="row g-4 mt-3">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Feature One</h5>
                            <p class="card-text">Description of the feature or announcement goes here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Feature Two</h5>
                            <p class="card-text">Description of the feature or announcement goes here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Feature Three</h5>
                            <p class="card-text">Description of the feature or announcement goes here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Global Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <!-- Scripts -->
    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/i18n.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
