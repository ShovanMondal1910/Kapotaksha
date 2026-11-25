<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events  |  Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/event.css">
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Navigation Bar -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Page Header -->
    <div class="page-banner">
        <img src="../photos/Cover.gif" alt="AHS Cover" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">Events</h1>
            <p class="page-banner-sub">Celebrating culture, tradition, and community at Kapotaksha High School</p>
        </div>
    </div>

    <!-- Events Grid -->
    <section class="events-list-section">
        <div class="container">
            <div class="row g-4">

                <!-- ------------------------------------------------
                     TO ADD A NEW EVENT: copy a card block,
                     paste it here, and fill in your own content.
                ---------------------------------------------------- -->

                <!-- Clean School No Mosquito -->
                <div class="col-lg-4 col-md-6">
                    <article class="event-list-card">
                        <div class="event-list-img-wrapper">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo1.jpg" alt="KHS Clean School No Mosquito" class="event-list-img" loading="lazy">
                        </div>
                        <div class="event-list-body">
                            <h2 class="event-list-title">Clean School No Mosquito</h2>
                            <p class="event-list-excerpt">On 8 October 2026, Kapotaksha High School (KHS) successfully organized a Clean School No Mosquito program...</p>
                            <a href="cleanSchoolNoMosquito.php" class="event-list-read-more">READ MORE</a>
                            <p class="event-list-date">October 08, 2026</p>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/events.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
