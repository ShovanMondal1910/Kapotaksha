<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisers | Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/people-shared.css">
    <link rel="stylesheet" href="css/adviser.css">
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
        <img src="../photos/Cover.gif" alt="Advisers group photo" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">ADVISERS</h1>
        </div>
    </div>

    <!-- Advisers Section -->
    <section class="adviser-section">
        <div class="container">

            <!-- Intro -->
            <p class="adviser-intro">
                Kapotaksha High School is approved by the Office of Student Affairs (OSA) of American
                International University  |  Bangladesh (AIUB). Throughout the entire journey, advisers
                of KHS formulate the foundation of the society and that foundation grows stronger with
                each executive body. Being the advisers of KHS, they mentor all activities of the
                society. They serve the society and its members with their idea proposals, advice, and
                experience whenever required.
            </p>

            <!--
            ------------------------------------------------
            HOW TO ADD AN ADVISER:
            Copy one .adviser-card block and paste it inside
            the .row below. Update photo src, name, and roles.
            ------------------------------------------------
            -->
            <div class="row justify-content-center g-5">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="adviser-card">
                        <div class="adviser-avatar-wrapper">
                            <img src="../photos/GroupPhoto.jpg" alt="Adviser 1" class="adviser-avatar" loading="lazy">
                        </div>
                        <h3 class="adviser-name">ADVISER NAME 1</h3>
                        <p class="adviser-role">Associate Professor, CS Department</p>
                        <p class="adviser-role">Special Assistant Of OSA</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="adviser-card">
                        <div class="adviser-avatar-wrapper">
                            <img src="../photos/AHS Photo.jpg" alt="Adviser 2" class="adviser-avatar" loading="lazy">
                        </div>
                        <h3 class="adviser-name">ADVISER NAME 2</h3>
                        <p class="adviser-role">Associate Professor</p>
                        <p class="adviser-role">Additional Director (IQAC), CS Department</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="adviser-card">
                        <div class="adviser-avatar-wrapper">
                            <img src="../photos/SaraswatiPuja2026.jpg" alt="Adviser 3" class="adviser-avatar" loading="lazy">
                        </div>
                        <h3 class="adviser-name">ADVISER NAME 3</h3>
                        <p class="adviser-role">Associate Professor, CS Department</p>
                        <p class="adviser-role">Special Assistant Of OSA</p>
                    </div>
                </div>

                <!-- Add more adviser cards here -->

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
