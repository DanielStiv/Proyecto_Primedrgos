<!DOCTYPE html>


<head>

    <title>Registro De Entrada</title>
</head>

<body>
    <?php



    $con = mysqli_connect("localhost:3306", "root", "", "primedrogsend") or die("Problemas de conexión en la BD");
    echo "Esta conectado a la base de datos primedrogs con usuario root y contraseña en blanco";

    mysqli_query($con, "INSERT INTO Registro_Entrada (idRegistro_Entrada, idProductos, Fecha, Nombre_Empresa, Total, Tipo_Doc, Num_Doc) values
        ('{$_REQUEST['idRegistro_Entrada']}','{$_REQUEST["idProductos"]}', '{$_REQUEST["Fecha"]}', '{$_REQUEST["Nombre_Empresa"]}', '{$_REQUEST["Total"]}', '{$_REQUEST["Tipo_Doc"]}', '{$_REQUEST["Num_Doc"]}')") or die
        ("Hay problemas en el select" . mysqli_error($con));

    mysqli_close($con);

    echo "El registro de entrada se registró con éxito";
    header("locate: Registro_Entrada.php")

        ?>
</body>

</html>