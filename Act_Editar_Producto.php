
<?php

   require "Conexion.php";

   mysqli_query($conexion, "UPDATE productos SET Nombre_Producto = '{$_REQUEST['Nombre_Producto']}', Cantidad = '{$_REQUEST['Cantidad']}',
   Descripcion = '{$_REQUEST['Descripcion']}', Precio = '{$_REQUEST['Precio']}', Categoria = '{$_REQUEST['Categoria']}','$imagen', Fecha = '{$_REQUEST['Fecha']}' 
   
   WHERE idProductos = '{$_REQUEST['idProductos_P']}';");


   mysqli_close($conexion);

   echo "<br> Datos actualizados exitosamente";

   header("location: ListaProducto.php"); 


?>
