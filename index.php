<?php
    session_start();
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = array();
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ferrero Sellos | Sellos Personalizados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <meta charset="utf-8">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky bg-light shadow p-3">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo animated bounceInLeft slow">
                            <a href="index.php"><img src="assets/img/logo/logo.png" class="animated pulse slower infinite" height="90" width="95" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="#">Productos</a>
                                        <ul class="submenu">
                                         
                                            <?php
                                                require_once('modelo/categorias.php');
                                                $objC = new Categorias();
                                                $respC = $objC->obtener();
                                                foreach($respC as $categorias){
                                                    echo "
                                                            <li><a href='catalogo.php?idCategoria=".base64_encode($categorias['idCategoria'])."'>".$categorias['detalle']."</a></li>
                                                         ";
                                                }
                                            ?>
                                        </ul>
                                    </li>
                                    <li><a href="about.php">¿Quienes Somos?</a></li>
                                    <li><a href="about.php">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right animated bounceInRight slow">
                            <ul>
                                <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                                <li><a href="pedido.php">
                                        <span class="flaticon-shopping-cart"></span>
                                        <span id="carrito_cantidad">
                                            <div id="cantidad"></div><!-- MOSTRAR EL NUMERO -->
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start -->
        <div class="slider-area">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" style="background-color:#FADBD8;">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">¡Sellos para profesionales y escolares!</h1>
                                    <p class="text-justify" data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Sellos automáticos personalizados de diversos tamaños, para profesionales y/o el colegio. ¡Nos indicás el texto y te armamos distintas variantes de diseño!</p>
                             
                                    <div class="hero__btn text-center" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="industries.html" class="btn btn-lg btn-danger text-white">Ver Productos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 d-none d-sm-block">
                                <div data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/watch.png" width="100%" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" style="background-color:#FADBD8">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">¡Estampá tu marca!</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Creamos tu sello personalizado para que dejes tu marca en todos tus trabajos.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                        <a href="industries.html" class="btn btn-lg btn-danger text-white">Ver Productos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 d-none d-sm-block">
                                <div data-animation="bounceIn" data-delay=".4s">
                                    <img src="assets/img/hero/watch1.png" width="100%" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Popular Items Start -->
        <div class="popular-items pt-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-20 text-center">
                            <h2>PRODUCTOS DESTACADOS</h2>
                            <p>¡Aquí encontrarás algunos de nuestros productos destacados y más vendidos!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        require_once('modelo/productos.php');
                        $objPD = new Productos();
                        $respPD = $objPD->obtenerDestacados();
                        foreach($respPD as $productosDest){
                    ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center shadow p-3 mb-5 bg-white rounded" style="border: 1px solid #ABB2B9; border-radius: 10px;"                                ">
                                    <div class="popular-img">
                                        <img src="<?php echo $productosDest['foto1']?>" height="330px;" width="361px;" style="border-radius: 10px 10px 0px 0px;"  alt="">
                                        <div class="img-cap">
                                            <span>
                                                <?php echo $productosDest['descripcion']?>
                                            </span>
                                        </div>        
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="producto_detalle.php"><?php echo $productosDest['detalle']?></a></h3>
                                        <span>$ <?php echo doubleval($productosDest['precioSinIva'])?></span>
                                        <button class="btn btn-lg btn-success mb-10">Agregar al Carrito</button>
                                    </div>
                                </div>
                            </div>
                
                    <?php
                        }
                    ?>
                </div>
                <!-- Button -->
                <div class="row justify-content-center mb-30">
                    <div class="room-btn">
                        <a href="industries.html" class="btn btn-lg btn-danger text-white">Ver Catalogo Completo</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Items End -->
        <!--? Shop Method Start-->
        <div class="shop-method-area">
            <div class="container">
                <div class="method-wrapper" style="background-color: #E74C3C">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-shopping-cart"></i>
                                <h6>¡Agregue productos al carrito!</h6>
                                <p>Recorra nuestro catálogo y agregue productos al carrito.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-unlock"></i>
                                <h6>Complete los datos de la compra</h6>
                                <p>Trabajamos con la plataforma de MercadoPago para que tu compra sea 100% segura.</p>
                            </div>
                        </div> 
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-package"></i>
                                <h6>Coordinaremos tu envío</h6>
                                <p>Una vez finalizada la compra nos pondremos en contacto con usted para coordinar el envío.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
    <footer>
        <!--
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                   
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" height="90" width="95" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Offers & Discounts</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#">Woman Cloth</a></li>
                                    <li><a href="#">Fashion Accessories</a></li>
                                    <li><a href="#"> Man Accessories</a></li>
                                    <li><a href="#"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="#">Frequently Asked Questions</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Report a Payment Issue</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- Footer bottom -->
                <div class="row align-items-center m-2">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p style="color:black;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Reverdados | Powered By <a href="https://www.tesysweb.com" target="_blank">Tesys - Servicios Informáticos</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                  
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-5">
                        <div class="footer-copy-right f-right">
                            <!-- social -->
                            <div class="footer-social mr-80">
                                <a href="https://www.instagram.com/ferrerosellos"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.facebook.com/ferrerosellos"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>
<style>
    #carrito_cantidad{
        position: absolute;
        top:0;
        left: 80%;
        background: red;
        font-size: 10px;
        color: white;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2px;
    }
</style>
<script>
    $('#carrito_cantidad').load('modelo/actualizarCantidad.php');
</script>