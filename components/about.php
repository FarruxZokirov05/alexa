<?php
          session_start();
          require_once('inc/auth.php');
                    
          $select = "SELECT * FROM about ";
          $result = mysqli_query($connection, $select);
?>

<section class="about section" id="about">
            <h2 class="section__title">About Me</h2>
            <span class="section__subtitle">My introduction</span>
            <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
            <div class="about__container container grid">
                <img src="assets/img/about.jpg" alt="" class="about__img">

              
                <div class="about__data">
                    <p class="about__description"><?php echo $row['title_'.$_SESSION['lang']] ?></p>

                    <div class="about__info">
                        <div>
                            <span class="about__info-title">08+</span>
                            <span class="about__info-name">Years <br> experience</span>
                        </div>
                        <div>
                            <span class="about__info-title">20+</span>
                            <span class="about__info-name">Completed <br> project</span>
                        </div>
                        <div>
                            <span class="about__info-title">05+</span>
                            <span class="about__info-name">Companies <br> worked</span>
                        </div>
                    </div>
                    <div class="about__buttons">
                        <a download="" href="assets/pdf/Alexa-Cv.pdf" class="button button--flex">
                            Download CV<i class="uil uil-download-alt button__icon"></i>
                        </a>
                    </div>
                </div>
              
            </div>
            <?php }} ?> 
        </section>