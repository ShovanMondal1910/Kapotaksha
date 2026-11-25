<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Founders | Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/people-shared.css">
    <link rel="stylesheet" href="css/founders.css">
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
        <img src="../photos/Cover.gif" alt="Founders group photo" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">FOUNDERS</h1>
        </div>
    </div>

    <!-- Founders Section -->
    <section class="founders-section">
        <div class="container">

            <!-- Intro paragraph -->
            <p class="founders-intro">
                Kapotaksha High School is consistently appreciative of its establishing individuals. A group of dedicated students took on the initiative and founded a place for the students of Kapotaksha High School to call their home. Nothing was incomprehensible for them. Their fruitful endeavor brought KHS into another degree of association where we are accomplishing our goals all over. Without them, we would not be able to reach this position.
            </p>

            <!-- Founders Grid -->
            <div class="founders-grid">

                <!-- Row 1 -->
                <div class="row justify-content-center g-5 mb-5">

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="founder-card">
                            <div class="founder-avatar-wrapper">
                                <img src="../photos/GroupPhoto.jpg" alt="Founder 1" class="founder-avatar">
                            </div>
                            <h3 class="founder-name">FOUNDER NAME 1</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="founder-card">
                            <div class="founder-avatar-wrapper">
                                <img src="../photos/AHS Photo.jpg" alt="Founder 2" class="founder-avatar">
                            </div>
                            <h3 class="founder-name">FOUNDER NAME 2</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="founder-card">
                            <div class="founder-avatar-wrapper">
                                <img src="../photos/SaraswatiPuja2026.jpg" alt="Founder 3" class="founder-avatar">
                            </div>
                            <h3 class="founder-name">FOUNDER NAME 3</h3>
                        </div>
                    </div>

                </div>

                <!-- Row 2 -->
                <div class="row justify-content-center g-5">

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="founder-card">
                            <div class="founder-avatar-wrapper">
                                <img src="../photos/Holi2026.jpg" alt="Founder 4" class="founder-avatar">
                            </div>
                            <h3 class="founder-name">FOUNDER NAME 4</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="founder-card">
                            <div class="founder-avatar-wrapper">
                                <img src="../photos/SaraswatiPuja2025.jpg" alt="Founder 5" class="founder-avatar">
                            </div>
                            <h3 class="founder-name">FOUNDER NAME 5</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="founder-card">
                            <div class="founder-avatar-wrapper">
                                <img src="../photos/Spring2026Orientaion.jpg" alt="Founder 6" class="founder-avatar">
                            </div>
                            <h3 class="founder-name">FOUNDER NAME 6</h3>
                        </div>
                    </div>

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
