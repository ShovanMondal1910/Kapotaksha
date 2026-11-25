<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities &amp; News | Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/activity-news.css">
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Navigation Bar -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Page Banner -->
    <div class="page-banner">
        <img src="../photos/Cover.gif" alt="KHS Cover" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">Activities &amp; News</h1>
            <p class="page-banner-sub">Stay updated with the latest notices, activities, and school announcements</p>
        </div>
    </div>

    <!-- -- NOTICE BOARD --------------------------------------------------- -->
    <section class="notice-section">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title">Notice Board</h2>
                <span class="section-title-accent"></span>
                <p class="section-subtitle">Official announcements and notices from Kapotaksha High School</p>
            </div>

            <!-- Filter Tabs -->
            <div class="notice-filter-tabs" role="tablist" aria-label="Notice filter">
                <button class="filter-tab active" data-filter="all" role="tab" aria-selected="true">All</button>
                <button class="filter-tab" data-filter="notice" role="tab" aria-selected="false">Notices</button>
                <button class="filter-tab" data-filter="activity" role="tab" aria-selected="false">Activities</button>
                <button class="filter-tab" data-filter="news" role="tab" aria-selected="false">News</button>
                <button class="filter-tab" data-filter="exam" role="tab" aria-selected="false">Exams</button>
            </div>

            <!-- Notice List -->
            <div class="notice-list" id="noticeList">

                <!-- ----------------------------------------------------------
                     HOW TO ADD A NEW POST:
                     1. Copy any <article class="notice-card"> block below.
                     2. Paste it at the TOP of this list (newest first).
                     3. Update: data-type, badge, title, date, excerpt text.
                     4. Set href on "Read More" to the category notice file:
                          Notice   -> Notices/notice/notice-template.php
                          Activity -> Notices/activity/activity-template.php
                          News     -> Notices/news/news-template.php
                          Exam     -> Notices/exam/exam-template.php
                        (copy the template into the category folder, rename it, then link to the copy)
                ----------------------------------------------------------- -->

                <!-- ── SAMPLE NOTICE 1 ── -->
                <article class="notice-card" data-type="notice exam">
                    <div class="notice-meta">
                        <span class="notice-badge badge-exam">Exam</span>
                        <span class="notice-badge badge-notice">Notice</span>
                        <time class="notice-date" datetime="2026-11-16">November 16, 2026</time>
                    </div>
                    <div class="notice-body">
                        <h3 class="notice-title">Annual Exam Schedule  |  2026</h3>
                        <p class="notice-text">
                            The official examination timetable for the Annual Examination 2026 (Classes 6 to 9) has been published. Exams will commence on <strong>19th November 2026</strong> (Thursday) at <strong>10:00 AM daily</strong>.
                        </p>
                        <div class="notice-actions">
                            <a href="Notices/exam/annual-exam-schedule-2026.php" class="notice-read-more">Read More</a>
                        </div>
                    </div>
                </article>

                <!-- -- SAMPLE NOTICE 2 -- -->
                <article class="notice-card" data-type="activity">
                    <div class="notice-meta">
                        <span class="notice-badge badge-activity">Activity</span>
                        <time class="notice-date" datetime="2026-07-20">July 20, 2026</time>
                    </div>
                    <div class="notice-body">
                        <h3 class="notice-title">Inter-School Science Fair  |  Participation Open</h3>
                        <p class="notice-text">
                            Kapotaksha High School is participating in the District Inter-School Science Fair on <strong>15th August 2026</strong>. Students from classes 8 | 10 may register by submitting a project proposal before <strong>30th July 2026</strong>.
                        </p>
                        <div class="notice-actions">
                            <a href="Notices/activity/science-fair-2026.php" class="notice-read-more">Read More</a>
                        </div>
                    </div>
                </article>

                <!-- -- SAMPLE NOTICE 3 -- -->
                <article class="notice-card" data-type="news">
                    <div class="notice-meta">
                        <span class="notice-badge badge-news">News</span>
                        <time class="notice-date" datetime="2026-07-10">July 10, 2026</time>
                    </div>
                    <div class="notice-body">
                        <h3 class="notice-title">KHS Students Excel in SSC Result 2026</h3>
                        <p class="notice-text">
                            We are proud to announce a <strong>98% pass rate</strong> in the SSC Examination 2026, with <strong>42 students securing GPA 5.0</strong>. The school management congratulates all successful students.
                        </p>
                        <div class="notice-actions">
                            <a href="Notices/news/ssc-result-2026.php" class="notice-read-more">Read More</a>
                        </div>
                    </div>
                </article>

                <!-- -- SAMPLE NOTICE 4 -- -->
                <article class="notice-card" data-type="exam">
                    <div class="notice-meta">
                        <span class="notice-badge badge-exam">Exam</span>
                        <time class="notice-date" datetime="2026-07-05">July 5, 2026</time>
                    </div>
                    <div class="notice-body">
                        <h3 class="notice-title">Half-Yearly Exam Results Published</h3>
                        <p class="notice-text">
                            Results of the Half-Yearly Examination 2026 have been published. Students may collect mark sheets from <strong>8th July 2026</strong>. Parent | Teacher Meeting: <strong>12th July at 10:00 AM</strong>.
                        </p>
                        <div class="notice-actions">
                            <a href="Notices/exam/half-yearly-results-2026.php" class="notice-read-more">Read More</a>
                        </div>
                    </div>
                </article>

                <!-- -- SAMPLE NOTICE 5 -- -->
                <article class="notice-card" data-type="activity">
                    <div class="notice-meta">
                        <span class="notice-badge badge-activity">Activity</span>
                        <time class="notice-date" datetime="2026-06-28">June 28, 2026</time>
                    </div>
                    <div class="notice-body">
                        <h3 class="notice-title">Annual Sports Day  |  Registration Now Open</h3>
                        <p class="notice-text">
                            The Annual Sports Day will be held on <strong>20th September 2026</strong>. Students interested in athletic events must register with their Physical Education teacher by <strong>10th September 2026</strong>.
                        </p>
                        <div class="notice-actions">
                            <a href="Notices/activity/annual-sports-day-2026.php" class="notice-read-more">Read More</a>
                        </div>
                    </div>
                </article>

                <!-- -- SAMPLE NOTICE 6 -- -->
                <article class="notice-card" data-type="notice">
                    <div class="notice-meta">
                        <span class="notice-badge badge-notice">Notice</span>
                        <time class="notice-date" datetime="2026-06-15">June 15, 2026</time>
                    </div>
                    <div class="notice-body">
                        <h3 class="notice-title">School Fees Payment Reminder  |  July 2026</h3>
                        <p class="notice-text">
                            All students are reminded to clear their fees for July 2026 by <strong>15th July 2026</strong>. Late payment will attract a fine as per school policy. Queries: school accounts office 9 AM  |  2 PM.
                        </p>
                        <div class="notice-actions">
                            <a href="Notices/notice/fee-payment-reminder-july-2026.php" class="notice-read-more">Read More</a>
                        </div>
                    </div>
                </article>

            </div><!-- /#noticeList -->

            <!-- Empty state (shown by JS when no notices match filter) -->
            <div class="notice-empty" id="noticeEmpty">
                <p>No notices found for this category.</p>
            </div>

        </div>
    </section>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="js/activity-news.js"></script>
    <script src="../js/search.js"></script>
</body>
</html>
