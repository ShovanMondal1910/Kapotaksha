<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Former Committees | Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/people-shared.css">
    <link rel="stylesheet" href="css/formercommittee.css">
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Navigation Bar -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Hero / Group Photo -->
    <div class="page-banner">
        <img src="../photos/Cover.gif" alt="Former Committees group photo" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">FORMER COMMITTEES</h1>
        </div>
    </div>

    <!-- Former Committees Section -->
    <section class="former-section">
        <div class="container">

            <!-- SESSION 1 -->
            <div class="fc-row">
                <div class="fc-text">
                    <h2 class="fc-session-title">Session: Summer '24  |  Summer '25</h2>
                    <p class="fc-description">
                        The executive body of Summer '24  |  Summer '25 played a vital role in the society's growth,
                        organizing impactful cultural events such as Saraswati Puja 2025, Durga Puja 2025, and Holi 2026.
                        They introduced new workshops and outreach programs that strengthened the bond among members and
                        left a lasting contribution to both the society and the AIUB community.
                    </p>
                    <a href="#" class="fc-view-btn">View Members</a>
                </div>
                <div class="fc-image">
                    <img src="../photos/GroupPhoto.jpg" alt="Summer 2024 | 2025 Committee group photo"
                         class="fc-img" loading="lazy">
                </div>
            </div>

            <!-- SESSION 2 -->
            <div class="fc-row fc-row--reverse">
                <div class="fc-text">
                    <h2 class="fc-session-title">Session: Summer '23  |  Summer '24</h2>
                    <p class="fc-description">
                        The executive body of Summer '23  |  Summer '24 played a pivotal role in the success and
                        growth of the society. Throughout their journey, they organized a wide range of cultural
                        activities and events that left an indelible mark on the society's legacy. Their efforts
                        in organizing impactful events, cultural programs, and encouraging participation in
                        community activities undoubtedly contributed to the progress of KHS.
                    </p>
                    <a href="#" class="fc-view-btn">View Members</a>
                </div>
                <div class="fc-image">
                    <img src="../photos/SaraswatiPuja2025.jpg" alt="Summer 2023 | 2024 Committee group photo"
                         class="fc-img" loading="lazy">
                </div>
            </div>

        </div>
    </section>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Contact / Footer -->
    <!-- ── GLOBAL FOOTER COMPONENT ── -->
<!-- ── GLOBAL FOOTER COMPONENT ── -->
<!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>
