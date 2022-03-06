<?php
    date_default_timezone_get("America/Argentina/Buenos_Aires");

    session_start();

    require_once('conexion.php');

    $fecha  = date("Y-m-d");
    $hora   = date("h:i");
    $apellidoNombre = $_REQUEST['apellidoNombre'];
    $tipoDoc        = $_REQUEST['tipoDoc'];
    $documento      = $_REQUEST['documento'];
    $codPostal      = $_REQUEST['codPostal'];
    $domicilio      = $_REQUEST['domicilio'];
    $localidad      = $_REQUEST['localidad'];
    $telefono       = $_REQUEST['telefono'];
    $email          = $_REQUEST['email'];
    $envio          = $_REQUEST['envio'];

    //GENERAMOS LA CONEXION A LA BASE DE DATOS
    $baseDatos = new Conexion();
    $db = $baseDatos->obtenerConexion();

    // 1. INSERTAR LOS DATOS EN LA TABLA PEDIDOS

    $query = "INSERT INTO pedidos 
              (fecha, hora, apellidoNombre, tipoDoc, documento, codPostal, domicilio, localidad, telefono, email, envio)
              VALUES ('$fecha','$hora','$apellidoNombre', '$tipoDoc', $documento, $codPostal, '$domicilio', '$localidad', $telefono, '$email', '$envio')
             ";
    $stmt = $db->prepare($query);
    $stmt->execute();
    //Verificamos si la inserción se realizó
    if($stmt->rowCount()>0){
        //Si pasa por aca, se realizo la inserción correctamente...
        $idPedido = $db->lastInsertId(); //Nos devuelve el ultimo registro primario que se inserto... 
    }
    else{
        exit(0);
    }
    // 2. RECORRER EL ARREGLO CARRITO (SESSION)
    $agrega = 0; //Variable bandera...
    
    foreach($_SESSION['carrito'] as $carrito){
        $idProducto   = $carrito['idProducto'];
        $detalle      = $carrito['detalle'];
        $cantidad     = $carrito['cantidad'];
        $precioSinIva = $carrito['precioSinIva'];

        //3. INSERTAR CADA POSICION EN LA TABLA PEDIDO_DETALLE.
        $query = "INSERT INTO pedido_detalle
                  (idPedido, idProducto, detalle, cantidad, precioSinIva)
                  VALUES ($idPedido, $idProducto, '$detalle', $cantidad, $precioSinIva)
                 ";
        $stmt = $db->prepare($query);
        $stmt->execute();
        //Verificamos si la inserción se realizó
        if($stmt->rowCount()>0){
            $agrega++; //Incrementamos $agrega en 1...
        }
    }

    if(count($_SESSION['carrito'])==$agrega){
        session_destroy(); //Blanquear las sessiones...
?>  
        <script>
            Swal.fire({
                icon: 'success',
                title: 'PEDIDO REALIZADO CON EXITO.',
                text: 'Nos pondremos en contacto con usted a la brevedad.'
            }).then((result)=>{
                window.location.href = 'index.php'; //Nos envia al inicio de la pagina
            });
        </script>
<?php
    }

?>