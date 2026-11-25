<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHS | Teacher List</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Base styles for navbar and footer -->
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Specific styles for teacher grid -->
    <link rel="stylesheet" href="../css/teacher.css">
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body class="teacher-page">

    <!-- Navigation Bar -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row" id="teacher-grid">
            <!-- Loading indicator -->
            <div class="col-12 text-center" id="loading-indicator">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2">Loading teacher data...</p>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/teacherlist.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
