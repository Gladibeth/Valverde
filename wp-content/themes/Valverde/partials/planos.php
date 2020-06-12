      <section  class="main-maps">
        <div class="container-fluid">
          <div class="main">
            <div class="slider slider-for">

               <?php $args = array( 'post_type' => 'planos');
                     $countGalery2 = 1;
                 ?>   
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div><style type="text/css">

                .slider-for .slick-dots li:nth-child(<?php echo $countGalery2; ?>):after {
                          content: '<?php the_field('niveles'); ?>';
                        }

                       
              </style></div>
             <?php $countGalery2++; endwhile; ?>
            </div>
            <div class="slider slider-nav">

               <?php $args = array( 'post_type' => 'planos');
                     $countGalery = 1;
                 ?>   
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="main-slidernav__boxcontent">
                <div class="main-slidernav__content">
                  <div class="main-slidernav__item">
                    <div class="main-slidernav__img" onclick="openModal1();currentSlide1(<?php echo  $countGalery; ?>)">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                  </div>
                  <div class="main-slidernav__item">
                      <div class="main-title__general">
                        <p>
                            Planos del<br>
                          <strong>proyecto</strong>
                        </p>
                      </div>
                      <div class="main-zone__list wow fadeIn" data-wow-delay='0.2s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-1.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_1'); ?></p>
                        </div>
                      </div>
                      <div class="main-zone__list wow fadeIn" data-wow-delay='0.3s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-2.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_2'); ?></p>
                        </div>
                      </div>
                      <div class="main-zone__list wow fadeIn" data-wow-delay='0.4s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-3.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_3'); ?></p>
                        </div>
                      </div>
                      <div class="main-zone__list wow fadeIn" data-wow-delay='0.5s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-4.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_4'); ?></p>
                        </div>
                      </div>
                      <div class="main-zone__list wow fadeIn" data-wow-delay='0.6s'>
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p><?php the_field('detalle_5'); ?></p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            <?php  $countGalery++; endwhile; ?>
            </div>
          </div>
        </div>
      </section>
    