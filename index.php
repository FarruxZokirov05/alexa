<?php
    require('inc/conflang.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $_GET['lang']?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Responsive Portfolio Website</title>
    <style>
        .lang{
            display: flex;
            gap: 10px;
            
        }
        .lang a{
            border-radius: 50px;
            border: 1px solid #000;
            width:40px; height:40px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition:  0.5s;
            color: #000
        }
        .lang a:hover{
            background: #000;
            color:#fff;
        }
    </style>
</head>

<body>
    <div style="position: fixed; bottom: 1rem; right: 1rem">
        <div class="lang">
            <a href="?lang=uz">UZ</a>
            <a href="?lang=en">EN</a>
        </div>
    </div>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Alexa</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="uil uil-estate nav__icon"></i> <?=$lang['home']?>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> <?=$lang['about']?>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> <?=$lang['skills']?>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i> <?=$lang['services']?>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> <?=$lang['portfolio']?>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message"></i> <?=$lang['contact_me']?>
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
               <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://www.linkedin.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>
                        <a href="https://dribbble.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-dribbble"></i>
                        </a>
                        <a href="https://github.com/" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>
                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />

                                <image class="home__blob-img" x='12' y='18' xlink:href="assets/img/perfil.png" />
                            </g>
                        </svg>

                    </div>
                    <div class="home__data">
                        <h1 class="home__title">Hi, I'am Alexa</h1>
                        <h3 class="home__subtitle">Frontend developer</h3>
                        <p class="home__description">High level experience in web design and development
                            knowledge producing quailtty work</p>
                        <a href="#contact" class="button button--flex">
                            contact me<i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>

        </section>

        <!--==================== ABOUT ====================-->
       
        <?php include('components/about.php')?>
        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">Skills</h2>
            <span class="section__subtitle">My technical level</span>

            <div class="skills__container container grid">
                <div>
                    <!--==================== SKILLS 1 ====================-->
                    <div class="skills__content skills__open">
                        <div class="slills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Frontend developer</h1>
                                <span class="skills__subtitle">More than 4 years</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">CSS</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__css"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">JavaScript</h3>
                                    <span class="skills__number">60%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__js"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">React</h3>
                                    <span class="skills__number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__react"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILLS 2 ====================-->
                    <div class="skills__content skills__close">
                        <div class="slills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills__titles">Backend developer</h1>
                                <span class="skills__subtitle">More than 2 years</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Node Js</h3>
                                    <span class="skills__number">70%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__node"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Firebase</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__firebase"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Python</h3>
                                    <span class="skills__number">55%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__python"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!--==================== SKILLS 3 ====================-->
                    <div class="skills__content skills__close">
                        <div class="slills__header">
                            <i class="uil uil-swatchbook skills__icon"></i>

                            <div>
                                <h1 class="skills__titles">Designer</h1>
                                <span class="skills__subtitle">More than 5 years</span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Figma</h3>
                                    <span class="skills__number">90%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Sketch</h3>
                                    <span class="skills__number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__sketch"></span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">Photoshop</h3>
                                    <span class="skills__number">85%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__photoshop"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <h2 class="section__title">Qualification</h2>
            <span class="section__subtitle">My personal journey</span>

            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-graduation-cap qualification__icon"></i>
                        Education
                    </div>

                    <div class="qualification__button button--flex" data-target="#work">
                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                        Work
                    </div>
                </div>


                <div class="qualification__sections">
                    <!--==================== QUALIFICATION CONTENT 1  ====================-->
                    <div class="qualification__content qualification__active" data-content id="education">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Computer Enginner</h3>
                                <span class="qualification__subtitle">Peru - University</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2009 - 2014
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Web Design</h3>
                                <span class="qualification__subtitle">Spain - Institute</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2014 - 2017
                                </div>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Web Development</h3>
                                <span class="qualification__subtitle">Peru - Institute</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017 - 2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 4 ====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <!-- <span class="qualification__line"></span> -->
                            </div>

                            <div>
                                <h3 class="qualification__title">Master in Ui/Ux</h3>
                                <span class="qualification__subtitle">Peru - Institute</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2019 - 2021
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--==================== QUALIFICATION CONTENT 2  ====================-->
                    <div class="qualification__content" data-content id="work">
                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Software Enginner</h3>
                                <span class="qualification__subtitle">Microsoft - Peru</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2016 - 2018
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>

                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>

                            <div>
                                <h3 class="qualification__title">Frontend Developer</h3>
                                <span class="qualification__subtitle">Apple Inc - Spain</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - 2020
                                </div>
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title">Ui Designer</h3>
                                <span class="qualification__subtitle">Figma - Spain</span>
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2017 - 2019
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <?php include('components/service.php')?>

        <!--==================== PORTFOLIO ====================-->
        <?php include('components/portfolio.php')?>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">
            <div class="project__bg">
                <div class="project__container container grid">
                    <div class="project__data">
                        <h2 class="project__title">You have a new project</h2>
                        <p class="project__description">Contact me now and get a 30% discount on your new project.
                        </p>
                        <a href="#contant" class="button button--flex button--white">
                            Contact Me
                            <i class="uil uil-message project__icon button__icon"></i>
                        </a>
                    </div>
                    <img src="./assets/img/project.png" alt="" class="project__img">
                </div>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <?php include('components/testimonial.php')?>
                <!-- Add Pagintion -->
                <div class="siper-pagination swiper-pagination-testimonial"></div>
            </div>
        </section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">
             <h2 class="section__title">Contact Me</h2>
             <span class="section__subtitle">Get in touch</span>

             <div class="conract__container container grid">
                <div>
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call Me</h3>
                            <span class="contact__subtitle">999-777-666</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">alexa@email.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Peru - Lima Av. Bolivar #123</span>
                        </div>
                    </div>
                </div>
                <form action="send.php" class="contact__form grid" method="POST">
                    <div class="contact__inputs grid">
                        <div class="contact__content">
                            <label for="" class="contact__label">Name</label>
                            <input type="text" class="contact__input" name="name">
                        </div>

                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input type="email" class="contact__input" name="email">
                        </div>
                    </div>
                    <div class="contact__content">
                        <label for="" class="contact__label">Message</label>
                        <textarea name="message" id="" cols="0" rows="7" class="contact__input" ></textarea>
                    </div>
                    <div>
                    <input style="border: 1px solid hsl(228, 81%, 49%);"  class="button button--flex" type="submit" name="submit" value="Send Message">
                    </div>
                </form>
             </div>
        </section>
    </main>

   <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Alexa</h1>
                    <span class="footer__subtitle">Frontend developer</span>
                </div>
                <ul class="footer__links">
                    <li>
                        <a href="#services" class="footer__link">Servuces</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>

                <div class="footer__socials">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank"  class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>

                    <a href="https://twitter.com/" target="_blank"  class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>

            <p class="footer__copy">&#169; bedimcode. All right resevved</p>
        </div>
    </footer>
    <!--==================== SCROLL TOP ====================-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scrollup__icon"></i>
</a>

    <!--==================== SWIPER JS ====================-->
    <script src="./assets/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>
</body>

</html>