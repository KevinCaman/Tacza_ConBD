<?php
function verificarBoton1($btonAceptar)
{
    if(isset($btonAceptar))
        return true;
    else
        return false;
}

function verificarBoton2($btonCancelar)
{
    if(isset($btonCancelar))
        return true;
    else
        return false;
}

function validarCampos($precio, $Salida, $descripcion)
{
    $precio=trim($precio);
    $Salida=trim($Salida);
    $descripcion=trim($descripcion);

    if (strlen($precio) > 0) {
        return true;
    } else {
        return false;
    }
}

$DNI = $_POST['dni2'];
$Modelo = $_POST['modelo2'];
$Marca = $_POST['marca2'];
$Placa = $_POST['placa2'];
$FechaE = $_POST['fechaEntrada2'];
$descripcion = $_POST['descripcion'];
$Salida = $_POST['salida_programada'];
$precio = $_POST['precio'];
$boton1 = $_POST['btnAceptar'];
$boton2 = $_POST['btnRechazar'];

if(verificarBoton1($boton1))
{
    $registros1=[$DNI, $Modelo, $Marca, $Placa, $FechaE,$descripcion,$Salida,$precio];
    if (validarCampos($precio, $Salida, $descripcion)) {
        
        include_once('../model/registroBD.php');
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objRegistro = new registro();

        $validar=$objRegistro -> regisRev($registros1);
        if($validar==1){
            $objMensaje -> windowMensajeSistemaShow("Solicitud aceptada: Datos resgistrados","<a href='../index.php'>ir al inicio</a>");  
        }else{
            $objMensaje -> windowMensajeSistemaShow("Error: Algo salió mal","<a href='../index.php'>ir al inicio</a>");
        }
                   
    } else {

        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: Los datos ingresados no son validos","<a href='../index.php'>ir al inicio</a>");
    }
}

if(verificarBoton2($boton2))
{   
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Solicitud cancelada","<a href='../index.php'>ir al inicio</a>");
      
}
?>