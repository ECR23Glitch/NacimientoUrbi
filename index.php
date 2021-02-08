<?php
include ('php/conexion.php');

$sql_sel = "SELECT * FROM (SELECT * FROM comentarios ORDER BY id DESC LIMIT 0,3) t ORDER BY id ASC";
$result = $conn->query($sql_sel);
$count = $result->num_rows;
 ?>
<html class="wide wow-animation" lang="en">
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9FZVS9XF68"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-9FZVS9XF68');
    </script>
    <title>Nacimiento URBI</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo-naci.png" type="image/logo">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Fredoka+One&amp;display=swap%7COpen+Sans:300,400,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;
      background: #212121;padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
      clear: both;text-align:center;position: relative;z-index: 1;}
      html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
        Este año, hemos adaptado la tradición del Nacimiento Urbi a una experiencia virtual a causa de la pandemia por la que estamos transitando.
        <br>Queremos que lo disfrutes y que compartas la historia más bella del mundo en tus redes sociales.
			</div>
		</div>
	</div>
</div>

    <div class="page">
      <header class="section page-header" id="inicio">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-promotion rd-navbar-6 context-dark" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-auto-height="false" data-xl-auto-height="false" data-xxl-auto-height="false">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-light" src="images/logo-naci.png" alt="" width="140" height="76"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap" style="font-size:15px;">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#inicio">Inicio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#historianacimiento">La historia</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#pintanavidad">Pinta la navidad</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#actividades">Actividades</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#pelicula">Película</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#librofirmas">Libro de firmas</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#foto">Tómate la foto</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#carta">Envía tu carta</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <!--Swiper-->
        <section class="swiper-container swiper-slider swiper-slider-3 context-dark" data-loop="true">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="images/Fondo-nac1.jpg">
              <div class="particles-js" id="particles-js-1"></div>
              <div class="swiper-slide-caption section-inset-27">
                <div class="container">
                  <div class="row row-fix row-30 justify-content-between flex-md-row-reverse align-items-md-center align-items-xl-start">
                    <div class="col-xl">
                      <div class="pl-md-3 pl-lg-0">
                        <div class="info-item info-social"><audio src="music/navidad.mp3" type="audio/mpeg" autoplay="true"></audio></div>
                        <br>
                        <h1 class="title-christmas" data-caption-animate="fadeInUp" data-caption-delay="100" style="font-size:75px; font-weight:bolder;"><span><img src="images/landing-christmas-02-195x182.png" alt="" width="220" height="175"/>L</span>a historia más <br> bella del mundo</h1>
                        <br><br>
                        <h1 class="title-christmas" data-caption-animate="fadeInUp" data-caption-delay="100" style="font-size:35px; font-weight:bolder;"> Dias que faltan para navidad: </h1>
                        <div class="countdown" data-caption-animate="fadeInUp" data-caption-delay="400" data-time="25 Dec 2020 00:00" data-format="dhms" data-type="until"></div>
                        <div class="info-item info-social"></a><a class="icon novi-icon icon-xl fa-facebook-f" href="https://www.facebook.com/NacimientoUrbi" target="_blank"></a><a class="icon novi-icon icon-xl fa-instagram" href="https://www.instagram.com/nacimientourbi/" target="_blank"></a></div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Swiper Pagination-->
        </section>
      </header>

      <!-- Mensaje-->
      <section class="section novi-bg novi-bg-img section-md bg-default novi-bg novi-bg-img" id="mensaje">
        <div class="container">
          <div class="row row-40 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInRight">
              <h2>A todos los niños y niñas de Mexicali</h2>
              <p class="big">Para Urbi, la conservación de las tradiciones y la unión familiar ocupa un lugar primordial, por lo que durante 39 años hemos celebrado la Navidad con nuestra comunidad.<br>
                        Este año ha sido complicado para muchas familias a causa de la pandemia, la cual, nos ha cambiado la forma de ver la vida y de hacer las cosas cotidianas.<br>
                        Por eso, nos estamos ajustando a esta nueva realidad y este año la experiencia del Nacimiento Urbi se vuelve virtual para que en esta Navidad gocen de buena salud y disfruten de la historia más bella del mundo.<br>
                        No olviden continuar aplicando las medidas de prevención y de sana distancia.
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInLeft"><img src="images/FOTO NACIMIENTO.JPG" alt="" width="720" height="490"/>
            </div>
          </div>
        </div>
      </section>

      <!-- HISTORIA NACIMIENTO-->
      <section class="section novi-bg novi-bg-img section-inset-4 bg-primary text-center position-relative" id="historianacimiento">
        <div class="container">
          <div class="particles-js" id="particles-js-2"></div>
          <div class="row row-fix justify-content-center">
            <div class="col-lg-10 col-xl-8">
              <h3 class="wow fadeInUp">Historia <br> del Nacimiento Urbi</h3>
              <p class="big wow fadeInUp" data-wow-delay=".03s">El Nacimiento Urbi es la historia de hace más de 2000 años que representa el esfuerzo de una familia por encontrar una morada. <br>Hoy es toda una tradición mexicana, ícono de nuestra sociedad, que en esencia representa una familia llena de amor.<br>
                            La tradición del Nacimiento Urbi, surgió desde 1981, en Mexicali, Baja California, con la ayuda de artesanos de Tlaquepaque, Jalisco, quienes dieron forma a las figuras que actualmente lo conforman.<br>
                            Existen varios detalles que se combinan en el nacimiento para crear un ambiente cálido, familiar y de esperanza: piezas de barro, diversa vegetación, alegres villancicos, luces de colores, paisajes espectaculares y figuras curiosas.<br>
                            Desde sus inicios, la comunidad ha participado en el ensamble y decorado de los paisajes: artistas plásticos, pintores, constructores, escultores, iluminadores, técnicos en sonido, actores, cantantes y músicos. Gracias a ellos el Nacimiento Urbi cobra vida año con año.<br>
                            El Nacimiento Urbi está lleno de tradición, esperanza y amor. Quienes lo han disfrutado físicamente platiquen su experiencia con sus seres queridos para mantener vivo el calor de la Navidad en sus corazones.<br>
                            Ahora, disfruten de esta nueva experiencia virtual y compártanla en sus redes sociales para iluminar la mente y el corazón de nuestros niños y jóvenes.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Pinta la navidad-->
      <section class="section novi-bg novi-bg-img section-md section-md-8 text-center bg-default" id="pintanavidad">
        <div class="container">
          <h2 class="wow fadeInUp">Pinta la Navidad</h2>
          <!--Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-corporate wow fadeInUp" id="tabs-1" data-wow-delay=".05s">
            <!--Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade card-event-group active show" id="tabs-1-1">
                <div class="row row-fix row-30 justify-content-center card-event">
                  <div class="col-sm-10 col-md-8 col-lg-4"><img class="card-event-image" src="images/FOTO PINTA LA NAVIDAD.jpg" alt="" width="390" height="266"/>
                  </div>
                  <div class="col-sm-10 col-md-8 col-lg-8">
                    <div class="card-event-body">
                      <div class="card-event-content">
                        <h4 class="card-event-title"><a href="#">Diviértete pintando el Nacimiento Urbi</a></h4>
                        <p class="big card-event-text">Haz clic en JUGAR y podrás elegir 5 dibujos de la historia del nacimiento para pintar en tu computadora. Cuando hayas terminado, descarga tu dibujo y compártelo en tus redes sociales.</p>
                      </div>
                      <div class="card-event-button"><a class="button button-primary button-nuka" href="http://pintalanavidad.nacimientourbi.com/" target="_blank">Jugar<span class="button-overlay"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Actividades-->
      <section class="section novi-bg novi-bg-img section-md section-md-10 bg-gray-100 position-relative" id="actividades">
        <div class="container position-relative">
          <div class="text-center wow fadeInUp">
            <h2>Actividades</h2>
          </div>
          <div class="card-activity-group">
            <div class="card-activity row row-fix row-30 align-items-center justify-content-center wow fadeInUp">
              <div class="col-md-10 col-lg-6"><img class="card-activity-image" src="images/FOTO LIBRO DE PINTAR.jpg" alt="" width="610" height="415"/>
              </div>
              <div class="col-md-10 col-lg-6">
                <div class="card-activity-body">
                  <h4 class="card-activity-title"><a href="#">Descarga el libro de pintar del Nacimiento Urbi</a></h4>
                  <p class="big card-activity-text">Diviértete pintando las páginas de la historia más bella del mundo.</p>
                  <div class="card-activity-details">
                  <div class="card-event-button"><a class="button button-primary button-nuka" href="Descargas/LibroColorear-NacimientoUrbi.pdf" download="Pinta_La_Navidad">Descarga<span class="button-overlay"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-activity row row-fix row-30 align-items-center justify-content-center card-activity-revers wow fadeInUp">
              <div class="col-md-10 col-lg-6"><img class="card-activity-image" src="images/FOTO ESFERAS.jpg" alt="" width="610" height="415"/>
              </div>
              <div class="col-md-10 col-lg-6">
                <div class="card-activity-body">
                  <h4 class="card-activity-title"><a href="#">Adorna tu árbol con las esferas del Nacimiento Urbi</a></h4>
                  <p class="big card-activity-text">Son 4 figuras diferentes.<br>Descárgalas, píntalas e ilumina la Navidad.</p>
                  <div class="card-activity-details">
                    <a class="button button-primary button-nuka" href="Descargas/NU-ADORNOS ARBOLITO.pdf" download="Esferas">Descarga<span class="button-overlay"></span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-activity row row-fix row-30 align-items-center justify-content-center wow fadeInUp">
              <div class="col-md-10 col-lg-6"><img class="card-activity-image" src="images/FOTO FIGURAS.jpg" alt="" width="610" height="415"/>
            </div>
              <div class="col-md-10 col-lg-6">
                <div class="card-activity-body">
                  <h4 class="card-activity-title"><a href="#">Imprime las figuras del Nacimiento Urbi</a></h4>
                  <p class="big card-activity-text">Deja que Jesús, María y José iluminen tu Navidad con la historia más bella del mundo.</p>
                  <div class="card-activity-details">
                    <div class="card-event-button"><a class="button button-primary button-nuka" href="Descargas/NU-FIGURAS NACIMIENTO.pdf" download="Pinta_La_Navidad">Descarga<span class="button-overlay"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Pelicula -->
      <section class="section novi-vide section-xl context-dark vide overlay-2" data-vide-bg="video/video3" data-vide-options="posterType:jpg" id="pelicula">
        <div class="container">
          <div class="row row-fix">
            <div class="col-sm-9 col-md-7">
              <div class="card-event-button"><a class="button button-primary button-nuka" href="https://drive.google.com/file/d/17EcQ2beQLl4AbBTGPerJrehzA5wh1wFy/view" target="_blank">Ver película<span class="button-overlay"></span></a></div>
            </div>
          </div>
        </div>
      </section>

      <!-- libro firmas-->
      <section class="section novi-bg novi-bg-img section-md section-md-9 bg-default" id="librofirmas">
        <div class="container">
            <h2 class="text-center wow fadeInUp">Libro de firmas</h2>
            <div class="row row-30 row-xxl-50 justify-content-center wow fadeInUp" data-wow-delay=".03s">
            <a class="button button-primary button-nuka" href="php/librofirmas.php" style="align-items:center; align-items:center; align-content:center;">Deja un comentario<span class="button-overlay"></span></a>
          </div>
            <?php
              while ($row = $result->fetch_array(MYSQLI_ASSOC)){
             ?>
          <div class="row row-30 justify-content-center wow fadeInUp" data-wow-delay=".03s">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <div class="quote-christmas">
                <div class="quote-christmas-body">
                  <q class="heading-6"><?php echo $row["comentario"];?></q>
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.374058 18.9575C2.79449 15.5941 3.65893 7.64416 1.06561 1.22307L19.7376 0C20.3715 1.12114 20.2562 5.25918 14.7237 12.8422C7.80824 22.321 -2.04637 22.321 0.374058 18.9575Z" fill="#1DC5A3"></path>
                  </svg>
                </div>
                <div class="quote-christmas-footer">
                  <div class="unit unit-spacing-md align-items-center">
                    <div class="unit-left"><img class="quote-christmas-image" src="images/FOTO-FIRMA.jpg" alt="" width="74" height="74"/>
                    </div>
                    <div class="unit-body">
                      <h6 class="quote-christmas-name"><?php echo $row["nombre"];?> <?php echo $row["apellidos"];?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
         }
           ?>
           <div class="row row-30 row-xxl-50 justify-content-center wow fadeInUp" data-wow-delay=".03s">
          <a class="button button-primary button-nuka" style="align-self: center; align-items:center; align-content:center;" href="php/librofirmas.php">Deja un comentario<span class="button-overlay"></span></a>
          </div>
        </div>
      </section>

      <!-- Foto con santa-->
      <section class="section novi-bg novi-bg-img section-md bg-default text-center" id="foto">
        <div class="container">
          <h2 class="wow fadeInUp">Tómate la foto</h2>
          <div class="row row-30 row-xxl-50 justify-content-center wow fadeInUp" data-wow-delay=".03s">
            <div class="col-md-5 col-lg-4">
              <!-- Pricing Classic-->
              <div class="pricing-classic novi-bg">
                <h4 class="pricing-classic-title">Navidad Urbi:</h4>
                <ul class="pricing-classic-list big">
                  <li class="pricing-classic-list-item">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                    </svg><span>Elige nuestro filtro con el logo del Nacimiento Urbi.</span>
                  </li>
                  <li class="pricing-classic-list-item">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                    </svg><span>Tómate una selfie.</span>
                  </li>
                  <li class="pricing-classic-list-item">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                    </svg><span>Compártela en tus redes sociales.</span>
                  </li>
                  <li class="pricing-classic-list-item">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                    </svg><span>Comparte la Navidad con Urbi.</span>
                  </li>
                </ul><a class="button button-white button-width-3 button-nuka" href="https://www.instagram.com/ar/1298590810502763/"  target="_blank">Haz clic aquí.<span class="button-overlay"></span></a>
              </div>
            </div>
              <div class="col-md-5 col-lg-4">
                <div class="pricing-classic novi-bg">
                  <h4 class="pricing-classic-title">Se Santa Claus:</h4>
                  <ul class="pricing-classic-list big">
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Elige nuestro filtro y se Santa Claus.</span>
                    </li>
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Tómate una selfie.</span>
                    </li>
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Compártela en tus redes sociales.</span>
                    </li>
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Comparte la Navidad con Urbi.</span>
                    </li>
                  </ul><a class="button button-white button-width-3 button-nuka" href="https://www.instagram.com/ar/203770324587900/"  target="_blank">Haz clic aquí.<span class="button-overlay"></span></a>
                </div>
              </div>
              <div class="col-md-5 col-lg-4">
                <div class="pricing-classic novi-bg">
                  <h4 class="pricing-classic-title">Se Rodolfo el Reno:</h4>
                  <ul class="pricing-classic-list big">
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Elige nuestro filtro y se Rodolfo el Reno.</span>
                    </li>
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Tómate una selfie.</span>
                    </li>
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Compártela en tus redes sociales.</span>
                    </li>
                    <li class="pricing-classic-list-item">
                      <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.16875 13.8359C6.23125 13.8845 6.3 13.9271 6.375 13.9635C6.45 13.9878 6.525 14 6.6 14C6.675 14 6.75 13.9878 6.825 13.9635C6.9 13.9271 6.96875 13.8845 7.03125 13.8359L17.8312 3.33594C17.9438 3.21441 18 3.07465 18 2.91667C18 2.75868 17.9438 2.61892 17.8312 2.4974L15.4312 0.164062C15.3062 0.0546875 15.1625 0 15 0C14.8375 0 14.6937 0.0546875 14.5687 0.164062L6.6 7.92969L3.43125 4.83073C3.30625 4.72135 3.1625 4.66667 3 4.66667C2.8375 4.66667 2.69375 4.72135 2.56875 4.83073L0.16875 7.16406C0.05625 7.28559 0 7.42535 0 7.58333C0 7.74132 0.05625 7.88108 0.16875 8.0026L6.16875 13.8359Z"></path>
                      </svg><span>Comparte la Navidad con Urbi.</span>
                    </li>
                  </ul><a class="button button-white button-width-3 button-nuka" href="https://www.instagram.com/ar/844267946376061/"  target="_blank">Haz clic aquí.<span class="button-overlay"></span></a>
                </div>
              </div>
          </div>
        </div>
      </section>

      <!-- ENVIAR CARTA - FOOTER-->
      <footer class="section novi-bg novi-bg-img footer-christmas section-md section-md-2 bg-primary" id="carta">
        <div class="container">
          <div class="row row-fix row-50 justify-content-center justify-content-xl-between align-items-xl-end flex-lg-row-reverse">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 wow fadeInLeft">
              <div class="particles-js" id="particles-js-3"></div>
              <h4>Envía tu carta a Santa</h4>
              <!--RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="php/mail.php">
                <div class="form-wrap">
                  <input class="form-input" id="footer-christmas-first-name" type="text" name="first name" data-constraints="@Required">
                  <label class="form-label" for="footer-christmas-first-name">Nombre</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="footer-christmas-last-name" type="text" name="last name" data-constraints="@Required">
                  <label class="form-label" for="footer-christmas-last-name">Apellidos</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="footer-christmas-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="footer-christmas-email">Correo electrónico</label>
                </div>
                <div class="form-wrap">
                  <textarea class="form-input" id="footer-christmas-message" name="message" data-constraints="@Required"></textarea>
                  <label class="form-label" for="footer-christmas-message">Escribe lo que le vas a pedir</label>
                </div>
                <button class="button button-secondary button-nuka" type="submit">Enviar<span class="button-overlay"></span></button>
              </form>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 wow fadeInRight">
                <div class="particles-js" id="particles-js-4"></div>
              <h2>Ya está por llegar</h2>
              <div class="info-group">
                <div class="info-item">
                  <div class="info-header">
                    <svg width="28" height="37" viewBox="0 0 28 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14 37C14.1701 37 14.316 36.9627 14.4375 36.8881C14.5833 36.8384 14.7049 36.7513 14.8021 36.627C14.9479 36.4778 15.7135 35.6448 17.099 34.128C18.5087 32.5864 20.0156 30.709 21.6198 28.496C23.224 26.2829 24.6823 23.9083 25.9948 21.372C27.3316 18.8108 28 16.461 28 14.3226C28 12.0847 27.5868 10.083 26.7604 8.31754C25.9583 6.55208 24.901 5.06015 23.5885 3.84173C22.276 2.59845 20.7812 1.65356 19.1042 1.00706C17.4271 0.335685 15.7257 0 14 0C12.2743 0 10.5729 0.323253 8.89583 0.969758C7.24306 1.61626 5.74826 2.56116 4.41146 3.80444C3.09896 5.02285 2.02951 6.52722 1.20312 8.31754C0.401042 10.083 0 12.0847 0 14.3226C0 16.4362 0.65625 18.7611 1.96875 21.2974C3.30556 23.8337 4.77604 26.2208 6.38021 28.4587C7.98438 30.6717 9.47917 32.5491 10.8646 34.0907C12.2743 35.6324 13.0521 36.4778 13.1979 36.627C13.2951 36.7513 13.4045 36.8384 13.526 36.8881C13.6719 36.9627 13.8299 37 14 37ZM9.33333 14.3226C9.33333 13.0047 9.78299 11.8858 10.6823 10.9657C11.6059 10.0208 12.7118 9.54839 14 9.54839C15.2882 9.54839 16.3819 10.0208 17.2812 10.9657C18.2049 11.8858 18.6667 13.0047 18.6667 14.3226C18.6667 15.6405 18.2049 16.7718 17.2812 17.7167C16.3819 18.6368 15.2882 19.0968 14 19.0968C12.7118 19.0968 11.6059 18.6368 10.6823 17.7167C9.78299 16.7718 9.33333 15.6405 9.33333 14.3226Z"></path>
                    </svg>
                    <h5 class="info-title">Dirección: Polo Norte</h5>
                  </div>
                  <p class="info-text">101 St Nicholas Dr, North Pole, AK 99705, Estados Unidos</p>
                </div>
                <div class="info-item">
                  <div class="info-header">
                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 35.8438C0 36.1569 0.108398 36.4219 0.325195 36.6387C0.566081 36.8796 0.843099 37 1.15625 37H35.8438C36.1569 37 36.4219 36.8796 36.6387 36.6387C36.8796 36.4219 37 36.1569 37 35.8438V11.5625H0V35.8438ZM10.7314 23.4502C10.9723 23.2334 11.2493 23.125 11.5625 23.125C11.8757 23.125 12.1527 23.2334 12.3936 23.4502L16.1875 27.2803L24.6064 18.8252C24.8473 18.6084 25.1243 18.5 25.4375 18.5C25.7507 18.5 26.0277 18.6084 26.2686 18.8252C26.4854 19.0661 26.5938 19.3431 26.5938 19.6562C26.5938 19.9694 26.4854 20.2464 26.2686 20.4873L17.0186 29.7373C16.8981 29.8337 16.7656 29.918 16.6211 29.9902C16.4766 30.0384 16.332 30.0625 16.1875 30.0625C16.043 30.0625 15.8984 30.0384 15.7539 29.9902C15.6094 29.918 15.4769 29.8337 15.3564 29.7373L10.7314 25.1123C10.5146 24.8714 10.4062 24.5944 10.4062 24.2812C10.4062 23.9681 10.5146 23.6911 10.7314 23.4502ZM35.8438 3.46875H28.9062V0H26.5938V3.46875H19.6562V0H17.3438V3.46875H10.4062V0H8.09375V3.46875H1.15625C0.843099 3.46875 0.566081 3.58919 0.325195 3.83008C0.108398 4.04688 0 4.31185 0 4.625V9.25H37V4.625C37 4.31185 36.8796 4.04688 36.6387 3.83008C36.4219 3.58919 36.1569 3.46875 35.8438 3.46875Z"></path>
                    </svg>
                    <h5 class="info-title">Fecha de llegada: 25 de Diciembre</h5>
                  </div>
                </div>
                <div class="info-item info-social"></a><a class="icon novi-icon icon-xl fa-facebook-f" href="https://www.facebook.com/NacimientoUrbi" target="_blank"></a><a class="icon novi-icon icon-xl fa-instagram" href="https://www.instagram.com/nacimientourbi/" target="_blank"></a></div>
              </div>
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><span>Powered by: <a href="https://samuraistudio.com.mx/" style="hover: red;" target="_blank">Samurai Studio</a></span><span>.&nbsp;</span><span>All Rights Reserved</span></p>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="d-none" id="video1">
      <video class="lg-video-object lg-html5" controls="" preload="none">
        <source src="video/video.mp4" type="video/mp4">
      </video>
    </div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
      $('#Modal').modal('toggle')
    });
    </script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!-- coded by kraken|ragnar|houdini-->
  </body>
</html>
