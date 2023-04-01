<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resoluciones</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

</body>
</html>






<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador','Profesor','Padre'];
permisos($permisos);

?>
<html>
<head>
<title>Inicio | Registro de Notas</title>
    <meta name="description" content="Registro de Notas de la E.P.E.T N°7" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="header">
        <h1>Registro de Notas - E.P.E.T N°7</h1>
        <h3>Usuario:  <?php echo $_SESSION["username"] ?></h3>
</div>
<nav>
    <ul>
        <li class="active"><a href="inicio.view.php">Inicio</a> </li>
        <li><a href="alumnos.view.php">Registro de Alumnos</a> </li>
        <li><a href="listadoalumnos.view.php">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de Notas</a> </li>
        <li><a href="listadonotas.view.php">Consulta de Notas</a> </li>
        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
           <h1 class="text-center">E.P.E.T N°7</h1>
        <?php
        if(isset($_GET['err'])){
            echo '<h3 class="error text-center">ERROR: Usuario no autorizado</h3>';
        }
        ?>
        <br>
        <hr>
        <p class="text-center"><strong>Integrantes del Grupo</strong><br><br>Maximiliano Nahuel Gareca<br>Cesar Emiliano Cabrera<br>Marianela Naiara Velazquez<br>Gonzalo Javier Amarilla</p>
        <br>
        </div>
</div>

<footer>

    <p>Derechos reservados &copy; 2023</p>
</footer>

</body>

</html>