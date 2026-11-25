<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean School - No Mosquito  |  Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/event-detail.css">
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Navigation Bar -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Cover Banner -->
    <div class="page-banner">
        <img src="../photos/Cover.gif" alt="AHS Cover" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">Events</h1>
            <p class="page-banner-sub">Celebrating culture, tradition, and community at Kapotaksha High School</p>
        </div>
    </div>

    <!-- Event Detail -->
    <section class="event-detail-section">
        <div class="container">

            <nav class="event-breadcrumb" aria-label="breadcrumb">
                <a href="../index.php">Home</a>
                <span> | </span>
                <a href="Events.php">Events</a>
                <span> | </span>
                <strong>Clean School - No Mosquito</strong>
            </nav>

            <div class="event-detail-card">

                <img src="../photos/CleanSchoolNo Mosquito2026/Photo2.jpg" alt="Clean School - No Mosquito" class="event-hero-img">

                <div class="event-detail-body">

                    <div class="event-meta">
                        <span class="event-meta-date">October 08, 2026</span>
                        <span class="event-badge">Campaign</span>
                    </div>

                    <h1 class="event-detail-title">Clean School - No Mosquito</h1>
                    <hr class="event-divider">

                    <div class="event-description">
                        <p>
                            On <strong>8 October 2026</strong>, Kapotaksha High School (KHS) successfully organized
                            the <strong>Clean School - No Mosquito</strong> program on campus. The campaign brought the school
                            community together in an active effort towards sanitation and environmental awareness.
                        </p>

                        <h3>Event Highlights</h3>
                        <ul>
                            <li>A campaign to maintain the cleanliness of the school</li>
                            <li>A campaign to prevent mosquito infestation</li>
                            <li>Cleaning the school premises</li>
                            <li>Awareness programs for students and staff</li>
                        </ul>

                        <p>
                            KHS is committed to maintaining a clean and healthy environment for all students and staff. The Clean School - No Mosquito campaign is part of our ongoing efforts to promote hygiene, sanitation, and well-being on campus.
                        </p>
                    </div>

                    <!-- Photo Gallery -->
                    <div class="event-gallery-section">
                        <h2 class="event-gallery-heading">Photo Gallery</h2>
                        <div class="event-gallery-grid">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo1.jpg" alt="Clean School - No Mosquito" loading="lazy" onclick="openLightbox(this)">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo2.jpg" alt="Clean School - No Mosquito" loading="lazy" onclick="openLightbox(this)">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo3.jpg" alt="Clean School - No Mosquito" loading="lazy" onclick="openLightbox(this)">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo4.jpg" alt="Clean School - No Mosquito" loading="lazy" onclick="openLightbox(this)">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo5.jpg" alt="Clean School - No Mosquito" loading="lazy" onclick="openLightbox(this)">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo6.jpg" alt="Clean School - No Mosquito" loading="lazy" onclick="openLightbox(this)">
                        </div>
                    </div>

                    <a href="Events.php" class="event-back-btn">&#8592; Back to Events</a>

                </div>
            </div>

        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox-overlay" id="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer">
        <button class="lightbox-close" onclick="closeLightbox()" aria-label="Close">&times;</button>
        <button class="lightbox-prev"  onclick="shiftLightbox(-1)" aria-label="Previous">&#8592;</button>
        <img id="lightbox-img" src="" alt="Enlarged photo">
        <button class="lightbox-next"  onclick="shiftLightbox(1)"  aria-label="Next">&#8594;</button>
    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/event-detail.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
