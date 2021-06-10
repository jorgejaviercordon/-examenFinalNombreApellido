<?php

require './ClassProducto.php';

// Variables
$servername = "localhost";
$username = "php";
$password = "1234";
$dbname = "pruebas";
$fcod = $_POST["fcod"];
$fdesc = $_POST["fdesc"];
$fprecio = $_POST["fprecio"];
$fstock = $_POST["fstock"];
$fdescuento = $_POST["fdescuento"];

// Establecer conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

//Creamos un objeto cliente y le pedimos el alta.

$productoNuevo = new Producto($fcod,$fdesc,$fprecio,$fstock,$fdescuento);

$productoNuevo->darAlta($conn);

function compruebaDatos($fprecio,$fstock) {
  echo "$fprecio, $fstock .<br>";
if ($fprecio, $fstock > 0) {
  echo "false";
}elseif ($fprecio, $fstock < 0){
 echo "true";

}
}

// Cerrar la conexion a la base de datos
$conn->close();

?>
