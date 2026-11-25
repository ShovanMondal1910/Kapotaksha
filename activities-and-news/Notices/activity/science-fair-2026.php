<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity  |  Kapotaksha High School</title>
    <link href="../../../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/base.css">
    <link rel="stylesheet" href="../../../css/navbar.css">
    <link rel="stylesheet" href="../../../css/footer.css">
    <link rel="stylesheet" href="../../css/post.css">
    <link rel="icon" href="../../../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- --- NAVBAR ------------------------------------------------------- -->
    <!-- Navigation Bar -->
    <?php
$root = '../../';
include __DIR__ . '/../../../components/navbar.php';
?>

    <!-- --- POST WRAPPER ------------------------------------------------ -->
    <main class="post-page">
        <div class="container">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="post-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="../../ActivityAndNews.php">Activities &amp; News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Activity</li>
                </ol>
            </nav>

            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <!-- -- POST HEADER -------------------------------- -->
                    <header class="post-header">
                        <div class="post-meta-top">
                            <span class="post-badge badge-activity">Activity</span>
                            <!-- ?? Update the date -->
                            <time class="post-date" datetime="2026-07-20">July 20, 2026</time>
                        </div>
                        <!-- ?? Update the title -->
                        <h1 class="post-title">Inter-School Science Fair  |  2026</h1>
                        <!-- ?? Short intro line (optional) -->
                        <p class="post-lead">Kapotaksha High School students showcased their scientific talent at the District Inter-School Science Fair held on 15th August 2026.</p>
                    </header>

                    <!-- -- COVER PHOTO --------------------------------- -->
                    <!--
                        Replace the src with your actual cover image.
                        Remove this block if no cover photo needed.
                    -->
                    <div class="post-cover">
                        <img src="../../../photos/GroupPhoto.jpg" alt="Science Fair Cover Photo" class="post-cover-img">
                        <!-- ?? Optional caption -->
                        <p class="post-cover-caption">Students presenting their projects at the Science Fair</p>
                    </div>

                    <!-- -- POST BODY ---------------------------------- -->
                    <article class="post-body">

                        <!-- ?? Write the full activity write-up here -->
                        <p>On <strong>15th August 2026</strong>, Kapotaksha High School proudly participated in the District Inter-School Science Fair. Students from classes 8 to 10 presented a wide range of innovative projects covering topics from renewable energy to environmental science.</p>

                        <p>The event was judged by a panel of experts from local universities and government science bodies. Our students demonstrated exceptional creativity and scientific understanding, earning recognition from the judges.</p>

                        <!-- -- HIGHLIGHTS LIST (optional) -------------- -->
                        <h3>Highlights</h3>
                        <ul>
                            <li>12 student projects were submitted from Kapotaksha High School.</li>
                            <li>3 projects were shortlisted for the national round.</li>
                            <li>Best Project Award received by Class 10 students.</li>
                        </ul>

                        <!-- -- INLINE PHOTO (optional) ---------------- -->
                        <!--
                        <figure class="post-figure">
                            <img src="../../../photos/YOUR-PHOTO.jpg" alt="Photo description" class="post-figure-img">
                            <figcaption>Caption (optional)</figcaption>
                        </figure>
                        -->

                        <p>The school management congratulates all participating students and thanks the teachers who guided and mentored them throughout the preparation process.</p>

                    </article>

                    <!-- -- PHOTO GALLERY ------------------------------- -->
                    <!--
                        Add as many photos as needed.
                        Copy a <div class="post-gallery-item"> for each photo.
                        Photos display as a responsive grid (3 columns on desktop).
                    -->
                    <div class="post-gallery-section">
                        <h3 class="post-gallery-heading">Photo Gallery</h3>
                        <div class="post-gallery">
                            <div class="post-gallery-item">
                                <!-- ?? Replace src with your photo path -->
                                <img src="../../../photos/GroupPhoto.jpg" alt="Science Fair Photo 1"
                                     data-bs-toggle="modal" data-bs-target="#lightboxModal"
                                     data-img-src="../../../photos/GroupPhoto.jpg"
                                     data-img-caption="Science Fair  |  Group Photo">
                            </div>
                            <div class="post-gallery-item">
                                <img src="../../../photos/AHS Photo.jpg" alt="Science Fair Photo 2"
                                     data-bs-toggle="modal" data-bs-target="#lightboxModal"
                                     data-img-src="../../../photos/AHS Photo.jpg"
                                     data-img-caption="Science Fair  |  Project Display">
                            </div>
                            <div class="post-gallery-item">
                                <img src="../../../photos/SaraswatiPuja2026.jpg" alt="Science Fair Photo 3"
                                     data-bs-toggle="modal" data-bs-target="#lightboxModal"
                                     data-img-src="../../../photos/SaraswatiPuja2026.jpg"
                                     data-img-caption="Science Fair  |  Award Ceremony">
                            </div>
                            <!-- Copy a <div class="post-gallery-item"> above to add more photos -->
                        </div>
                    </div>

                    <!-- -- LIGHTBOX MODAL ---------------------------- -->
                    <div class="modal fade" id="lightboxModal" tabindex="-1" aria-label="Photo lightbox" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content bg-dark border-0">
                                <div class="modal-header border-0 pb-0">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center p-2">
                                    <img id="lightboxImg" src="" alt="Full size photo" class="img-fluid rounded">
                                    <p id="lightboxCaption" class="text-white-50 mt-2 mb-0 small"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -- ATTACHMENTS (PDFs / Files) ----------------- -->
                    <!--
                        Add downloadable files here.
                        Remove this block if no files to attach.
                    -->
                    <div class="post-attachments">
                        <h3 class="attachments-title">Attachments</h3>
                        <ul class="attachments-list">
                            <li>
                                <a href="../../files/science-fair-results.pdf" class="attachment-item" download>
                                    <span class="attachment-icon">??</span>
                                    <span class="attachment-name">Science Fair Results.pdf</span>
                                    <span class="attachment-size">Download</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../files/project-guidelines.pdf" class="attachment-item" download>
                                    <span class="attachment-icon">??</span>
                                    <span class="attachment-name">Project Guidelines.pdf</span>
                                    <span class="attachment-size">Download</span>
                                </a>
                            </li>
                            <!-- Copy the <li> above for more files -->
                        </ul>
                    </div>

                    <!-- Back button -->
                    <div class="post-back">
                        <a href="../../ActivityAndNews.php" class="post-back-btn">&larr; Back to Activities &amp; News</a>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <?php include __DIR__ . '/../../../components/footer.php'; ?>

    <script src="../../../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../../js/search.js"></script>
    <script src="../../../js/main.js"></script>
    <script src="../../js/lightbox.js"></script>
</body>
</html>
