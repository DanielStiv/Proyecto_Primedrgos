<!DOCTYPE html>

<head>


    <title>Registro de Entrada</title>
</head>

<body>
    <link rel="stylesheet" href="Registro_Entrada.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-dist\css\bootstrap.min.css">

    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu"> = </label>
            </div>
            <div class="logo">
                <h1>Prime Drogs</h1>
            </div>
            <nav class="menu">
                <a href="FMUsuario.php"> Salir </a>
                <a href="#"> Usuario </a>

        </div>
        </header>
    <div class="capa"></div>
    <!--	--------------->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="FMProducto.php">AGREGAR PRODUCTO</a>
                <a href="VerProductos.php">INVENTARIO</a>
                <a href="facturasalida.php">FACTURA SALIDA</a>
                <a href="#">REGISTROS</a>
            </nav>

            <label for="btn-menu">x</label>
        </div>
    </div>
     <br>
     <br>
     <br>
     <div class="container text-center">
    <h1>Registro De Entrada</h1>
    
    <form method="post" action="Registro_Entradas.php">
        Id Registro Entrada:
        <input type="text" name="idRegistro_Entrada"> <br><br>
        Nombre de Empresa:
        <input type="text" name="Nombre_Empresa"> <br><br>
        Tipo de Documento:
        <input type="text" name="Tipo_Doc"> <br><br>
        Número de Documento:
        <input type="text" name="Num_Doc"> <br><br>
        
        Fecha:
        <input type="date" name="Fecha"> <br><br>
        
        <p>Id Producto: <input type="text" name="idProductos" value=""> </p><br>
        Total:
        <input type="text" name="Total"> 
        <br><br>
        
            <input type="submit" value="Guardar Registro">
            <br><br>
        
        
    </form>

    <form method="post" action="">
        <p>Id Producto: <input type="text" name="idProductos" value=""> </p><br>

        <?php
        require "Conexion.php";
        $bs = "SELECT * FROM Productos
        WHERE Productos.idProductos = '{$_REQUEST['idProductos']}';";
        $ShowData = mysqli_query($con, $bs);
        while ($mos = mysqli_fetch_array($ShowData)) {
            echo "<p>Nombre Producto: <input type='text' name='Nombre_Producto' value= '{$mos['Nombre_Producto']}' </p>";
            echo "<p>Precio: <input type='text' name='Precio' value= '{$mos['Precio']}' </p>";
            echo "<p>Cantidad del Producto: <input type='text' name='Cantidad' value= '{$mos['Cantidad']}' </p>";


        }


        ?>
        <br>
        
        <input type="submit" value="Buscar Producto"><br>
    
    </form>
    
    </div>

</body>

</html>