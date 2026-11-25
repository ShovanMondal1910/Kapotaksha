<?php
$root = $root ?? '';
?>
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container-fluid">
        <!-- Brand Logo -->
        <a class="navbar-brand" href="<?= $root ?>index.php">
            <img src="<?= $root ?>photos/KHS.png" alt="KHS Logo" class="logo">
        </a>

        <!-- Mobile Hamburger Button -->
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMain"
            aria-controls="navbarMain"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                <!-- About Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $root ?>index.php#about-ahs">About KHS</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>index.php#leadership-messages">Leadership Messages</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>about/facilities.html">Campus &amp; Facilities</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>about/clubs.html">Clubs &amp; Co-Curriculars</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>about/RulesRegulation.html">Rules &amp; Regulation</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>about/IntimidationPolicy.html">Intimidation Policy</a></li>
                    </ul>
                </li>

                <!-- People Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        People
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $root ?>people/OSA.html">OSA</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>people/Founders.html">Founders</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>people/executivecommittee2025-26.html">Executive Committee</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>people/formercommittee.html">Former Committee</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>people/adviser.html">Adviser</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>people/teachers.html">Teachers &amp; Staff</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= $root ?>people/students.html">Students</a></li>
                    </ul>
                </li>

                <!-- Activities & News -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>activities-and-news/ActivityAndNews.html">Activities &amp; News</a>
                </li>

                <!-- Events -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>events/Events.html">Events</a>
                </li>

                <!-- Media Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Media
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $root ?>Media/Gallery.html">Gallery</a></li>
                    </ul>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>index.php#contact">Contact</a>
                </li>

            </ul>

            <button class="btn btn-search ms-lg-2" type="button" aria-label="Search">Search</button>
            <a href="https://kapotaksha.netlify.app/" target="_blank" rel="noopener noreferrer"
                class="btn btn-login ms-lg-2" aria-label="Log In">Login</a>
        </div>
    </div>
</nav>