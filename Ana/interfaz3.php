<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccion Producto Pago en Linea</title>
</head>
<link rel="stylesheet" href="interfaz3.css">
<body>
    <?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="primedrogsend";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
?>
</body>
</html>