<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHS | Online</title>
    <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/leadership.css">
    <link rel="stylesheet" href="css/why-choose.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/stats.css">
    <link rel="stylesheet" href="css/teams.css">
    <link rel="stylesheet" href="css/social.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="photos/KHS.png" type="image/png">
</head>

<body>

    <!-- Navigation Bar -->
    <?php include 'components/navbar.php'; ?>

    <!-- Hero Slider / Carousel -->
    <header class="hero-slider-section">
        <div id="heroSlider" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel"
            data-bs-interval="4000" data-bs-pause="hover">

            <!-- Slides -->
            <div class="carousel-inner">
                <!-- Slide 1: Main School Photo -->
                <div class="carousel-item active">
                    <img src="photos/KHS Home.jpeg" alt="Kapotaksha High School Photo" class="hero-slide-img"
                        fetchpriority="high">
                </div>

                <!-- Slide 2: Campus Life -->
                <div class="carousel-item">
                    <img src="photos/KHS Home 2.jpeg" alt="Kapotaksha High School Campus Life" class="hero-slide-img"
                        loading="lazy">
                </div>

                <!-- Slide 3: Science Lab -->
                <div class="carousel-item">
                    <img src="photos/facilities/science_lab.jpg" alt="Science Laboratory" class="hero-slide-img"
                        loading="lazy">
                </div>

                <!-- Slide 4: Sports Day -->
                <div class="carousel-item">
                    <img src="photos/facilities/sports_ground.jpg" alt="Sports Grounds" class="hero-slide-img"
                        loading="lazy">
                </div>

                <!-- Slide 5: Classroom Activities -->
                <div class="carousel-item">
                    <img src="photos/facilities/classroom.jpg" alt="Classroom Activities" class="hero-slide-img"
                        loading="lazy">
                </div>
            </div>

            <!-- Navigation Controls -->
            <button class="hero-nav-btn hero-nav-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev"
                aria-label="Previous Slide">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                </svg>
            </button>
            <button class="hero-nav-btn hero-nav-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next"
                aria-label="Next Slide">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                </svg>
            </button>

            <!-- Bottom Indicators -->
            <div class="hero-indicators-bar" role="tablist" aria-label="Slide Indicators">
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0"
                    class="hero-indicator-dot active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" class="hero-indicator-dot"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" class="hero-indicator-dot"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="3" class="hero-indicator-dot"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="4" class="hero-indicator-dot"
                    aria-label="Slide 5"></button>
            </div>

        </div>
    </header>

    <!-- About KHS -->
    <section id="about-ahs" class="about-section reveal">
        <div class="container">
            <div class="row align-items-center">

                <!-- Text -->
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <p class="about-label">ABOUT</p>
                        <h2 class="about-title">Kapotaksha High School</h2>
                        <p class="about-text">
                            Kapotaksha High School is a well-recognized secondary educational institution located in
                            Khulna, Bangladesh. Established in <strong>1995</strong>, the school is registered under the
                            Directorate of Secondary and Higher Education (DSHE) with <strong>EIIN 117204</strong>. It
                            is affiliated with the <strong>Jessore Education Board</strong> and is dedicated to
                            providing quality education in a disciplined and student-friendly environment.
                        </p>
                        <p class="about-text">
                            The institution offers secondary-level education with academic programs in <strong>Science,
                                Business Studies, and Humanities</strong>. As a government-recognized school, it follows
                            the national curriculum and emphasizes academic excellence, moral values, leadership, and
                            extracurricular activities to ensure the all-round development of its students.
                        </p>
                        <p class="about-text">
                            Kapotaksha High School continues to serve the local community by preparing students for
                            higher education and responsible citizenship. Through experienced teachers, modern teaching
                            methods, and a supportive learning atmosphere, the school strives to develop knowledgeable,
                            skilled, and confident individuals who can contribute positively to society.
                        </p>
                    </div>
                </div>

                <!-- Photo -->
                <div class="col-lg-6 col-md-6">
                    <div class="about-image-wrapper">
                        <img src="photos/KHS Home.jpeg" alt="Kapotaksha High School photo" class="about-image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Leadership Messages (Chairman & Head Teacher) -->
    <section id="leadership-messages" class="leadership-section reveal">
        <div class="container">
            <div class="leadership-header">
                <span class="leadership-label">Leadership &amp; Vision</span>
                <h2 class="leadership-title">Messages from School Leadership</h2>
                <span class="section-title-accent"></span>
                <p class="leadership-subtitle">Guiding Kapotaksha High School towards academic excellence, moral
                    integrity, and community empowerment.</p>
            </div>

            <div class="row g-4">

                <!-- Message from the Chairman -->
                <div class="col-lg-6 col-12">
                    <article class="leadership-card">
                        <div class="leader-profile-header">
                            <div class="leader-photo-wrapper">
                                <img src="photos/Chairman.jpg" alt="Chairman, School Managing Committee"
                                    class="leader-photo" loading="lazy">
                            </div>
                            <div class="leader-meta">
                                <span class="leader-badge">Chairman's Message</span>
                                <h3 class="leader-name">CHAIRMAN</h3>
                                <p class="leader-role">Chairman, School Managing Committee (SMC)</p>
                                <p class="leader-org">Kapotaksha High School</p>
                            </div>
                        </div>

                        <div class="leader-message-body">
                            <div class="leader-quote-icon" aria-hidden="true">
                                <svg width="34" height="34" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>
                            <p class="leader-message-text">
                                "Education is the cornerstone of societal progress and personal character. At Kapotaksha
                                High School, our vision has always been to extend quality, value-driven secondary
                                education to our students so they can realize their fullest potential. We are dedicated
                                to providing a safe, progressive environment equipped with modern resources, moral
                                discipline, and dedicated mentorship. Together with our passionate teachers, supportive
                                parents, and the broader community, we will continue fostering young leaders who serve
                                the nation with honor and excellence."
                            </p>
                            <div class="leader-signature">
                                <p class="leader-signature-name">Chairman, SMC</p>
                                <p class="leader-motto">"Inspiring Excellence &amp; Character"</p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Message from the Head Teacher -->
                <div class="col-lg-6 col-12">
                    <article class="leadership-card">
                        <div class="leader-profile-header">
                            <div class="leader-photo-wrapper">
                                <img src="photos/Teachers/Ramen Roy.png" alt="Ramen Chandra Roy - Head Teacher"
                                    class="leader-photo" loading="lazy">
                            </div>
                            <div class="leader-meta">
                                <span class="leader-badge">Head Teacher's Message</span>
                                <h3 class="leader-name">RAMEN CHANDRA ROY</h3>
                                <p class="leader-role">Head Teacher</p>
                                <p class="leader-org">Kapotaksha High School</p>
                            </div>
                        </div>

                        <div class="leader-message-body">
                            <div class="leader-quote-icon" aria-hidden="true">
                                <svg width="34" height="34" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>
                            <p class="leader-message-text">
                                "A warm welcome to Kapotaksha High School. Having been a part of this esteemed
                                institution since January 1995, I have witnessed our students achieve outstanding
                                heights through discipline, curiosity, and steadfast determination. Our educational
                                philosophy transcends textbook learning; we cultivate critical thinking, extracurricular
                                talent, and moral uprightness across Science, Business Studies, and Humanities. Every
                                teacher here is pledged to nurture your child's aspirations and build a foundation for
                                lifelong success."
                            </p>
                            <div class="leader-signature">
                                <p class="leader-signature-name">Ramen Chandra Roy</p>
                                <p class="leader-motto">"Knowledge is Power | জ্ঞানই শক্তি"</p>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose KHS -->
    <section class="why-choose-section reveal">
        <div class="container">
            <h2 class="why-choose-title">Why Choose Kapotaksha High School?</h2>
            <span class="section-title-accent"></span>

            <div class="row g-4 justify-content-center">

                <!-- Academic Excellence -->
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-card">
                        <div class="why-choose-icon">
                            <img src="libs/icons/graduation-cap.png" alt="Academic Excellence" width="72" height="72">
                        </div>
                        <p class="why-choose-text">
                            We provide quality secondary education through experienced teachers, a structured
                            curriculum, and a strong focus on academic excellence to help students achieve outstanding
                            results.
                        </p>
                    </div>
                </div>

                <!-- Modern Learning -->
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-card">
                        <div class="why-choose-icon">
                            <img src="libs/icons/classroom.png" alt="Learning Environment" width="72" height="72">
                        </div>
                        <p class="why-choose-text">
                            Our school offers a safe and friendly learning environment with modern teaching methods that
                            encourage creativity, critical thinking, discipline, and lifelong learning.
                        </p>
                    </div>
                </div>

                <!-- Overall Development -->
                <div class="col-lg-4 col-md-6">
                    <div class="why-choose-card">
                        <div class="why-choose-icon">
                            <img src="libs/icons/trophy.png" alt="Student Development" width="72" height="72">
                        </div>
                        <p class="why-choose-text">
                            Along with academics, students participate in sports, cultural programs, science fairs, and
                            extracurricular activities that develop leadership, confidence, teamwork, and social
                            responsibility.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Events -->
    <section id="events" class="events-section reveal">

        <div class="events-wave-top">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0,0 C360,80 1080,80 1440,0 L1440,80 L0,80 Z" fill="#f5f500" />
            </svg>
        </div>

        <div class="events-inner">
            <div class="container">
                <h2 class="events-title">Our Events</h2>
                <span class="section-title-accent"></span>
                <div class="row g-4 justify-content-center">

                    <div class="col-lg-4 col-md-6">
                        <div class="event-card">
                            <img src="photos/KHS Home.jpeg" alt="Saraswati Puja event" class="event-img">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="event-card">
                            <img src="photos/KHS Home 2.jpeg" alt="Durga Puja event" class="event-img">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="event-card">
                            <img src="photos/Swarashoti Ma.jpg" alt="Cultural program event" class="event-img">
                        </div>
                    </div>

                </div>

                <div class="text-center mt-5">
                    <a href="events/Events.html" class="events-btn">CHECK OUT MORE OF EVENTS</a>
                </div>
            </div>
        </div>

        <div class="events-wave-bottom">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0,80 C360,0 1080,0 1440,80 L1440,0 L0,0 Z" fill="#f5f500" />
            </svg>
        </div>

    </section>

    <!-- Recent News -->
    <section id="news" class="news-section reveal">
        <div class="container">
            <h2 class="news-title">Recent News</h2>
            <span class="section-title-accent"></span>
            <div class="row g-4">

                <!-- Clean School No Mosquito -->
                <div class="col-lg-4 col-md-6">
                    <article class="event-list-card">
                        <div class="event-list-img-wrapper">
                            <img src="../photos/CleanSchoolNo Mosquito2026/Photo1.jpg" alt="KHS Clean School No Mosquito" class="event-list-img" loading="lazy">
                        </div>
                        <div class="event-list-body">
                            <h2 class="event-list-title">Clean School No Mosquito</h2>
                            <p class="event-list-excerpt">On 8 October 2026, Kapotaksha High School (KHS) successfully organized a Clean School No Mosquito program...</p>
                            <a href="events/cleanSchoolNoMosquito.html" class="event-list-read-more">READ MORE</a>
                            <p class="event-list-date">October 08, 2026</p>
                        </div>
                    </article>
                </div>

                <!-- Saraswati Puja 2026 -->
                <div class="col-lg-4 col-md-6">
                    <article class="event-list-card">
                        <div class="event-list-img-wrapper">
                            <img src="photos/SaraswatiPuja2026.jpg" alt="Saraswati Puja Spring 2025-2026"
                                class="event-list-img" loading="lazy">
                        </div>
                        <div class="event-list-body">
                            <h2 class="event-list-title">Saraswati Puja 2026</h2>
                            <p class="event-list-excerpt">On Friday, 23th January 2026, Kapotaksha High School held the
                                annual Saraswati Puja celebration on campus...</p>
                            <a href="events/saraswatiPuja2026.html" class="event-list-read-more">READ MORE</a>
                            <p class="event-list-date">January 23, 2026</p>
                        </div>
                    </article>
                </div>

                <!-- Holi 2026 -->
                <div class="col-lg-4 col-md-6">
                    <article class="event-list-card">
                        <div class="event-list-img-wrapper">
                            <img src="photos/Holi2026.jpg" alt="Durga Puja Festival" class="event-list-img"
                                loading="lazy">
                        </div>
                        <div class="event-list-body">
                            <h2 class="event-list-title">Holi Festival 2026</h2>
                            <p class="event-list-excerpt">On Tuesday 3rd March, 2026 Kapotaksha High School (KHS)
                                successfully organized the Holi festival...</p>
                            <a href="events/holi2026.html" class="event-list-read-more">READ MORE</a>
                            <p class="event-list-date">March 3, 2026</p>
                        </div>
                    </article>
                </div>


            </div>
        </div>
    </section>

    <!-- Stats Counter -->
    <section class="stats-section">

        <div class="stats-wave-top">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0,0 C360,80 1080,80 1440,0 L1440,80 L0,80 Z" fill="#1a72b8" />
            </svg>
        </div>

        <div class="stats-inner">
            <div class="container">
                <div class="row justify-content-center text-center">

                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <h2 class="stat-number" data-target="300" data-suffix="+">0</h2>
                            <p class="stat-label">CURRENT STUDENT</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <h2 class="stat-number" data-target="5000" data-suffix="+">0</h2>
                            <p class="stat-label">ALUMNI</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <h2 class="stat-number" data-target="19" data-suffix="">0</h2>
                            <p class="stat-label">ADVISORS</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <h2 class="stat-number" data-target="15" data-suffix="">0</h2>
                            <p class="stat-label">CURRENT EXECUTIVES</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="stats-wave-bottom">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0,80 C360,0 1080,0 1440,80 L1440,0 L0,0 Z" fill="#1a72b8" />
            </svg>
        </div>

    </section>

    <!-- Our Teams -->
    <section id="teams" class="teams-section reveal">
        <div class="container">
            <h2 class="teams-title">Our Teams</h2>
            <span class="section-title-accent"></span>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="team-card team-bg-dev">
                        <div class="team-card-overlay">
                            <div class="team-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="16 18 22 12 16 6" />
                                    <polyline points="8 6 2 12 8 18" />
                                </svg>
                            </div>
                            <h3 class="team-name">AHS Development Team</h3>
                            <a href="#" class="team-btn">Load More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card team-bg-design">
                        <div class="team-card-overlay">
                            <div class="team-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" />
                                    <circle cx="8.5" cy="8.5" r="1.5" />
                                    <polyline points="21 15 16 10 5 21" />
                                </svg>
                            </div>
                            <h3 class="team-name">AHS Design Team</h3>
                            <a href="#" class="team-btn">Load More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card team-bg-media">
                        <div class="team-card-overlay">
                            <div class="team-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" />
                                    <line x1="8" y1="21" x2="16" y2="21" />
                                    <line x1="12" y1="17" x2="12" y2="21" />
                                </svg>
                            </div>
                            <h3 class="team-name">AHS Media Team</h3>
                            <a href="#" class="team-btn">Load More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card team-bg-event">
                        <div class="team-card-overlay">
                            <div class="team-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                            </div>
                            <h3 class="team-name">AHS Event Organizer Team</h3>
                            <a href="#" class="team-btn">Load More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card team-bg-pr">
                        <div class="team-card-overlay">
                            <div class="team-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <h3 class="team-name">AHS Public Relation Team</h3>
                            <a href="#" class="team-btn">Load More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card team-bg-social">
                        <div class="team-card-overlay">
                            <div class="team-icon" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="23 7 16 12 23 17 23 7" />
                                    <rect x="1" y="5" width="15" height="14" rx="2" />
                                </svg>
                            </div>
                            <h3 class="team-name">AHS Social Engagement Team</h3>
                            <a href="#" class="team-btn">Load More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Social Media -->
    <section class="social-section">

        <div class="social-wave-top">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0,0 C360,80 1080,80 1440,0 L1440,80 L0,80 Z" fill="#f5f500" />
            </svg>
        </div>

        <div class="social-inner">
            <div class="container">
                <div class="row justify-content-center text-center g-4">

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="social-item">
                            <p class="social-label">Like Us On<br>Facebook</p>
                            <a href="https://www.facebook.com/AIUBHINDUSOCIETY" target="_blank"
                                rel="noopener noreferrer" class="social-icon-link" aria-label="Facebook">
                                <img src="libs/icons/facebook.png" alt="Facebook" width="56" height="56">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="social-item">
                            <p class="social-label">Follow Us On<br>Instagram</p>
                            <a href="https://www.instagram.com/aiub_hindu_society" target="_blank"
                                rel="noopener noreferrer" class="social-icon-link" aria-label="Instagram">
                                <img src="libs/icons/instagram.png" alt="Instagram" width="56" height="56">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="social-item">
                            <p class="social-label">Subscribe Us On<br>Youtube</p>
                            <a href="#" class="social-icon-link" aria-label="YouTube">
                                <img src="libs/icons/youtube.png" alt="YouTube" width="56" height="56">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="social-wave-bottom">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M0,80 C360,0 1080,0 1440,80 L1440,0 L0,0 Z" fill="#f5f500" />
            </svg>
        </div>

    </section>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Contact / Footer -->
    <?php include 'components/footer.php'; ?>

    <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/i18n.js"></script>
    <script src="js/search.js"></script>
    <script src="js/main.js"></script>
</body>

</html>