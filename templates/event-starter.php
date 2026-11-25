<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Title | Kapotaksha High School Events</title>
    
    <!-- Stylesheets -->
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/variables.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../events/css/event-detail.css">
    
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Navigation -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Event Hero Header -->
    <header class="page-banner text-center text-white py-5 mb-4 position-relative">
        <div class="container position-relative z-1 py-4">
            <span class="badge bg-primary px-3 py-2 rounded-pill mb-3">Celebration</span>
            <h1 class="display-5 fw-bold">Event Title Goes Here</h1>
            <p class="lead mb-0">October 15, 2026 &bull; School Auditorium, Kapotaksha High School</p>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="container my-5">
        <div class="row">
            <!-- Event Article Body -->
            <div class="col-lg-8">
                <article class="pe-lg-4">
                    <img src="../photos/Cover.gif" alt="Event Banner" class="img-fluid rounded-3 shadow-sm mb-4 w-100" style="max-height: 400px; object-fit: cover;">
                    
                    <h2 class="h3 fw-bold mb-3">About the Event</h2>
                    <p class="lead">Write an engaging opening summary describing the event, its objectives, and key highlights here.</p>
                    
                    <p>Detailed description of the program. Include background context, guest speakers, schedule breakdown, and participation details.</p>

                    <h3 class="mt-4">Event Schedule</h3>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Opening Ceremony &amp; National Anthem
                            <span class="badge bg-secondary rounded-pill">09:00 AM</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Welcome Address by Headmaster
                            <span class="badge bg-secondary rounded-pill">09:30 AM</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Main Presentations &amp; Performances
                            <span class="badge bg-secondary rounded-pill">10:15 AM</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Prize Distribution &amp; Closing Remarks
                            <span class="badge bg-secondary rounded-pill">12:30 PM</span>
                        </li>
                    </ul>

                    <h3 class="mt-4">Participation Guidelines</h3>
                    <p>All students, parents, and community members are warmly welcome. Please maintain school discipline and bring your student ID card.</p>
                </article>
            </div>

            <!-- Sidebar Info -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Quick Information</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><strong>Organizer:</strong> KHS Cultural Committee</li>
                            <li class="mb-2"><strong>Target Audience:</strong> All Students &amp; Faculty</li>
                            <li class="mb-2"><strong>Entry:</strong> Free for registered students</li>
                            <li class="mb-2"><strong>Dress Code:</strong> School Uniform</li>
                        </ul>
                        <a href="../events/Events.php" class="btn btn-outline-primary w-100 mt-2">&larr; Back to All Events</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <!-- Scripts -->
    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/i18n.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
