<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHS Photos  |  KHS Gallery</title>
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
        <img src="../../photos/Cover.gif" alt="KHS Cover" class="gallery-cover-img">
        <div class="gallery-cover-overlay">
            <h1 class="gallery-cover-title">KHS PHOTOS</h1>
            <a href="../Gallery.php" class="gallery-cover-back">&#8592; Back to Gallery</a>
        </div>
    </div>

    <!-- Photos by Year -->
    <div class="event-gallery-page">

        <!-- -- YEAR: 2026 -- -->
        <div class="year-section">
            <h2 class="year-heading">2026</h2>
            <div class="photo-grid" data-year="2026">

                <div class="photo-item" data-title="AHS Campus & Building" data-year="2026">
                    <img src="../../photos/AHS Photo.jpg" alt="AHS Campus" loading="lazy">
                    <div class="photo-item-label">AHS Campus</div>
                </div>

                <div class="photo-item" data-title="Group Photo" data-year="2026">
                    <img src="../../photos/GroupPhoto.jpg" alt="AHS Group Photo" loading="lazy">
                    <div class="photo-item-label">Group Photo</div>
                </div>

                <div class="photo-item" data-title="Development Team" data-year="2026">
                    <img src="../../photos/DevelopmentTeam.jpg" alt="Development Team" loading="lazy">
                    <div class="photo-item-label">Development Team</div>
                </div>

                <div class="photo-item" data-title="Media Team" data-year="2026">
                    <img src="../../photos/MediaTeam.jpg" alt="Media Team" loading="lazy">
                    <div class="photo-item-label">Media Team</div>
                </div>

                <div class="photo-item" data-title="Event Organizer Team" data-year="2026">
                    <img src="../../photos/EventOrganizerTeam.jpg" alt="Event Organizer Team" loading="lazy">
                    <div class="photo-item-label">Event Organizer Team</div>
                </div>

                <div class="photo-item" data-title="Public Relation Team" data-year="2026">
                    <img src="../../photos/PublicRelationTeam.jpg" alt="Public Relation Team" loading="lazy">
                    <div class="photo-item-label">Public Relation Team</div>
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

