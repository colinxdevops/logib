<?php
$conexion = mysqli_connect("localhost", "root","","prueba");
if (!$conexion){
    echo"no hay coneccion";
}else {
echo "coneccion exitosa";
}
?>
