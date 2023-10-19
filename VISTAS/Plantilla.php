<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
   <title>Wedding, Wedding Planer & Event HTML Template</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!--==== Header Section Here ======= -->
<header class="header-section">
   <div class="container">
      <div class="header-wrapper">
         <div class="logo-menu">
            <a href="index.html" class="logo">
               <img src="assets/img/logo/logo1.png" alt="img">
            </a>
         </div>
         <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <ul class="main-menu">
            <li class="active">
               <a href="index.php?pagina=register">Registro</a>
            </li>
            <li class="active">
               <a href="index.php?pagina=login">Iniciar Sesion</a>
            </li>
            <li class="active">
               <a href="index.php?pagina=users">Administrador</a>
            </li>
            <li class="active">
               <a href="index.php?pagina=salir">SALIR</a>
            </li>
            <li class="active">
               <a href="index.php?pagina=home">Home</a>
            </li>
               <li>
                        <a href="index.php?pagina=about">About</a>
                    </li>
                    <li>
                    <a href="#0">Service <i class="fas fa-chevron-down"></i></a>

               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="service.html">
                        <span>Service</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="service-single.html">
                        <span>Service Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="story.html">Our story</a>
            </li>
            <li>
               <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="event.html">
                        <span>Our event</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="gallery.html">
                        <span>Gallery</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="error.html">
                        <span>Error 404</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="blog.html">
                        <span>Blog</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="blog-single.html">
                        <span>Blog Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="contact.html">Contact</a>
            </li>
        </ul>
      </div>
   </div>
</header>
<!--==== Header Section End ======= -->

<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
   <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
   </svg>
</div>
<!--==== Scroll-Up Section End ======= -->   


<!-- Cada página se ubicará en esta sección. -->
<?php
#Al usar variables GET, activamos la navegación en la barra de navegación de esta manera
if (isset($_GET["pagina"])) {
   if (
       $_GET["pagina"] == "home" 
       || $_GET["pagina"] == "about" 
       || $_GET["pagina"] == "blog-single" 
       || $_GET["pagina"] == "blog" 
       || $_GET["pagina"] == "contact" 
       || $_GET["pagina"] == "error" 
       || $_GET["pagina"] == "event" 
       || $_GET["pagina"] == "gallery" 
       || $_GET["pagina"] == "service-single" 
       || $_GET["pagina"] == "service" 
       || $_GET["pagina"] == "story" 
       || $_GET["pagina"] == "register" 
       || $_GET["pagina"] == "login"
   ) {
       include "Paginas/" . $_GET["pagina"] . ".php";
   } else {
      #En este caso, si $_GET no coincide con lo anterior, se enviará a la página de error.
       include "Paginas/Error.php";
   }
} else {
   #Si es la primera vez que alguien llega al sitio, lo enviamos a la página de inicio.
   include "Paginas/register.php";
}
?>

<!--=========== Footer Section Here ========= -->
<div class="footer__section">
        <div class="container">
            <div class="border__area">
                <div class="container">
                    <div class="footer__logo center">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="footer__logo">
                        </a>
                    </div>
                    <div class="footer__bottom center">
                        <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                        <ul class="footer__icon">
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="active">
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <li class="mr-none">
                                <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                        <ul class="footer__menu">
                            <li><a href="index.php?pagina=home">home</a></li>
                            <li><a href="index.php?pagina=about">about</a></li>
                            <li><a href="index.php?pagina=service">service</a></li>
                            <li><a href="index.php?pagina=story">Story</a></li>
                            <li><a href="index.php?pagina=gallery">gallery</a></li>
                            <li><a href="index.php?pagina=blog">blog</a></li>
                            <li class="mr-none"><a href="index.php?pagina=contact">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Footer Section End ========= -->

    <!--Jquery 3 6 0 Min Js-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap bundle Js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--Viewport Jquery Js-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--Wow min Js-->
    <script src="assets/js/wow.min.js"></script>
    <!--Owl Carousel min Js-->
    <script src="assets/js/owl.min.js"></script>
    <!--Swiper min Js-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--Magnific popup min Js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--main Js-->
    <script src="assets/js/main.js"></script>
</body>
</html>
