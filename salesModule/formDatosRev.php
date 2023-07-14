<?php
class formDatosRev
{
    public function formDatosRevshow($datos)
    {
        ?>
        <html>
        <head>
            <title>Datos del servicio</title>
        </head>
        <body>
            <h1>Datos del servicio</h1>

            <form name="formDatosRev" method="POST" action="./getDatosRev.php">
                <fieldset>
                    <legend>Datos de la Revisión</legend>

                    <label for="dni2">DNI:</label>
                    <input type="text" name="dni2" id="dni2" value="<?php echo $datos[0]; ?>" readonly>
                    <br><br>

                    <label for="modelo2">Modelo:</label>
                    <input type="text" name="modelo2" id="modelo2" value="<?php echo $datos[1]; ?>" readonly>
                    <br><br>

                    <label for="marca2">Marca:</label>
                    <input type="text" name="marca2" id="marca2" value="<?php echo $datos[2]; ?>" readonly>
                    <br><br>

                    <label for="placa2">N° de Placa:</label>
                    <input type="text" name="placa2" id="placa2" value="<?php echo $datos[3]; ?>" readonly>
                    <br><br>

                    <label for="fechaEntrada2">Fecha de Entrada:</label>
                    <input type="text" name="fechaEntrada2" id="fechaEntrada2" value="<?php echo $datos[4]; ?>" readonly>
                    <br><br>

                    <label for="descripcion">Descripción de lo solicitado:</label>
                    <input type="text" name="descripcion" id="descripcion">
                    <br><br>

                    <label for="salida_programada">Fecha de Salida:</label>
                    <input type="date" name="salida_programada" id="salida_programada">
                    <br><br>

                    <label for="precio">Precio:</label>
                    <input type="text" name="precio" id="precio">
                    <br><br>
                </fieldset>

                <input type="submit" name="btnAceptar" value="Aceptar Solicitud">
                <input type="submit" name="btnRechazar" value="Rechazar Solicitud">
 
            </form>
        </body>
        </html>
        <?php
    }
}
?>