
<?php
          session_start();
          require_once('inc/auth.php');
                    
          $select = "SELECT * FROM testimonial ";
          $result = mysqli_query($connection, $select);
?>

<section class="testimonial section">
            <h2 class="section__title">Testimonial</h2>
            <span class="section__subtitle">My client saying</span>

            <div class="testimonial__container container swiper-container">
                <div class="swiper-wrapper">
                  <!--==================== TESTIMONIAL 1 ====================-->

                  <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                  <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="./admin/img1/<?php echo $row['img']?>" alt="" class="testimonial__img">

                            <div>
                                <h3 class="testimonial__name"><?php echo $row['title_'.$_SESSION['lang']]?></h3>
                                <span class="testimonial__client"><?php echo $row['bodyy_'.$_SESSION['lang']]?></span>
                               
                            </div>
                        </div>

                        <div>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                        </div>
                    </div>
                    
                    <p class=" testimonial__description"><?php echo $row['bodyy_'.$_SESSION['lang']]?></p>
                        
                  </div>
                  <?php }} ?> 

                    
                  
                </div>