<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recoger y sanitizar los datos
  $nombre    = htmlspecialchars(trim($_POST['nombre']));
  $email     = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $telefono  = htmlspecialchars(trim($_POST['telefono']));
  $mensaje   = htmlspecialchars(trim($_POST['mensaje']));

  // Dirección de correo destino
  $destinatario = "ventas@ienti.com.mx"; // Cambia esta dirección

  // Asunto y cuerpo del mensaje
  $asunto = "Solicitud De Consultoria de $nombre";
  $cuerpo  = "Nombre: $nombre\n";
  $cuerpo .= "Email: $email\n";
  $cuerpo .= "Teléfono: $telefono\n\n";
  $cuerpo .= "Mensaje:\n$mensaje";

  // Cabeceras del correo
  $headers  = "From: $email";

  // Enviar el correo y definir mensaje de respuesta
  if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    $mensajeRespuesta = "¡Gracias por contactarnos, $nombre! Tu mensaje ha sido enviado correctamente.";
  } else {
    $mensajeRespuesta = "Lo sentimos, ocurrió un error al enviar tu mensaje. Por favor, intenta nuevamente.";
  }
} else {
  $mensajeRespuesta = "Acceso no válido.";
}
?>

<!DOCTYPE HTML>
<html lang="es-ES">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ienti & manwere&circledR;</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-ico" href="../images/icon.ico">
  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="all" />
  <!-- carousel CSS -->
  <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css" media="all" />
  <!-- animate CSS -->
  <link rel="stylesheet" href="../css/animate.css" type="text/css" media="all" />
  <!-- animated-text CSS -->
  <link rel="stylesheet" href="../css/animated-text.css" type="text/css" media="all" />
  <!-- font-awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css" type="text/css" media="all" />
  <!-- font-flaticon CSS -->
  <link rel="stylesheet" href="../css/flaticon.css" type="text/css" media="all" />
  <!-- theme-default CSS -->
  <link rel="stylesheet" href="../css/theme-default.css" type="text/css" media="all" />
  <!-- meanmenu CSS -->
  <link rel="stylesheet" href="../css/meanmenu.min.css" type="text/css" media="all" />
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="../../style.css" type="text/css" media="all" />
  <!-- transitions CSS -->
  <link rel="stylesheet" href="../css/owl.transitions.css" type="text/css" media="all" />
  <!-- venobox CSS -->
  <link rel="stylesheet" href="../../venobox/venobox.css" type="text/css" media="all" />
  <!-- responsive CSS -->
  <link rel="stylesheet" href="../css/responsive.css" type="text/css" media="all" />
  <!-- modernizr js -->
  <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

  <!-- Loder Start -->
  <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
  </div>
  <!-- Loder End -->

  <!--==================================================-->
  <!-- Start itsoft Main Menu Area -->
  <!--==================================================-->
  <div id="sticky-header" class="itsoft_nav_manu">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3">
          <div class="logo">
            <a class="logo_img" href="../../index.html" title="ienti&manwere&circledR;">
              <img src="../images/logo.png" alt="logo" />
            </a>
            <a class="main_sticky" href="index.html" title="ienti&manwere&circledR;">
              <img src="../images/logo2.png" alt="logo" />
            </a>
          </div>
        </div>
        <div class="col-lg-9 pl-0 pr-0">
          <nav class="itsoft_menu">
            <ul class="nav_scroll">
              <li><a href="../../index.html">Home </a>
              </li>
              <li><a href="#">Empresa <span><i class="fas fa-angle-down"></i></span></a>
                <ul class="sub-menu">
                  <li><a href="../../sobre-nosotros.html"> Sobre Nosotros </a></li>
                  <li><a href="../../clientes.html"> Nuestros Clientes</a></li>
                  <li><a href="../../aviso-privacidad.html"> Aviso de Privacidad</a></li>
                </ul>
              </li>
              <li><a href="#">Aplicaciones <span><i class="fas fa-angle-down"></i></span></a>
                <ul class="sub-menu">
                  <li><a href="../../caf.html"> CAF </a></li>
                  <li><a href="../../keydoc.html"> Keydoc </a></li>
                  <li><a href="../../xenahosting.html"> xenahosting </a></li>
                </ul>
              </li>
              <li><a href="#">Normatividad <span><i class="fas fa-angle-down"></i></span></a>
                <ul class="sub-menu">
                  <li><a href="../../conciliacion.html"> Conciliacion</a></li>
                  <li><a href="../../depreciacion.html"> Depreciacion</a></li>
                  <li><a href="../../etiquetas.html"> Etiquetas QR</a></li>
                  <li><a href="../../evidencias.html"> Evidencias</a></li>
                  <li><a href="../../inmuebles.html"> Inmuebles</a></li>
                  <li><a href="../../movil.html"> Movil</a></li>
                  <li><a href="../../transparencia.html"> Transparencia</a></li>
                </ul>
              </li>
              <li><a href="#">Servicios <span><i class="fas fa-angle-down"></i></span></a>
                <ul class="sub-menu">
                  <li><a href="../../aplicaciones.html"> Aplicaciones</a></li>
                  <li><a href="../../soporte.html"> Soporte</a></li>
                  <li><a href="../../capacitacion.html"> Capacitación</a></li>
                  <li><a href="../../acompanamiento.html"> Acompañamiento</a></li>
                </ul>
              </li>
              <li><a href="../../contacto.html">Contacto</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
    <div class="mobile-menu">
      <nav class="itsoft_menu">
        <ul class="nav_scroll">
          <li><a href="../../index.html">Home </a>
          </li>
          <li><a href="../../index.html">Empresa <span><i class="fas fa-angle-down"></i></span></a>
            <ul class="sub-menu">
              <li><a href="../../sobre-nosotros.html"> Sobre Nosotros </a></li>
              <li><a href="../../clientes.html"> Nuestros Clientes</a></li>
              <li><a href="../../aviso-privacidad.html"> Aviso de Privacidad</a></li>
            </ul>
          </li>
          <li><a href="#">Aplicaciones <span><i class="fas fa-angle-down"></i></span></a>
            <ul class="sub-menu">
              <li><a href="../../caf.html"> CAF </a></li>
              <li><a href="../../keydoc.html"> Keydoc </a></li>
              <li><a href="../../xenahosting.html"> xenahosting </a></li>
            </ul>
          </li>
          <li><a href="#">Normatividad <span><i class="fas fa-angle-down"></i></span></a>
            <ul class="sub-menu">
              <li><a href="../../conciliacion.html"> Conciliacion</a></li>
              <li><a href="../../depreciacion.html"> Depreciacion</a></li>
              <li><a href="../../etiquetas.html"> Etiquetas QR</a></li>
              <li><a href="../../evicencias.html"> Evidencias</a></li>
              <li><a href="../../inmuebles.html"> Inmuebles</a></li>
              <li><a href="../../movil.html"> Movil</a></li>
              <li><a href="../../transparencia.html"> Transparencia</a></li>
            </ul>
          </li>
          <li><a href="#">Servicios <span><i class="fas fa-angle-down"></i></span></a>
            <ul class="sub-menu">
              <li><a href="../../aplicaciones.html"> Aplicaciones</a></li>
              <li><a href="../../soporte.html"> Soporte</a></li>
              <li><a href="../../capacitacion.html"> Capacitación</a></li>
              <li><a href="../../acompanamiento.html"> Acompañamiento</a></li>
            </ul>
          </li>
          <li><a href="../../contacto.html">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!--==================================================-->
  <!-- End itsoft Main Menu Area -->
  <!--==================================================-->

  <!--==================================================-->
  <!-----Start Header Slider Section ----->
  <!--===================================================-->

  <div class="breadcumb-area d-flex align-items-center">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12">
          <div class="breadcumb-content">
            <h1> Trabajemos Juntos</h1>
            <ul>
              <li><a href="../../index.html">Home</a></li>
              <li> Trabajemos Juntos</li>
            </ul>
          </div>
        </div>
        <div class="britcam-shape">
          <div class="breadcumb-content upp">
            <ul>
              <li><a href="../../index.html">Home</a></li>
              <li> Trabajemos Juntos</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--==================================================-->
  <!-----Start Header Slider Section ----->
  <!--===================================================-->
  <div class="case-study-details">
    <div class="container">
      <div class="case-study-intro">
        <div class="row align-items-center">
          <div class="csd-info">
            <div class="csd-title pt-30">
              <h2>
                <?php echo $mensajeRespuesta; ?>
              </h2>
              <div class="about-button">
                <a href="../../contacto.html"> Regresar A Contacto <i class="bi bi-arrow-left-circle-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--==================================================-->
  <!-- Start itsoft Footer Middle Area -->
  <!--==================================================-->
  <div class="footer-middle">
    <div class="container">
      <div class="row footer-bg">
        <div class="col-lg-4 col-md-6 pl-0">
          <div class="widget widgets-company-info">
            <div class="company-info-desc pr-2">
              <h4 class="widget-title"> Nuestra Oficina </h4>
              <p>
                CINTERMEX Avenida Fundidora 501 <br>
                Local 129 C <br>
                Colonia Obrera <br>
                Monterrey Nuebo León <br>
                CP 64010 <br>
                Tel. 817 7700 119 <br>
              </p>
            </div>
            <div class="follow-company-icon">
              <a class="social-icon-color" href="https://www.facebook.com/ientimanwere"> <i class="bi bi-facebook"></i>
              </a>
              <a class="social-icon-color2" href="https://www.linkedin.com/in/raymundo-pav%C3%B3n-le%C3%B3n-6a3058151/">
                <i class="bi bi-linkedin"> </i> </a>
              <a class="social-icon-color1" href="https://x.com/ienti_ti"> <i class="fa-brands fa-x-twitter"></i> </a>
              <a class="social-icon-color3" href="https://www.youtube.com/user/ientiConsultoria"> <i
                  class="bi bi-youtube"></i> </a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="widget widget-nav-menu">
            <h4 class="widget-title">Empresa</h4>
            <div class="menu-quick-link-content">
              <ul class="footer-menu">
                <li><a href="https://ienti.com.mx/AssetWise/view/principal.php"> Base de Conocimiento </a></li>
                <li><a href="https://ienti.com.mx:2096/"> Web Mail </a></li>
                <li><a href="aviso-privacidad.html"> Aviso de Privacidad </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pl-20">
          <div class="widget widget-nav-menu">
            <h4 class="widget-title"> Paginas </h4>
            <div class="menu-quick-link-content">
              <ul class="footer-menu">
                <li><a href="../../sobre-nosotros.html"> Sobre Nosotros </a></li>
                <li><a href="../../nuestros-servicios.html"> Nuestros Servicios </a></li>
                <li><a href="../../nuestros-productos.html"> Nuestros Productos </a></li>
                <li><a href="../../nuestras-normativas.html"> Nomativas </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="foorer-shape">
          <div class="footer-thumb">
            <img src="../images/resource/red-dot.png" alt="">
          </div>
          <div class="footer-thumb1 bounce-animate2">
            <img src="../images/resource/all-shape.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom-area d-flex align-items-center">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 col-md-6">
            <div class="itsoft-logo">
              <a class="logo_thumb" href="../../index.html" title="ienti & manwere logo">
                <img src="../images/logo.png" alt="" />
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="footer-bottom-content">
              <div class="footer-bottom-content-copy">
                <p>Copyright © 2025 <span>Ienti & manwere&circledR;</span> all rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--==================================================-->
  <!-- End itsoft Footer Middle Area -->
  <!--==================================================-->

  <!--==================================================-->
  <!-- Start scrollup section Area -->
  <!--==================================================-->
  <!-- scrollup section -->
  <div class="scroll-area">
    <div class="top-wrap">
      <div class="go-top-btn-wraper">
        <div class="go-top go-top-button">
          <i class="fas fa-arrow-up"></i>
          <i class="fas fa-arrow-up"></i>
        </div>
      </div>
    </div>
  </div>
  <!--==================================================-->
  <!-- Start scrollup section Area -->
  <!--==================================================-->

  <!-- jquery js -->
  <script src="../js/vendor/jquery-3.2.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- carousel js -->
  <script src="../js/owl.carousel.min.js"></script>
  <!-- counterup js -->
  <script src="../js/jquery.counterup.min.js"></script>
  <!-- waypoints js -->
  <script src="../js/waypoints.min.js"></script>
  <!-- wow js -->
  <script src="../js/wow.js"></script>
  <!-- imagesloaded js -->
  <script src="../js/imagesloaded.pkgd.min.js"></script>
  <!-- venobox js -->
  <script src="../../venobox/venobox.js"></script>
  <!-- ajax mail js -->
  <script src="../js/ajax-mail.js"></script>
  <!--  animated-text js -->
  <script src="../js/animated-text.js"></script>
  <!-- venobox min js -->
  <script src="../../venobox/venobox.min.js"></script>
  <!-- isotope js -->
  <script src="../js/isotope.pkgd.min.js"></script>
  <!-- jquery meanmenu js -->
  <script src="../js/jquery.meanmenu.js"></script>
  <script src="../js/popper.min.js"></script>
  <!-- jquery scrollup js -->
  <script src="../js/jquery.scrollUp.js"></script>
  <!-- theme js -->
  <script src="../js/theme.js"></script>
  <!-- barfiller -->
  <script src="../js/jquery.barfiller.js"></script>
</body>

</html>
