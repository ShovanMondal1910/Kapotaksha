<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Clubs &amp; Co-Curriculars | Kapotaksha High School (KHS)</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/clubs.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

<!-- Navigation Bar -->
<?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Hero Header -->
    <header class="clubs-hero">
        <div class="container">
            <span class="clubs-hero-badge">Student Life &amp; Leadership</span>
            <h1 class="clubs-hero-title">Clubs &amp; Co-Curricular Activities</h1>
            <p class="clubs-hero-desc">
                Nurturing leadership, creativity, sportsmanship, and civic duty beyond the classroom. At Kapotaksha High School, every student is encouraged to discover their passions and cultivate lifelong skills.
            </p>
            <div class="clubs-quick-stats">
                <div class="club-stat-pill">
                    <span>🏛️</span> Active Clubs: <strong>8 Societies</strong>
                </div>
                <div class="club-stat-pill">
                    <span>👥</span> Student Members: <strong>350+ Students</strong>
                </div>
                <div class="club-stat-pill">
                    <span>🏆</span> Annual Events: <strong>15+ Competitions</strong>
                </div>
                <div class="club-stat-pill">
                    <span>🎖️</span> Awards Won: <strong>25+ Trophies</strong>
                </div>
            </div>
        </div>
    </header>

    <!-- Clubs Catalog -->
    <section class="clubs-catalog-section">
        <div class="container">

            <div class="clubs-header">
                <span class="clubs-label">Explore Societies</span>
                <h2 class="clubs-title">Our Student Clubs</h2>
                <p class="clubs-desc">Choose from our diverse co-curricular societies guided by dedicated faculty moderators.</p>
            </div>


            <!-- Clubs Grid -->
            <div class="row g-4" id="clubs-grid">

                <!-- 1. Debate Club -->
                <div class="col-lg-4 col-md-6 club-col" data-category="academic">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/clubs/debate.jpg" alt="KHS Debating Society" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">Public Speaking</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">KHS Debating Society</h3>
                            <p class="club-card-desc">
                                Fosters eloquence, logical reasoning, and argumentation skills in both Bengali and English parliamentary debate formats. Prepares teams for inter-school, upazila, and national championships.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Senior Language Faculty</li>
                                <li><strong>⏰ Sessions:</strong> Every Tuesday, 3:30 PM</li>
                                <li><strong>🎯 Key Event:</strong> Annual Inter-House Debate Trophy</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 45 Members</span>
                                <button class="btn-view-member" data-club="KHS Debating Society">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- 2. Science & STEM Club -->
                <div class="col-lg-4 col-md-6 club-col" data-category="academic">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/clubs/science.jpg" alt="KHS Science & STEM Club" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">STEM &amp; Robotics</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">Science &amp; STEM Club</h3>
                            <p class="club-card-desc">
                                Hands-on scientific inquiry, robotics experiments, coding challenges, math olympiad training, and innovation projects for district and national science fairs.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Science &amp; ICT Department</li>
                                <li><strong>⏰ Sessions:</strong> Every Wednesday, 3:30 PM</li>
                                <li><strong>🎯 Key Event:</strong> District Inter-School Science Fair</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 60 Members</span>
                                <button class="btn-view-member" data-club="Science & STEM Club">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- 3. Cultural & Performing Arts -->
                <div class="col-lg-4 col-md-6 club-col" data-category="cultural">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/SummerOrientaion2026/p1.jpg" alt="Cultural & Performing Arts Club" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">Music &amp; Drama</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">Cultural &amp; Performing Arts</h3>
                            <p class="club-card-desc">
                                Preserves and celebrates our rich Bengali cultural heritage through vocal music, classical and folk dance, theater productions, poetry recitation, and festival performances.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Cultural Activities Committee</li>
                                <li><strong>⏰ Sessions:</strong> Every Thursday, 3:00 PM</li>
                                <li><strong>🎯 Key Event:</strong> Puja &amp; Pahela Baishakh Galas</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 75 Members</span>
                                <button class="btn-view-member" data-club="Cultural & Performing Arts Club">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- 4. Sports & Athletics Club -->
                <div class="col-lg-4 col-md-6 club-col" data-category="sports">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/facilities/sports_ground.jpg" alt="Sports & Athletics Club" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">Athletics</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">Sports &amp; Athletics Club</h3>
                            <p class="club-card-desc">
                                Organizes inter-class football tournaments, cricket leagues, track and field training, badminton championships, and tactical chess competitions to build discipline and fitness.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Physical Education Department</li>
                                <li><strong>⏰ Sessions:</strong> Mon &amp; Fri, 4:00 PM</li>
                                <li><strong>🎯 Key Event:</strong> Annual Sports Meet &amp; Tournament</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 90 Members</span>
                                <button class="btn-view-member" data-club="Sports & Athletics Club">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- 5. Bangladesh Scout & Girl Guides -->
                <div class="col-lg-4 col-md-6 club-col" data-category="service">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/clubs/scouts.jpg" alt="Bangladesh Scout Troop" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">Scouts &amp; Guides</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">Scout &amp; Girl Guide Troop</h3>
                            <p class="club-card-desc">
                                Instills self-discipline, civic duty, outdoor survival, first aid, emergency disaster response, and leadership through national scout jamborees and community camps.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Certified Scout Leader</li>
                                <li><strong>⏰ Sessions:</strong> Every Saturday, 10:00 AM</li>
                                <li><strong>🎯 Key Event:</strong> Regional Camporee &amp; Rallies</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 50 Scouts</span>
                                <button class="btn-view-member" data-club="Scout & Girl Guide Troop">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- 6. Literary & Wall Magazine Club -->
                <div class="col-lg-4 col-md-6 club-col" data-category="academic">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/facilities/library.jpg" alt="Literary & Wall Magazine Club" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">Creative Writing</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">Literary &amp; Publications Club</h3>
                            <p class="club-card-desc">
                                Encourages student writers and poets to express original thoughts. Curates and publishes the termly school wall magazine <em>"Kapotaksha Prabaha"</em> for 21st February and Victory Day.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Bengali Literature Faculty</li>
                                <li><strong>⏰ Sessions:</strong> Alternate Thursdays, 3:30 PM</li>
                                <li><strong>🎯 Key Event:</strong> Wall Magazine Exhibition</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 35 Members</span>
                                <button class="btn-view-member" data-club="Literary & Publications Club">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- 7. Eco & Coastal Green Club -->
                <div class="col-lg-4 col-md-6 club-col" data-category="service">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/AHS Photo.jpg" alt="Eco & Coastal Green Club" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">Environment</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">Eco &amp; Coastal Green Club</h3>
                            <p class="club-card-desc">
                                Promotes coastal climate resilience and mangrove conservation around the Sundarbans region. Leads tree plantation weeks, plastic-free campus campaigns, and clean water drives.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Geography &amp; Social Science Faculty</li>
                                <li><strong>⏰ Sessions:</strong> Bi-weekly Saturdays, 2:00 PM</li>
                                <li><strong>🎯 Key Event:</strong> Annual Tree Planting Week</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 40 Members</span>
                                <button class="btn-view-member" data-club="Eco & Coastal Green Club">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- 8. Fine Arts & Photography Club -->
                <div class="col-lg-4 col-md-6 club-col" data-category="cultural">
                    <article class="club-card">
                        <div class="club-card-img-wrapper">
                            <img src="../photos/Holi2026.jpg" alt="Fine Arts & Photography Club" class="club-card-img" loading="lazy">
                            <span class="club-card-badge">Visual Arts</span>
                        </div>
                        <div class="club-card-body">
                            <h3 class="club-card-title">Fine Arts &amp; Photography Club</h3>
                            <p class="club-card-desc">
                                Develops artistic talent in sketching, watercolor painting, calligraphy, cartooning, and digital event photography. Decorates campus stages for all national and religious festivals.
                            </p>
                            <ul class="club-details-list">
                                <li><strong>👨‍🏫 Moderator:</strong> Art &amp; Design Teacher</li>
                                <li><strong>⏰ Sessions:</strong> Every Friday, 3:00 PM</li>
                                <li><strong>🎯 Key Event:</strong> Annual Fine Arts Exhibition</li>
                            </ul>
                            <div class="club-card-footer">
                                <span class="club-members-count">👥 30 Members</span>
                                <button class="btn-view-member" data-club="Fine Arts & Photography Club">View Member 👥</button>
                            </div>
                        </div>
                    </article>
                </div>

            </div>

        </div>
    </section>

    <!-- Co-Curricular Calendar Timeline -->
    <section class="calendar-section">
        <div class="container">
            <div class="clubs-header">
                <span class="clubs-label">Activity Schedule</span>
                <h2 class="clubs-title">Annual Co-Curricular Calendar</h2>
                <p class="clubs-desc">Mark your calendar for this academic session's major inter-school and intra-house competitions.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Event 1 -->
                    <div class="timeline-card">
                        <div class="timeline-date-badge">
                            <div class="timeline-date-day">15</div>
                            <div class="timeline-date-month">AUG 2026</div>
                        </div>
                        <div class="timeline-content">
                            <div class="timeline-event-org">Science &amp; STEM Club</div>
                            <h3 class="timeline-event-title">District Inter-School Science Fair</h3>
                            <p class="timeline-event-desc">
                                Students from Classes 8 to 10 will showcase robotic prototypes, renewable energy solutions, and biology exhibitions at the Khulna District Science Fair.
                            </p>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="timeline-card">
                        <div class="timeline-date-badge">
                            <div class="timeline-date-day">20</div>
                            <div class="timeline-date-month">SEP 2026</div>
                        </div>
                        <div class="timeline-content">
                            <div class="timeline-event-org">KHS Debating Society</div>
                            <h3 class="timeline-event-title">KHS Inter-House Parliamentary Debate Championship</h3>
                            <p class="timeline-event-desc">
                                Three-day rigorous debate tournament in Bengali &amp; English featuring 16 student teams arguing contemporary national and educational motions.
                            </p>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="timeline-card">
                        <div class="timeline-date-badge">
                            <div class="timeline-date-day">10</div>
                            <div class="timeline-date-month">NOV 2026</div>
                        </div>
                        <div class="timeline-content">
                            <div class="timeline-event-org">Sports &amp; Athletics Club</div>
                            <h3 class="timeline-event-title">Annual Sports Competition &amp; Athletic Meet</h3>
                            <p class="timeline-event-desc">
                                Track sprints, high jump, cricket cup, and football finals held on the main sports grounds, followed by the grand championship prize distribution ceremony.
                            </p>
                        </div>
                    </div>

                    <!-- Event 4 -->
                    <div class="timeline-card">
                        <div class="timeline-date-badge">
                            <div class="timeline-date-day">16</div>
                            <div class="timeline-date-month">DEC 2026</div>
                        </div>
                        <div class="timeline-content">
                            <div class="timeline-event-org">Cultural Club &amp; Scout Troop</div>
                            <h3 class="timeline-event-title">Victory Day Cultural Gala &amp; Wall Magazine Launch</h3>
                            <p class="timeline-event-desc">
                                Solemn patriotic assembly, parade by KHS Scout Troop, stage drama, and inauguration of the Victory Day edition of <em>"Kapotaksha Prabaha"</em> wall magazine.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Student Achievements & Hall of Fame -->
    <section class="hall-of-fame-section">
        <div class="container">
            <h2 class="fame-title">Student Hall of Fame</h2>
            <p class="fame-subtitle">Celebrating the stellar achievements of our students in regional and national co-curricular arenas.</p>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="fame-card">
                        <div class="fame-icon">🏆</div>
                        <h3 class="fame-award-title">1st Place - Upazila Debate</h3>
                        <p class="fame-award-event">Koyra Upazila Inter-School Debate (2025)</p>
                        <p class="fame-award-desc">Awarded Champion Trophy for logical argumentation on "Education &amp; Technology in Coastal Development."</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="fame-card">
                        <div class="fame-icon">🔬</div>
                        <h3 class="fame-award-title">Best Science Innovation</h3>
                        <p class="fame-award-event">Khulna Division Science Fair (2025)</p>
                        <p class="fame-award-desc">Project "Coastal Saline Water Purification Model" secured 2nd runner-up among 42 secondary schools.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="fame-card">
                        <div class="fame-icon">⚽</div>
                        <h3 class="fame-award-title">Zilla Football Runners-Up</h3>
                        <p class="fame-award-event">District Inter-School Summer Tournament</p>
                        <p class="fame-award-desc">KHS football team demonstrated exceptional teamwork and sportsmanship across five competitive match rounds.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Interactive Club Member Roster Modal -->
    <div class="roster-modal" id="memberRosterModal" role="dialog" aria-modal="true" aria-labelledby="modalRosterClubTitle">
        <div class="roster-modal-content">
            <div class="roster-modal-header">
                <div class="roster-modal-header-left">
                    <span class="roster-club-badge" id="modalRosterCategory">Club Category</span>
                    <h3 class="roster-modal-title" id="modalRosterClubTitle">Club Member Directory</h3>
                    <p class="roster-modal-sub" id="modalRosterModerator">👨‍🏫 Moderator: Faculty In-Charge</p>
                </div>
                <button class="roster-modal-close" id="btnRosterModalClose" aria-label="Close modal">&times;</button>
            </div>
            <div class="roster-modal-toolbar">
                <div class="roster-search-box">
                    <span class="roster-search-icon">🔍</span>
                    <input type="text" id="rosterSearchInput" class="roster-search-input" placeholder="Search members by name, class, or role...">
                </div>
                <div class="roster-count-badge" id="rosterCountBadge">Showing Members</div>
            </div>
            <div class="roster-modal-body">
                <div class="roster-table-wrapper">
                    <table class="roster-table" id="rosterTable">
                        <thead>
                            <tr>
                                <th class="roster-th-sl">SL</th>
                                <th>Student Name</th>
                                <th>Designation / Role</th>
                                <th>Class &amp; Sec</th>
                                <th class="roster-th-roll">Roll No</th>
                            </tr>
                        </thead>
                        <tbody id="rosterTableBody">
                            <!-- Populated dynamically via JS -->
                        </tbody>
                    </table>
                </div>
                <div class="roster-empty-msg" id="rosterEmptyMsg">
                    <p>No members found matching your search.</p>
                </div>
            </div>
            <div class="roster-modal-footer">
                <span class="roster-footer-note">📌 Official Student Roster • Kapotaksha High School (KHS)</span>
                <button type="button" class="roster-btn-dismiss" id="btnRosterDismiss">Close</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <!-- Scripts -->
    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/i18n.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>

    <script src="js/clubs.js"></script>
</body>
</html>
