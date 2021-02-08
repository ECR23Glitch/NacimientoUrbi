<?php
  include('../php/conexion.php');

  $sql_sel = "SELECT * FROM comentarios ORDER BY id DESC";
  $result = $conn->query($sql_sel);
  $count = $result->num_rows;

      if($count > 0) {
?>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Nacimiento URBI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../images/logo-naci.png" type="image/logo">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Fredoka+One&amp;display=swap%7COpen+Sans:300,400,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="../css/style.css">
    <style>.ie-panel{display: none;
      background: #212121;padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
      clear: both;text-align:center;position: relative;z-index: 1;}
      html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="../images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <section class="swiper-container swiper-slider swiper-slider-3 context-dark" data-loop="true">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="../images/Libro-de-Firmas-1920x1080.jpg">
              <div class="swiper-slide-caption section-inset-27">
                <div class="container">
                  <div class="row row-fix row-30 justify-content-between flex-md-row-reverse align-items-md-center align-items-xl-start">
                    <div class="col-sm-12">
                      <div class="pl-md-3 pl-lg-0">
                        <h1 class="title-christmas" data-caption-animate="fadeInUp" data-caption-delay="100" style="font-size:75px; font-weight:bolder; color:#00338e;"><span><img src="../images/landing-christmas-02-195x182.png" alt="" width="220" height="175"/>E</span>scribe tus buenos <br>deseos para <br> esta navidad</h1>
                                  <a class="button button-primary button-nuka" href="http://nacimientourbi.com/" >< Regresar<span class="button-overlay"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Swiper Pagination-->
        </section>
      </header>
      <section class="section novi-bg novi-bg-img section-md bg-default text-center" id="comentarios" style="align-content:center; align-items:center; text-align:center; background:#00338e;">
        <div class="container" style="align-content:center; align-items:center; text-align:center;">
          <div class="row row-30 row-xxl-50 justify-content-center wow fadeInUp" data-wow-delay=".03s">
            <div class="particles-js" id="particles-js-4"></div>
          <div class="box-form-2 novi-bg" data-caption-animate="fadeInRight" data-caption-delay="100" style="align-content:center; align-items:center; background:#ffff; position:center;">
            <h4 style="color:#00338e;">Deja tu comentario aquí:</h4>
            <!--RD Mailform-->
            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="../php/comentarios.php" style="position:center;">
              <div class="form-wrap">
                <input class="form-input" id="footer-christmas-first-name" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="footer-christmas-first-name">Nombre</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="footer-christmas-last-name" type="text" name="lastname" data-constraints="@Required">
                <label class="form-label" for="footer-christmas-last-name">Apellidos</label>
              </div>
              <div class="form-wrap">
                <input class="form-input" id="footer-christmas-email" type="email" name="email" data-constraints="@Email @Required">
                <label class="form-label" for="footer-christmas-email">Correo electrónico</label>
              </div>
              <div class="form-wrap">
                <textarea class="form-input" id="footer-christmas-message" name="message" data-constraints="@Required"></textarea>
                <label class="form-label" for="footer-christmas-message">Escribe tus buenos deseos:</label>
              </div>
              <button class="button button-secondary button-nuka" type="submit">Comentar<span class="button-overlay"></span></button>
            </form>
          </div>
        </div>
      </div>
    </section>
        <!--AQUI VA A IR EL LIBRO DE FIRMAS-->
        <section class="section novi-bg novi-bg-img section-md bg-default text-center" id="comentarios">
          <div class="container">
            <h2 class="wow fadeInUp" style="color:#00338e;">Libro de firmas Nacimiento Urbi</h2>
            <div class="coment count">
              <h3 style="font-size:15px; text-align: left;"><?php echo $count; ?> comentarios</h3>
              <?php } ?>
            </div>
            <?php
              while ($row = $result->fetch_array(MYSQLI_ASSOC)){
             ?>
             <div class="comentarios">
               <br>
               <div class="comment-user"><?php echo $row["nombre"];?> <?php echo $row["apellidos"];?></div>
               <q class="heading-6"><?php echo $row["comentario"];?></q>
               <br>
             </div>
             <?php
            }
              ?>
          </div>
            <a class="button button-primary button-nuka" href="http://nacimientourbi.com/" > < Regresar <span class="button-overlay"></span></a>
        </section>

      </div>
      <div class="snackbars" id="form-output-global"></div>
      <div class="d-none" id="video1">
        <video class="lg-video-object lg-html5" controls="" preload="none">
          <source src="video/video.mp4" type="video/mp4">
        </video>
      </div>
      <script src="../js/core.min.js"></script>
      <script src="../js/script.js"></script>
      <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
      <!-- coded by kraken|ragnar|houdini-->
    </body>
  </html>
