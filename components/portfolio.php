
<?php
          session_start();
          require_once('inc/auth.php');
                    
          $select = "SELECT * FROM portfolio ";
          $result = mysqli_query($connection, $select);
?>
<section class="portfolio section" id="portfolio">
            <h2 class="section__title">Portfolio</h2>
            <span class="section__subtitle">Most recent work</span>

            <div class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1 ====================-->
                    <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                    <div class="portfolio__content grid swiper-slide">
                        <img src="./admin/img/<?php echo $row['img']?>" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title"><?php echo $row['title_'.$_SESSION['lang']]?></h3>
                            <p class="portfolio__description"><?php echo $row['body_'.$_SESSION['lang']]?></p>
                                <a href="#" class="button button--flex button--small portfolio__button">
                                    Development
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                        </div>
                    </div>

                    <?php }} ?> 


                </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>

                    <!-- Add pagination -->
                    <div class="swiper-pagination"></div>
            </div>
        </section>