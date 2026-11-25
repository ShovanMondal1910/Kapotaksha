<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientation  |  KHS Gallery</title>
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
            <h1 class="gallery-cover-title">ORIENTATION</h1>
            <a href="../Gallery.php" class="gallery-cover-back">&#8592; Back to Gallery</a>
        </div>
    </div>

    <!-- Photos by Year -->
    <div class="event-gallery-page">

        <!-- -- YEAR: 2026 -- -->
        <div class="year-section">
            <h2 class="year-heading">2026</h2>
            <div class="photo-grid" data-year="2026">

                <div class="photo-item" data-title="Orientation Spring 2026" data-year="2026">
                    <img src="../../photos/Spring2026Orientaion.jpg" alt="Orientation Spring 2026" loading="lazy">
                    <div class="photo-item-label">Orientation Spring 2026</div>
                </div>

                <div class="photo-item" data-title="Orientation Group Photo" data-year="2026">
                    <img src="../../photos/GroupPhoto.jpg" alt="Orientation Group" loading="lazy">
                    <div class="photo-item-label">Group Photo</div>
                </div>

                <div class="photo-item" data-title="Summer Orientation Ceremony 1" data-year="2026">
                    <img src="../../photos/SummerOrientaion2026/p1.jpg" alt="Summer Orientation 1" loading="lazy">
                    <div class="photo-item-label">Orientation Session 1</div>
                </div>

                <div class="photo-item" data-title="Summer Orientation Ceremony 2" data-year="2026">
                    <img src="../../photos/SummerOrientaion2026/p2.jpg" alt="Summer Orientation 2" loading="lazy">
                    <div class="photo-item-label">Orientation Session 2</div>
                </div>

                <div class="photo-item" data-title="Summer Orientation Ceremony 3" data-year="2026">
                    <img src="../../photos/SummerOrientaion2026/p3.jpg" alt="Summer Orientation 3" loading="lazy">
                    <div class="photo-item-label">Orientation Session 3</div>
                </div>

                <div class="photo-item" data-title="Summer Orientation Ceremony 4" data-year="2026">
                    <img src="../../photos/SummerOrientaion2026/p4.jpg" alt="Summer Orientation 4" loading="lazy">
                    <div class="photo-item-label">Orientation Session 4</div>
                </div>

                <div class="photo-item" data-title="Summer Orientation Ceremony 5" data-year="2026">
                    <img src="../../photos/SummerOrientaion2026/p5.jpg" alt="Summer Orientation 5" loading="lazy">
                    <div class="photo-item-label">Orientation Session 5</div>
                </div>

                <div class="photo-item" data-title="Summer Orientation Ceremony 6" data-year="2026">
                    <img src="../../photos/SummerOrientaion2026/p6.jpg" alt="Summer Orientation 6" loading="lazy">
                    <div class="photo-item-label">Orientation Session 6</div>
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

