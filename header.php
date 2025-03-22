<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add these lines after existing meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Education & Skilling</title>
    <link rel="icon" href="assets/icons/iit_icon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/bootstrap-5.0.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/styleTeam.css">
    
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
        <div class="container">
            <!-- Logo and Text Section -->
            <div class="d-flex align-items-center flex-grow-1">
                <a class="navbar-brand me-3" href="index.php">
                    <img src="assets/images/iitg_web_mid.gif" alt="Logo" title="OES-LOGO" class="logo">
                </a>
                <div class="text-behind-logo">
                    <div class="hindi-text">ऑनलाइन शिक्षा एवं कौशल</div>
                    <div class="english-text">Online Education & Skilling</div>
                    <div class="iit-text">Indian Institute of Technology Guwahati</div>
                </div>
            </div>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 1.4rem;font-weight: 350;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><b>Home</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#about"><b>About</b></a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="teamDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b>Team</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="teamDropdown">
                            <li><a href="team.php" class="dropdown-item">Online Programmes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b>Skilling</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                            <li><a class="dropdown-item" href="#">Technical</a></li>
                            <li><a class="dropdown-item" href="#">Professional</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="contact.php"><b>Contact</b></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body class="bg-light">
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdowns = document.querySelectorAll('.dropdown-toggle');
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const isMobile = () => window.innerWidth < 992;

        // Initialize Bootstrap dropdowns
        dropdowns.forEach(dropdown => {
            const instance = new bootstrap.Dropdown(dropdown, {
                autoClose: 'outside'
            });

            // Handle dropdown clicks and touches
            ['click', 'touchstart'].forEach(eventType => {
                dropdown.addEventListener(eventType, function(e) {
                    if (isMobile()) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        // Close other dropdowns
                        dropdowns.forEach(other => {
                            if (other !== this) {
                                const otherInstance = bootstrap.Dropdown.getInstance(other);
                                if (otherInstance) otherInstance.hide();
                            }
                        });
                        
                        // Toggle current dropdown
                        if (this.classList.contains('show')) {
                            instance.hide();
                        } else {
                            instance.show();
                        }
                    }
                }, { passive: false });
            });

            // Handle dropdown items
            const dropdownMenu = dropdown.nextElementSibling;
            if (dropdownMenu) {
                dropdownMenu.querySelectorAll('.dropdown-item').forEach(item => {
                    item.addEventListener('click', () => {
                        instance.hide();
                        if (isMobile()) {
                            navbarCollapse.classList.remove('show');
                        }
                    });
                });
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.navbar')) {
                navbarCollapse.classList.remove('show');
                dropdowns.forEach(dropdown => {
                    bootstrap.Dropdown.getInstance(dropdown)?.hide();
                });
            }
        });

        // Handle navbar toggler
        navbarToggler.addEventListener('click', function() {
            dropdowns.forEach(dropdown => {
                const dropdownInstance = bootstrap.Dropdown.getInstance(dropdown);
                if (dropdownInstance) dropdownInstance.hide();
            });
        });

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (!isMobile()) {
                    navbarCollapse.classList.remove('show');
                    dropdowns.forEach(dropdown => {
                        bootstrap.Dropdown.getInstance(dropdown)?.hide();
                    });
                }
            }, 250);
        });
    });
    </script>
</body>
