<?php
    session_start();
?>
<style>
#carrito_cantidad {
  position: absolute;
  top: 0;
  left: 80%;
  background: red;
  font-size: 10px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  padding: 2px;
}
</style>
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
                                        <span id="carrito_cantidad" data-action="cart-can" class="badge rounded-circle"><div id="cantidad"></div></span>
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
        <!--? Popular Items Start -->
        <div class="popular-items pt-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-50 text-center">
                            <h2>FINALICE SU PEDIDO</h2>
                            <p>¡Complete con sus datos personales!</p>
                        </div>
                    </div>
                </div>
                <div class="container card pt-20 pb-20">
                    <form name="formulario">                                
                        <div class="row justify-content-center mb-3">
                            <div class="col-12 col-md-6">
                                <label for="apellidoNombreL">Apellido y Nombre</label>
                                <input type="text" class="form-control" id="apellidoNombre"  placeholder="Apellido y Nombre">
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="tipoDocL">Tipo de Documento</label>
                                <select id="tipoDoc" class="form-control">
                                    <option value="DNI" selected>D.N.I</option>
                                    <option value="CUIL">CUIL</option>
                                    <option value="CUIT">CUIT</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="documentoL">Nro. Documento</label>
                                <input type="number" class="form-control" id="documento"  placeholder="Numero Documento">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-12 col-md-5">
                                <label for="domicilioL">Domicilio</label>
                                <input type="text" class="form-control" id="domicilio"  placeholder="Domicilio">
                            </div>
                            <div class="col-8 col-md-5">
                                <label for="localidadL">Localidad</label>
                                <input type="text" class="form-control" id="localidad"  placeholder="Localidad">
                            </div>
                            <div class="col-4 col-md-2">
                                <label for="codPostalL">Cod. Postal</label>
                                <input type="number" class="form-control" id="codPostal"  placeholder="Cod. Postal">
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-6 col-md-3">
                                <label for="telefonoL">Telefono</label>
                                <input type="number" class="form-control" id="telefono"  placeholder="Telefono">
                            </div>
                            <div class="col-6 col-md-5">
                                <label for="localidadL">Email</label>
                                <input type="text" class="form-control" id="email"  placeholder="Email">
                            </div>
                            <div class="col-6 col-md-4">
                                <label for="localidadL">¿Envio?</label>
                                <div class="row justify-content-start">
                                <div class="col-auto ml-5">
                                        <input class="form-check-input" type="radio" onchange="recalcularTotal(0)" name="exampleRadios" id="envio" value="N" checked>
                                        <label class="form-check-label" for="envio">
                                            Retiro en Local
                                        </label>
                                    </div>
                                    <div class="col-auto ml-2">
                                        <input class="form-check-input" type="radio" onchange="recalcularTotal(850)" name="exampleRadios" id="envio" value="S">
                                        <label class="form-check-label" for="envio">
                                            Con Envío
                                        </label>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                <label class="form-check-label text-left" for="envio" style="font-size:10px;">
                                    Costo Envío $840.00
                                </label>
                                </div>
                            </div>
                        </div>
                    </form>                                
                    <?php
                        if(is_array($_SESSION['carrito']) && count($_SESSION['carrito'])!=0 ){
                    ?>
                            <div class="d-flex align-items-end">
                                <div class="col-12 col-md-6">
                                    <div class="row justify-content-start">
                                        <a href="pedido.php" class="btn btn-lg btn-danger text-white">VOLVER</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row justify-content-end">
                                        <h4>TOTAL:</h4>
                                        <h4 id="totalizarPedido"></h4>
                                    </div>
                                    <div class="row justify-content-end">
                                        <a onclick="validarFormulario()" class="btn btn-lg btn-success text-white">FINALIZAR PEDIDO</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="guardar"></div>
        <!-- Popular Items End -->
        <!--? Shop Method Start-->
        <div class="shop-method-area mt-100">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</body>
</html>
<script>
    $('#carrito_cantidad').load('modelo/actualizarCantidad.php');
    $('#totalizarPedido').load('modelo/totalizarPedido.php');
    function recalcularTotal(costo){
        $('#totalizarPedido').load('modelo/totalizarPedido.php?costo='+costo);
    }

    function validarFormulario(){
        if(document.formulario.apellidoNombre.value.length==0){
            alert('¡INGRESE UN APELLIDO Y NOMBRE!');
            document.formulario.apellidoNombre.focus()
            return 0;
        }
        if(document.formulario.tipoDoc.value=='DNI'){
            if(document.formulario.documento.value.length!=8){
                alert('¡DOCUMENTO ERRONEO!');
                document.formulario.documento.focus()
                return 0;
            }
        }
        if(document.formulario.tipoDoc.value=='CUIT'||document.formulario.tipoDoc.value=='CUIL'){
            if(document.formulario.documento.value.length!=11){
                alert('CUIT/CUIL ERRONEO!');
                document.formulario.documento.focus()
                return 0;
            }
        }
        if(document.formulario.domicilio.value.length==0){
            alert('¡INGRESE UN DOMICILIO!');
            document.formulario.domicilio.focus()
            return 0;
        }
        if(document.formulario.localidad.value.length==0){
            alert('¡INGRESE UNA LOCALIDAD!');
            document.formulario.localidad.focus()
            return 0;
        }
        if(document.formulario.codPostal.value.length!=4){
                alert('¡CODIGO POSTAL ERRONEO!');
                document.formulario.codPostal.focus()
                return 0;
        }
        if(document.formulario.telefono.value.length==0){
                alert('¡INGRESE UN TELEFONO!');
                document.formulario.telefono.focus()
                return 0;
        }
        if(document.formulario.email.value.length==0){
            alert('¡INGRESE UN EMAIL!');
            document.formulario.email.focus()
            return 0;
        }
        $('#guardar').load('modelo/guardarPedido.php?apellidoNombre=' + escape(document.formulario.apellidoNombre.value) +
                                                     '&tipoDoc=' + document.formulario.tipoDoc.value +
                                                     '&documento=' + document.formulario.documento.value +
                                                     '&domicilio=' + escape(document.formulario.domicilio.value) +
                                                     '&localidad=' + escape(document.formulario.localidad.value) +
                                                     '&codPostal=' + document.formulario.codPostal.value +
                                                     '&telefono=' + document.formulario.telefono.value +
                                                     '&email=' + escape(document.formulario.email.value) +
                                                     '&envio=' + document.formulario.envio.value
                                                    );

    }

</script>