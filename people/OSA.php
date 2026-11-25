<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of Student Affairs (OSA) | Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/people-shared.css">
    <link rel="stylesheet" href="css/osa.css">
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
        <img src="../photos/Cover.gif" alt="Office of Student Affairs group photo" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">OFFICE OF STUDENT AFFAIRS (OSA)</h1>
        </div>
    </div>

    <!-- OSA Org Chart -->
    <section class="osa-section">
        <div class="container">

            <!-- Tier 1: Founder & VP -->
            <div class="osa-tier">
                <div class="osa-card osa-card--top">
                    <div class="osa-avatar-wrapper">
                        <img src="../photos/OSA/Nadia Anwar.jpg" alt="Ms. Nadia Anwar" class="osa-avatar">
                    </div>
                    <h3 class="osa-name">MS. NADIA ANWAR</h3>
                    <p class="osa-role">Founder And Vice President</p>
                    <p class="osa-dept">Student Affairs, AIUB</p>
                </div>
            </div>

            <!-- Connector line -->
            <div class="osa-connector"></div>

            <!-- Tier 2: Director -->
            <div class="osa-tier">
                <div class="osa-card osa-card--top">
                    <div class="osa-avatar-wrapper">
                        <img src="../photos/OSA/Manzur Khan.jpg" alt="Mr. Manzur H Khan" class="osa-avatar">
                    </div>
                    <h3 class="osa-name">MR. MANZUR H KHAN</h3>
                    <p class="osa-role">Director</p>
                </div>
            </div>

            <!-- Connector line -->
            <div class="osa-connector"></div>

            <!-- Tier 3: Deputy Director -->
            <div class="osa-tier">
                <div class="osa-card osa-card--top">
                    <div class="osa-avatar-wrapper">
                        <img src="../photos/OSA/Ziarat-Khan.webp" alt="Mr. Ziarat Hossain Khan" class="osa-avatar">
                    </div>
                    <h3 class="osa-name">MR. ZIARAT HOSSAIN KHAN</h3>
                    <p class="osa-role">Deputy Director</p>
                </div>
            </div>

            <!-- Connector line -->
            <div class="osa-connector"></div>

            <!-- Tier 4: Special Assistants -->
            <div class="osa-section-label">Special Assistants &amp; Staff</div>
            <div class="osa-tier osa-tier--row">

                <div class="osa-card">
                    <div class="osa-avatar-wrapper osa-avatar-wrapper--sm">
                        <img src="../photos/OSA/Abhijit Bhowmik.jpg" alt="Abhijit Bhowmik" class="osa-avatar">
                    </div>
                    <h3 class="osa-name osa-name--sm">ABHIJIT BHOWMIK</h3>
                    <p class="osa-role osa-role--sm">Special Assistant Of OSA</p>
                </div>

                <div class="osa-card">
                    <div class="osa-avatar-wrapper osa-avatar-wrapper--sm">
                        <img src="../photos/OSA/Sharfuddin Mahmood.jpg" alt="Sharfuddin Mahmood" class="osa-avatar">
                    </div>
                    <h3 class="osa-name osa-name--sm">SHARFUDDIN MAHMOOD</h3>
                    <p class="osa-role osa-role--sm">Special Assistant Of OSA</p>
                </div>

                <div class="osa-card">
                    <div class="osa-avatar-wrapper osa-avatar-wrapper--sm">
                        <img src="../photos/OSA/Md. Saniat Rahman Zishan.jpg" alt="Md. Saniat Rahman Zishan" class="osa-avatar">
                    </div>
                    <h3 class="osa-name osa-name--sm">MD. SANIAT RAHMAN ZISHAN</h3>
                    <p class="osa-role osa-role--sm">Special Assistant Of OSA</p>
                </div>

                <div class="osa-card">
                    <div class="osa-avatar-wrapper osa-avatar-wrapper--sm">
                        <img src="../photos/OSA/Ziarat-Khan.webp" alt="Chowdhury Akram Hossain" class="osa-avatar">
                    </div>
                    <h3 class="osa-name osa-name--sm">CHOWDHURY AKRAM HOSSAIN</h3>
                    <p class="osa-role osa-role--sm">Special Assistant Of OSA</p>
                </div>

                <div class="osa-card">
                    <div class="osa-avatar-wrapper osa-avatar-wrapper--sm">
                        <img src="../photos/OSA/Shama Islam.jpg" alt="Shama Islam" class="osa-avatar">
                    </div>
                    <h3 class="osa-name osa-name--sm">SHAMA ISLAM</h3>
                    <p class="osa-role osa-role--sm">Special Assistant Of OSA</p>
                </div>

                <div class="osa-card">
                    <div class="osa-avatar-wrapper osa-avatar-wrapper--sm">
                        <img src="../photos/OSA/Abhijit Bhowmik.jpg" alt="Md. Rakibul Alam (Polok)" class="osa-avatar">
                    </div>
                    <h3 class="osa-name osa-name--sm">MD. RAKIBUL ALAM (POLOK)</h3>
                    <p class="osa-role osa-role--sm">Jr. Executive, Office Of Student Affairs</p>
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
