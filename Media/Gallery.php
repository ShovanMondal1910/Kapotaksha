<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/Gallery.css">
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
            <h1 class="page-banner-title">AHS GALLERY</h1>
        </div>
    </div>

    <!-- Event Category & Photo Lightbox Gallery Section -->
    <section class="gallery-section">
        <!-- Interactive Category Filters -->
        <div class="gallery-filter-container">
            <button class="gallery-filter-btn active" data-filter="all">All Photos</button>
            <button class="gallery-filter-btn" data-filter="saraswati-puja">Saraswati Puja</button>
            <button class="gallery-filter-btn" data-filter="durga-puja">Durga Puja</button>
            <button class="gallery-filter-btn" data-filter="holi">Holi</button>
            <button class="gallery-filter-btn" data-filter="cultural-evening">Cultural Evening</button>
            <button class="gallery-filter-btn" data-filter="orientation">Orientation</button>
            <button class="gallery-filter-btn" data-filter="ahs-photos">AHS &amp; Team Photos</button>
        </div>

        <div class="gallery-grid">

            <!-- -- Saraswati Puja 2026 -- -->
            <div class="photo-item" data-lightbox="true" data-category="saraswati-puja" data-year="2026" data-title="Saraswati Puja 2026">
                <img src="../photos/SaraswatiPuja2026.jpg" alt="Saraswati Puja 2026" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">SARASWATI PUJA 2026</div>
            </div>

            <!-- -- Saraswati Puja 2025 -- -->
            <div class="photo-item" data-lightbox="true" data-category="saraswati-puja" data-year="2025" data-title="Saraswati Puja 2025">
                <img src="../photos/SaraswatiPuja2025.jpg" alt="Saraswati Puja 2025" loading="lazy">
                <span class="photo-badge-year">2025</span>
                <div class="gallery-label">SARASWATI PUJA 2025</div>
            </div>

            <!-- -- Durga Puja 2026 -- -->
            <div class="photo-item" data-lightbox="true" data-category="durga-puja" data-year="2026" data-title="Durga Puja Celebration">
                <img src="../photos/Swarashoti Ma.jpg" alt="Durga Puja Celebration" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">DURGA PUJA</div>
            </div>

            <!-- -- Holi 2026 -- -->
            <div class="photo-item" data-lightbox="true" data-category="holi" data-year="2026" data-title="Holi Festival 2026">
                <img src="../photos/Holi2026.jpg" alt="Holi Festival 2026" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">HOLI FESTIVAL</div>
            </div>

            <!-- -- Cultural Evening -- -->
            <div class="photo-item" data-lightbox="true" data-category="cultural-evening" data-year="2026" data-title="Cultural Evening Group Photo">
                <img src="../photos/GroupPhoto.jpg" alt="Cultural Evening Group Photo" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">CULTURAL EVENING</div>
            </div>

            <!-- -- Spring Orientation -- -->
            <div class="photo-item" data-lightbox="true" data-category="orientation" data-year="2026" data-title="Spring 2026 Orientation">
                <img src="../photos/Spring2026Orientaion.jpg" alt="Spring 2026 Orientation" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">SPRING ORIENTATION</div>
            </div>

            <!-- -- Summer Orientation Photo 1 -- -->
            <div class="photo-item" data-lightbox="true" data-category="orientation" data-year="2026" data-title="Summer Orientation Ceremony">
                <img src="../photos/SummerOrientaion2026/p1.jpg" alt="Summer Orientation Ceremony" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">SUMMER ORIENTATION</div>
            </div>

            <!-- -- Summer Orientation Photo 2 -- -->
            <div class="photo-item" data-lightbox="true" data-category="orientation" data-year="2026" data-title="Orientation Student Gathering">
                <img src="../photos/SummerOrientaion2026/p5.jpg" alt="Orientation Student Gathering" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">STUDENT GATHERING</div>
            </div>

            <!-- -- AHS Main Photo -- -->
            <div class="photo-item" data-lightbox="true" data-category="ahs-photos" data-year="2026" data-title="AHS Campus & Building">
                <img src="../photos/AHS Photo.jpg" alt="AHS Campus & Building" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">AHS CAMPUS</div>
            </div>

            <!-- -- Development Team -- -->
            <div class="photo-item" data-lightbox="true" data-category="ahs-photos" data-year="2026" data-title="KHS Development Team">
                <img src="../photos/DevelopmentTeam.jpg" alt="KHS Development Team" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">DEVELOPMENT TEAM</div>
            </div>

            <!-- -- Media Team -- -->
            <div class="photo-item" data-lightbox="true" data-category="ahs-photos" data-year="2026" data-title="KHS Media Team">
                <img src="../photos/MediaTeam.jpg" alt="KHS Media Team" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">MEDIA TEAM</div>
            </div>

            <!-- -- Event Organizer Team -- -->
            <div class="photo-item" data-lightbox="true" data-category="ahs-photos" data-year="2026" data-title="Event Organizer Team">
                <img src="../photos/EventOrganizerTeam.jpg" alt="Event Organizer Team" loading="lazy">
                <span class="photo-badge-year">2026</span>
                <div class="gallery-label">EVENT ORGANIZERS</div>
            </div>

        </div>
    </section>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/lightbox.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
