<?php get_header(); ?>


      <div class="main-banner" id="home">
        <div class="main-banner__content">
          <div class="main-banner__item">
            <div class="mask mask-light">
              <div class="main-banner__text">
                <div class="main-banner__title">
                  <h1 class="">VALVERDE</h1>
                  <span>APARTAMENTOS</span>
                </div> 
                <div class="main-banner__dates main-banner__dates--first ">
                  <span>Ubicación</span>
                  <strong>Un proyecto VIS </strong>
                  <p>EN LAVILLA LAURA,LA CEJA</p>
                </div> 
                <div class="main-banner__dates main-banner__dates--two">
                  <span>Área</span>
                  <strong>49 m² </strong>
                </div> 
                <div class="main-banner__dates">
                  <span>Desde <strong>$122 millones</strong>
                  </span>
                  <span class="main-banner__value">Valor impuestos incluido*</span>
                </div>
              </div>
            </div>
            <div class="main-banner__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/banner.jpg">
            </div>
          </div>
        </div>
      </div>
      <div class="main-oneform">
        <img class="mask__form" src="<?php echo get_template_directory_uri();?>/assets/img/maks.jpg" alt="">
        <div class="container-fluid">
          <div class="main-oneform__content">
            <div class="main-oneform__item">
              <p class="main-oneform__title">Te llamamos para darte <br>
                  <span>una asesoría completa</span>
                </p>
            </div>
            <div class="main-oneform__item">
              <form action="">
                <div class="main-form__item">
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput" placeholder="Nombre completo*" type="text">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput" placeholder="Teléfono*" type="tel">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="formGroupExampleInput2" placeholder="Email*" type="email">
                  </div>
                </div>
                <div class="main-form__item">
                  <div class="form-group">
                    <textarea name="" placeholder="Comentarios" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group form-check mb-2">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label font-general main-oneform__text">
                        Acepto
                        <a href="<?php echo get_template_directory_uri();?>/assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf" target="blank">Politicas y Privacidad</a>
                      </label>
                    </div>
                  <div class="main-contact__btnbox">
                    <a class="btn_custom btn--small btn--filled" href="#">
                      Enviar
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    
      </div>
      <section id="detalles-proyecto" class="main-details">
        <div class="container-fluid">
          <div class="main-details__content">
            <div class="main-details__item">
              <div class="main-title__general">
                <p>
                  detalles del <br>
                  <strong>proyecto</strong>
                </p>
              </div>
            </div>
            <div class="main-details__item">
              <div class="main-details__box">
                <div class="main-details__icon">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/icon1.png" alt="">
                </div>
                <div class="main-details__boxtext">
                  <div class="main-details__title">
                    <p class="font-general">proyecto</p>
                  </div>
                  <div class="main-details__description">
                    <p class="font-general">320 apartamentos</p>
                  </div>
                </div>
              </div>
              <div class="main-details__box">
                <div class="main-details__icon">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/icon2.png" alt="">
                </div>
                <div class="main-details__boxtext">
                  <div class="main-details__title">
                    <p class="font-general">Bloques</p>
                  </div>
                  <div class="main-details__description">
                    <p class="font-general">15 bloques de 5 pisos</p>
                  </div>
                </div>
              </div>
              <div class="main-details__box">
                <div class="main-details__icon">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/icon3.png" alt="">
                </div>
                <div class="main-details__boxtext">
                  <div class="main-details__title">
                    <p class="font-general">Aptos</p>
                  </div>
                  <div class="main-details__description">
                    <p class="font-general">Apartamentos de 49 m2</p>
                  </div>
                </div>
              </div>
              <div class="main-details__box">
                  <div class="main-details__icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon4.png" alt="">
                  </div>
                  <div class="main-details__boxtext">
                    <div class="main-details__title">
                      <p class="font-general">Distribución</p>
                    </div>
                    <div class="main-details__description">
                      <p class="font-general">4 apartamentos por piso (Torre 5 y 13 cuentan con 6 apartamentos por piso).</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <section class="main-about">
        <div class="main-about__content">
          <div class="main-about__item">
            <div class="main-about__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="main-about__item">
            <div class="main-title__general">
              <p>
                acerca del <br>
                <strong>proyecto</strong>
              </p>
            </div>
            <div class="main-description__general">
              <p>Encuentra ese lugar que siempre has soñado para tener tu casa propia en una ubicación privilegiada en el municipio de La Ceja, un sector de alta valorización, con un entorno natural y cerca a todo lo que necesitas. <strong>Aplican subsidios.</strong></p>
            </div>
          </div>
        </div>
      </section>
      <section id="galeria-proyecto" class="main-gallery">
        <div class="container-fluid">
          <div class="main-title__general main-title__general--medium">
            <p>
                Galería del <br>
              <strong>proyecto</strong>
            </p>
          </div>
          <div class="main-gallery__content">
            <div class="main-gallery__item"  onclick="openModal();currentSlide(1)">
              <div class="main-gallery__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/gallery1.png" alt="">
              </div>
            </div>
            <div class="main-gallery__item" onclick="openModal();currentSlide(2)">
              <div class="main-gallery__img">
                <img  src="<?php echo get_template_directory_uri();?>/assets/img/gallery2.png" alt="">
              </div>
            </div>
            <div class="main-gallery__item" onclick="openModal();currentSlide(3)">
              <div class="main-gallery__img">
                <img  src="<?php echo get_template_directory_uri();?>/assets/img/gallery3.png" alt="">
              </div>
            </div>
            <div class="main-gallery__item" onclick="openModal();currentSlide(4)">
              <div class="main-gallery__img">
                <img  src="<?php echo get_template_directory_uri();?>/assets/img/gallery1.png" alt="">
              </div>
            </div>
    
          </div>
        </div>
      </section>
    
      <section class="main-zone">
        <div class="container-fluid">
          <div class="main-zone__content">
            <div class="main-zone__item">
              <div class="main-title__general">
                <p>
                    características 
                    
                     <br>
                  <strong>del proyecto</strong>
                </p>
              </div>
              <div class="main-zone__list">
                <div class="main-zone__listimg">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon.png" alt="">
                </div>
                <div class="main-zone__description">
                  <p>Locales comerciales</p>
                </div>
              </div>
              <div class="main-zone__list">
                <div class="main-zone__listimg">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon-2.png" alt="">
                </div>
                <div class="main-zone__description">
                  <p>Zona de pinic</p>
                </div>
              </div>
              <div class="main-zone__list">
                <div class="main-zone__listimg">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon-3.png" alt="">
                </div>
                <div class="main-zone__description">
                  <p>Jardines interiores</p>
                </div>
              </div>
              <div class="main-zone__list">
                <div class="main-zone__listimg">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/icon-4.png" alt="">
                </div>
                <div class="main-zone__description">
                  <p>Reserva natural</p>
                </div>
              </div>
    
            </div>
            <div class="main-zone__item">
              <div class="main-zone__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/Zonas/image.png" alt="">
              </div>
            </div>
            <div id="planos-proyecto"></div>
          </div>
        </div>
      </section>
      <section  class="main-maps">
        <div class="container-fluid">
          <div class="main">
            <div class="slider slider-for">
              <div><h3></h3></div>
              <div><h3></h3></div>
            </div>
            <div class="slider slider-nav">
              <div class="main-slidernav__boxcontent">
                <div class="main-slidernav__content">
                  <div class="main-slidernav__item">
                    <div class="main-slidernav__img" onclick="openModal1();currentSlide1(1)">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/planos-1.jpg" alt="">
                    </div>
                  </div>
                  <div class="main-slidernav__item">
                      <div class="main-title__general">
                        <p>
                            Planos del<br>
                          <strong>proyecto</strong>
                        </p>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-1.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>Cocina mesón</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-2.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>Zona de ropa</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-3.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>2 baños</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-4.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>2 alcobas</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>2 salón/comedor</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="main-slidernav__boxcontent">
                <div class="main-slidernav__content">
                  <div class="main-slidernav__item">
                    <div class="main-slidernav__img" onclick="openModal1();currentSlide1(2)">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/planos-1.jpg" alt="">
                    </div>
                  </div>
                  <div class="main-slidernav__item">
                      <div class="main-title__general">
                        <p>
                            Planos del<br>
                          <strong>proyecto</strong>
                        </p>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-1.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>Cocina mesón</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-2.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>Zona de ropa</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-3.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>2 baños</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-4.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>2 alcobas</p>
                        </div>
                      </div>
                      <div class="main-zone__list">
                        <div class="main-zone__listimg">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/Planos/icon-5.png" alt="">
                        </div>
                        <div class="main-zone__description">
                          <p>2 salón/comedor</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <section id="ubicacion" class='main-location' id='ubicacion'>
        <div class="container-fluid">
          <div class="main-title__general main-title__general--medium main-title__general--center">
            <p>
                Ubicación del  <br>
              <strong>Proyecto</strong>
            </p>
          </div>
          <div class='main-location__map'>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.8006471480367!2d-75.43130008521364!3d6.0220825304596985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4697e4e71b5859%3A0x70f68251cd4c4e65!2sValverde%20apartamentos!5e0!3m2!1ses-419!2sve!4v1591042623500!5m2!1ses-419!2sve" width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </section>
    
      <section id="contacto" class="main-twoform">
        <div class="container-fluid">
          <div class="main-twoform__content">
            <div class="main-twoform__item">
              <div class="main-title__general main-title__general--small">
                <p>
                    Quiero recibir  <br>
                  <strong>más información</strong>
                </p>
              </div>
              <div class="main-twoform__img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/form.png" alt="">
              </div>
            </div>
            <div class="main-twoform__item">
              <form action="">
                <div class="form-group">
                  <label for="">Nombre y apellido</label>
                  <input class="form-control" id="formGroupExampleInput" placeholder="" type="text">
                </div>
    
                <div class="form-group">
                  <label for="">Correo</label>
                  <input class="form-control" id="formGroupExampleInput2" placeholder="" type="email">
                </div>
                <div class="form-group">
                  <label for="">Ciudad</label>
                  <input class="form-control" id="formGroupExampleInput2" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label for="">Teléfono</label>
                    <input class="form-control" id="formGroupExampleInput2" placeholder="" type="tel">
                  </div>
                <div class="form-group">
                  <label for="">Mensaje</label>
                  <textarea name="" placeholder="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group form-check mb-2">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label font-general main-oneform__text main-oneform__textDark ">
                    Acepto
                    <a href="<?php echo get_template_directory_uri();?>/assets/pdf/MANUAL_DE_POLITICAS_PROMOTORA.pdf" target="blank">Politicas y Privacidad</a>
                  </label>
                </div>
          
                <div class="main-contact__btnbox">
                  <a class="btn_custom btn--medium btn--filledLight" href="#">
                      Enviar
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

<!-- contact-footer -->
<?php // get_template_part('partials/contact-footer'); ?>


<?php get_footer(); ?>