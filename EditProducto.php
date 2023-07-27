<?php 

require 'Conexion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Productos </title>


</head>

<body>


<?php

require 'Conexion.php';


if (!isset($_POST['actu'])) {

    $id = $_GET['accion'];
    $base = "SELECT * FROM productos WHERE idProductos = '$id';";
    $BaseProducto = mysqli_query($conexion, $base);
    while ($Mostrar = mysqli_fetch_array($BaseProducto)) 

        $idProductos = $Mostrar['idProductos'];
        $nombre_Producto = $Mostrar['Nombre_Producto'];
        $cantidad = $Mostrar['Cantidad'];
        $descripcion = $Mostrar['Descripcion'];
        $precio = $Mostrar['Precio'];
        $categoria = $Mostrar['Categoria'];
        $imagen = $Mostrar['Imagen'];
        $fecha = $Mostrar['Fecha'];

        mysqli_close($conexion);
    }


    require 'Conexion.php';

    $base = "SELECT * FROM productos";

    $BaseProducto = mysqli_query($conexion, $base);

    while ($Mostrar = mysqli_fetch_array($BaseProducto)) {
}

?>

    <form action="EditProducto.php" method="POST">

        <p>Escriba el código del producto que desea editar: <input type="text" name="idProductos" id="" value = <?php echo $idProductos ?>></p>
        <br>
        <br>
        <p> Código de producto: <input type="text" name="idProducto" id="" value="<?php echo $idProductos; ?>"> </p>
        <p> Nombre de producto: <input type="text" name="Nombre_Producto" id="" value = "<?php echo $nombre_Producto ?>"> </p>
        <p> Fecha de vencimiento: <input type="date" name="Fecha" id="" value = "<?php echo $fecha ?>"> </p>
        <p> Categoría: <select name="Categoria" id="" value = "<?php echo $categoria ?>">
            <option value="Analgesico">Analgesicos</option>
            <option value="Antiacidos">Antiácidos</option>
            <option value="Antialergicos">Antialérgicos</option>
            <option value="Antidiarreicos">Antidiarreicos</option>
            <option value="Antiinfecciosos">Antiinfecciosos</option>
            <option value="Antiinflamatorios">Antiinflamatorios</option>
            <option value="Antipireticos">Antipiréticos</option>
            <option value="Antitusivos ">Antitusivos </option>
            <option value="Mucoliticos ">Mucolíticos </option>
            <option value="Laxantes ">Laxantes </option>
            <option value="Vitaminas ">Vitaminas </option>
            </select> </p>
        <p> Cantidad: <input type="text" name="Cantidad" id="" value = "<?php echo $cantidad ?>"> </p>
        <p> Precio: <input type="text" name="Precio" id="" value = "<?php echo $precio ?>"> </p>
        <p> Descripción: <input type="text" name="escripcion" id="" value = "<?php echo $descripcion ?>"> </p>
        <p> Imagen: <img height="200" style="border-radius: 8px;" src="data:image/jpg;base64, <?php echo base64_encode($imagen); ?>" /> 
        
        <p> <input type="submit" name="actu" value="Guardar"> </p>

    </form>

    <html>

    <input type="button" value="Menú" onclick="location.href = '#'">
    <input type="button" value="Agregar producto" onclick="location.href = 'FmProducto.php'">
    <input type="button" value="Lista de productos" onclick="location.href = 'VerProductos.php'">

    </html>

</body>

</html>