<!--=============== NAV ===============-->
<div class="nav" id="nav">
            <nav class="nav__content">
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-chevron-right' ></i>
                </div>
    
                <a href="#" class="nav__logo">
                    <i class='bx bxs-heart' ></i>
                    <span class="nav__logo-name">Welcome <?=$_SESSION['user']?></span>
                </a>
    
                <div class="nav__list">
                    <a href="index.php" class="nav__link active-link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>
    
                    <a href="service.php" class="nav__link">
                        <i class='bx bx-file'></i>
                        <span class="nav__name">Service</span>
                    </a>
    
                    <a href="portfolio.php" class="nav__link">
                        <i class='bx bx-envelope' ></i>
                        <span class="nav__name">Portfolio</span>
                    </a>
    
                    <a href="jadval.php" class="nav__link">
                        <i class='bx bx-bar-chart-square' ></i>
                        <span class="nav__name">Statistic</span>
                    </a>

                    <a href="testimonial.php" class="nav__link">
                        <i class='bx bx-bar-chart-square' ></i>
                        <span class="nav__name">Statistic</span>
                    </a>
    
                    <a href="settings.php" class="nav__link">
                        <i class='bx bx-cog' ></i>
                        <span class="nav__name">Settings</span>
                    </a>
                    <a href="logout.php" class="nav__link">
                        <i class='bx bx-log-out-circle' ></i>
                        <span class="nav__name">Logout</span>
                    </a>
                </div>
            </nav>
        </div>