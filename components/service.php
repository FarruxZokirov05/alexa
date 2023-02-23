
<?php
          session_start();
          require_once('inc/auth.php');
                    
          $select = "SELECT * FROM service ";
          $result = mysqli_query($connection, $select);
?>

<section class="services section" id="services">
            <h2 class="section__title">Services</h2>
            <span class="section__subtitle">What i offer</span>

            <div class="services__container container grid">
                <!--==================== SERVICES 1  ====================-->
               <?php  if($result->num_rows > 0){
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                <div class="services__content">
                    <div>
                        <i class="uil <?=$row['icon']?> services__icon"></i>
                        <h3 class="services__title"><?php echo $row['title_'.$_SESSION['lang']] ?></h3>
                    </div>

                    <span class="button button--flex button--small button--link services__button">
                        View More
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title"><?php echo $row['title_'.$_SESSION['lang']] ?></h4>
                            <i class="uil uil-times services__modal-close"></i>

                            <ul class="services__modal-services grid">
                            <?php echo $row['text_'.$_SESSION['lang']] ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </section>