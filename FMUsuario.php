<!DOCTYPE html>

<head>

    <title>Login</title>
</head>
<link rel="stylesheet" href="bootstrap-5.3.0-dist\css\bootstrap.min.css">
<link rel="stylesheet" href="Inicio.css">

<body>
    <div class="Formulario">
        <h1>Inicio de Sesion </h1>


        <form method="post">

            <div class="username">
                <input type="text" name="usu" requiere>
                <label>Usuario:</label>
            </div>
            <div class="username">
                <input type="password" name="pass" required>
                <label>Contraseña:</label>
            </div>
            <center>
            <input type="submit" name="Ingresar" value="Iniciar ">
            </center>
    </div>
    <?php
    $host = "127.0.0.1";
    $port = 3306;
    $socket = "";
    $user = "root";
    $password = "";
    $dbname = "primedrogsend";

    $conectar = new mysqli($host, $user, $password, $dbname, $port)
        or die('Could not connect to the database server' . mysqli_connect_error());

    $base = mysqli_query($conectar, "SELECT * FROM Inicio WHERE Usuario ='{$_POST['usu']}' AND Contrasenia = '{$_POST['pass']}'");
    $Data = mysqli_num_rows($base);

    if ($Data == 1) {
        if ($Data == 1) {
            $_SESSION['Usuario'] = $nombre;
            header("location: FmProducto.php");
            exit();
        }
    } elseif ($Data == 0) {
        echo "<script>alert('Usuario no Existe')</scrit>";
    }



    ?>

    </form>



</body>