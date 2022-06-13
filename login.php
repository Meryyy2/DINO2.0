<!doctype html>
<php lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./img/dino/logo.jpeg">
    <script  src = "https://kit.fontawesome.com/3e26a1e3ce.js " crossorigin = "anónimo" ></script>
  

    <!-- CSS here -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/owl.carousel.min.css">
        <link rel="stylesheet" href="./css/flaticon.css">
        <link rel="stylesheet" href="./css/slicknav.css">
        <link rel="stylesheet" href="./css/animate.min.css">
        <link rel="stylesheet" href="./css/magnific-popup.css">
        <link rel="stylesheet" href="./css/fontawesome-all.min.css">
        <link rel="stylesheet" href="./css/themify-icons.css">
        <link rel="stylesheet" href="./css/slick.css">
        <link rel="stylesheet" href="./css/nice-select.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/layout.css">
</head>

<body>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="img/dino/logo.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo" >
                                    <a>DINO<span>FASHION</span></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.php">Inicio</a></li>
                                            <li><a href="Catagori.php">Catagorias</a></li>
                                            <li class="hot"><a href="#">
                                                Más reciente</a>
                                                <ul class="submenu">
                                                    <li><a href="product_list.php"> Lista de productos</a></li>
                                                    <li><a href="single-product.php"> Detalles de producto</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.php">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-blog.php">Detalles del blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.php">Registrate</a></li>
                                                    <li><a href="cart.php">Tarjeta</a></li>
                                                    <li><a href="about.php">Sobre nosotros</a></li>
                                                    <li><a href="cart.php">Carrito de compras</a></li>
                                                    <li><a href="checkout.php">Pago del producto
                                                    </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contactanos</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                  
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="./img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="#" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value=""
                                        placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                          <div class="g-recaptcha" data-sitekey="6LdwAWkgAAAAAJPZAifBt3Xu9JrMIVwLHNLF3o8ww"></div>
                                    <button type="submit" class="g-recaptcha" 
        data-sitekey="6Lf8rmcgAAAAAGqyHoBN-WQILdathjLC2BcmalqT" 
        data-callback='onSubmit' 
        data-action='submit value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.php"><img src="./img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Dinofashion con clara vocación internacional y con la intención de vestir a jóvenes comprometidos con su entorno, que viven en comunidad y se relacionan entre sí. Jóvenes que visten de forma relajada, huyendo de los estereotipos y que quieren sentirse bien con lo que llevan.</p>
                               </div>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>enlaces rápidos</h4>
                               <ul>
                                   <li><a href="about.php">Sobre Nosotros</a></li>
                                   <li><a href="index.php"> Inicio</a></li>
                                   <li><a href="contact.php">  Contactanos</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>nuevos productos</h4>
                               <ul>
                                   <li><a href="catagori.php">sueter</a></li>
                                   <li><a href="catagori.php">Pantalones</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Apoyo</h4>
                               <ul>
                                <li><a href="#">Preguntas frecuentes</a></li>

                                <li><a href="#">Informar un problema de pago</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Footer bottom -->
               <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="footer-copy-right">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script>  DINOFASHION todos los derechos reservados
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                 </div>
                </div>
                 <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           </div>
       </div>

       <!-- Footer End-->
   </footer>
<!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="././js/vendor/modernizr-3.5.0.min.js"></script>
    
    <!-- Jquery, Popper, Bootstrap -->
    <script src="././js/vendor/jquery-1.12.4.min.js"></script>
    <script src="././js/popper.min.js"></script>
    <script src="././js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="././js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="././js/owl.carousel.min.js"></script>
    <script src="././js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="././js/wow.min.js"></script>
    <script src="././js/animated.headline.js"></script>
    
    <!-- Scrollup, nice-select, sticky -->
    <script src="././js/jquery.scrollUp.min.js"></script>
    <script src="././js/jquery.nice-select.min.js"></script>
    <script src="././js/jquery.sticky.js"></script>
    <script src="././js/jquery.magnific-popup.js"></script>

    <!-- contact js -->
    <script src="././js/contact.js"></script>
    <script src="././js/jquery.form.js"></script>
    <script src="././js/jquery.validate.min.js"></script>
    <script src="././js/mail-script.js"></script>
    <script src="././js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="././js/plugins.js"></script>
    <script src="././js/main.js"></script>
    
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
    
    

</body>
    
</php>
