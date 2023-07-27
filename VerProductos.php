<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Productos </title>

</head>

<link rel="stylesheet" href="Estilos.css">
<link rel="stylesheet" href="bootstrap-5.3.0-dist\css\bootstrap.min.css">

</head>

<body>

    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <div class="btn-menu">
                    <label for="btn-menu"> = </label>
                </div>

                <div class="logo">
                    <img src="logo.png" alt="Logo PrimeDrogs">
                </div>

                <nav class="menu">

                    <a href="#">Usuario</a>
                    <a href="FMUsuario.php">Salir</a>

            </div>

    </header>

                <div class="capa"></div>

            <input type="checkbox" id="btn-menu">
            <div class="container-menu">
                <div class="cont-menu">
                    <nav>
                        <a href="FmProducto.php">Agregar producto</a>
                        <a href="VerProductos.php">Inventario</a>
                        <a href="facturasalida.php">Factura de Salida</a>
                        <a href="Registro_Entrada.php">Registros</a>
                    </nav>

                    <label for="btn-menu">x</label>
                </div>
            </div>


    <center>
        <h2 id="txt-R"> Lista de productos </h2>
    </center>


    <div class="table-container">
        <table class="table" id="letra-t">
            <thead id="letra-t">
                <tr id="letra-t">
                    <th scope="col" id="letra-t">Código de producto</th>
                    <th scope="col" id="letra-t">Nombre</th>
                    <th scope="col" id="letra-t">Categoría</th>
                    <th scope="col" id="letra-t">Cantidad</th>
                    <th scope="col" id="letra-t">Precio total</th>
                    <th scope="col" id="letra-t">Acción</th>
    
                </tr>
            </thead>



            <?php

            require 'Conexion.php';

            $base = "SELECT * FROM productos";

            $BaseProducto = mysqli_query($conexion, $base);

            while ($Mostrar = mysqli_fetch_array($BaseProducto)) {


                ?>

                <tbody id="letra-t">
                    <tr>
                        <td data-label="Código de producto" scope="row">
                            <?php echo "<p>"  . $Mostrar['idProductos']. "</p>" ?>
                        </td>
                        <td data-label="Nombre">
                            <?php echo "<p>"  . $Mostrar['Nombre_Producto'] . "</p>" ?>
                        </td>
                        <td data-label="Categoría">
                            <?php echo "<p>"  . $Mostrar['Categoria'] . "</p>" ?>
                        </td>
                        <td data-label="Cantidad">
                            <?php echo "<p>"  . $Mostrar['Cantidad'] . "</p>" ?>
                        </td>
                        <td data-label="Precio total">
                            <?php echo "<p>"  . $Mostrar['Precio'] . "</p>" ?>
                        </td>

                        <td data-label="Acciónes">
                            <a class="letras" href="EditProducto.php?accion=<?php echo $Mostrar['idProductos']; ?>"
                                target="izq">Editar</a>
                            <a class="letras" href="VerProducto.php?accion=<?php echo $Mostrar['idProductos']; ?>"
                                target="izq">Eliminar</a>
                        </td>
                    </tr>
                </tbody>

                <?php
            }

            if (isset($_GET['accion'])) {

                $id = $_GET['accion'];
                $sql = "DELETE FROM productos WHERE idProductos = '$id';";
                mysqli_query($conexion, $sql) or die("Error: " . mysqli_error($conexion));
            }

            ?>

        </table>
    </div>

</body>

</html>