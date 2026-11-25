<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News  |  Kapotaksha High School</title>
    <link href="../../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/base.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../css/post.css">
    <link rel="icon" href="../../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- --- NAVBAR ------------------------------------------------------- -->
    <!-- Navigation Bar -->
    <?php
$root = '../../';
include __DIR__ . '/../../components/navbar.php';
?>

    <!-- --- POST WRAPPER ------------------------------------------------ -->
    <main class="post-page">
        <div class="container">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="post-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="../ActivityAndNews.php">Activities &amp; News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>

            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- -- POST HEADER -------------------------------- -->
                    <header class="post-header">
                        <div class="post-meta-top">
                            <span class="post-badge badge-news">News</span>
                            <!-- ?? Update the date -->
                            <time class="post-date" datetime="2026-07-10">July 10, 2026</time>
                        </div>
                        <!-- ?? Update the headline -->
                        <h1 class="post-title">KHS Students Excel in SSC Result 2026</h1>
                        <!-- ?? One-line summary (optional) -->
                        <p class="post-lead">Kapotaksha High School achieves an outstanding 98% pass rate in the SSC Examination 2026, with 42 students securing GPA 5.0.</p>
                    </header>

                    <!-- -- COVER PHOTO --------------------------------- -->
                    <!--
                        Replace src with your actual photo.
                        Remove this block if no cover photo.
                    -->
                    <div class="post-cover">
                        <img src="../../photos/AHS Photo.jpg" alt="SSC Result Celebration" class="post-cover-img">
                        <p class="post-cover-caption">Teachers and students celebrating the SSC result</p>
                    </div>

                    <!-- -- POST BODY ---------------------------------- -->
                    <article class="post-body">

                        <!-- ?? Write the full news article here -->
                        <p>We are proud to announce that Kapotaksha High School achieved exceptional results in the SSC Examination 2026. The school recorded an overall pass rate of <strong>98%</strong>, with <strong>42 students securing the coveted GPA 5.0</strong>.</p>

                        <p>This achievement reflects the dedication of our students, the tireless effort of our teachers, and the continued support of parents and guardians throughout the academic year.</p>

                        <!-- -- RESULT STATS TABLE ------------------- -->
                        <div class="post-info-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Total Students Appeared</td><td>120</td></tr>
                                    <tr><td>Passed</td><td>118 (98%)</td></tr>
                                    <tr><td>GPA 5.0</td><td>42</td></tr>
                                    <tr><td>GPA 4.0 and above</td><td>75</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <p>The Principal of Kapotaksha High School congratulated all the students and urged them to continue their academic journey with the same dedication and commitment.</p>

                        <!-- -- QUOTE BLOCK (optional) --------------- -->
                        <blockquote class="post-quote">
                            "This result is a testament to the hard work of our students and the commitment of our teachers. We aim to do even better next year."
                            <cite> |  Headmaster, Kapotaksha High School</cite>
                        </blockquote>

                        <!-- -- INLINE PHOTO (optional) ---------------- -->
                        <!--
                        <figure class="post-figure">
                            <img src="../../photos/YOUR-PHOTO.jpg" alt="Caption" class="post-figure-img">
                            <figcaption>Caption (optional)</figcaption>
                        </figure>
                        -->

                    </article>

                    <!-- -- PHOTO GALLERY (optional) ------------------- -->
                    <!--
                    <div class="post-gallery-section">
                        <h3 class="post-gallery-heading">Photo Gallery</h3>
                        <div class="post-gallery">
                            <div class="post-gallery-item">
                                <img src="../../photos/PHOTO1.jpg" alt="Photo 1"
                                     data-bs-toggle="modal" data-bs-target="#lightboxModal"
                                     data-img-src="../../photos/PHOTO1.jpg"
                                     data-img-caption="Caption 1">
                            </div>
                            <div class="post-gallery-item">
                                <img src="../../photos/PHOTO2.jpg" alt="Photo 2"
                                     data-bs-toggle="modal" data-bs-target="#lightboxModal"
                                     data-img-src="../../photos/PHOTO2.jpg"
                                     data-img-caption="Caption 2">
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="lightboxModal" tabindex="-1" aria-label="Photo lightbox" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content bg-dark border-0">
                                <div class="modal-header border-0 pb-0">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center p-2">
                                    <img id="lightboxImg" src="" alt="Full size" class="img-fluid rounded">
                                    <p id="lightboxCaption" class="text-white-50 mt-2 mb-0 small"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->

                    <!-- -- ATTACHMENTS --------------------------------- -->
                    <!--
                        Attach PDFs or any files here. Remove if not needed.
                    -->
                    <!--
                    <div class="post-attachments">
                        <h3 class="attachments-title">Attachments</h3>
                        <ul class="attachments-list">
                            <li>
                                <a href="../../files/ssc-result-2026.pdf" class="attachment-item" download>
                                    <span class="attachment-icon">??</span>
                                    <span class="attachment-name">SSC Result Summary 2026.pdf</span>
                                    <span class="attachment-size">Download</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    -->

                    <!-- -- EXTERNAL LINKS (optional) ------------------ -->
                    <!--
                    <div class="post-links">
                        <h3 class="post-links-title">Useful Links</h3>
                        <ul>
                            <li><a href="https://dhakaeducationboard.gov.bd" target="_blank" rel="noopener">Dhaka Education Board  |  Result Portal</a></li>
                        </ul>
                    </div>
                    -->

                    <!-- Back button -->
                    <div class="post-back">
                        <a href="../ActivityAndNews.php" class="post-back-btn">&larr; Back to Activities &amp; News</a>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <?php include __DIR__ . '/../../components/footer.php'; ?>

    <script src="../../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../js/search.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../js/lightbox.js"></script>
</body>
</html>
