<?php

$con = mysqli_connect("localhost:3306", "root","", "primedrogsend") or die ("Problemas de conexión en la BD");
    echo "Esta conectado a la base de datos primedrogs con usuario root y contraseña en blanco";

if(empty($_POST["consultar_producto"])){
  if (empty($_POST["Productos"]) or empty($_POST["Nombre_producto"])) {
      echo "Producto Encontrado";
  } else {
    $producto=$_POST["Nombre_producto"];

  $sql=$con->query("select * from Productos where Nombre_Producto='$producto' ");

    if ($datos=$sql->fetch_object()) {
      header("location:interfaz1.php");
    } else {
      echo 'Producto No Encontrado';
    }
    
  }
  
}

?>
