<?php
$servername = "localhost";
$database = "virtualTrunk";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Revision de la conexion 
if (!$conn) {
    echo "lo sentimos hemos encontrado lo siguiente: ";
	die("Error de conexión: " . mysqli_connect_error());
}
//echo "Conexion exitosa";
//mysqli_close($conn);
?>