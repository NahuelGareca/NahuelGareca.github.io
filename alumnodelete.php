<?php
require 'functions.php';
if($_SESSION['rol'] =='Administrador') {
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        try {
            $id_alumno = $_GET['id'];

            $stmt = $conn->prepare("SELECT * FROM notas WHERE id_alumno = $id_alumno ");
            $stmt->execute(); 

            $num_rows = $stmt->rowCount();
            if ($num_rows == 0) {
            

            $alumno = $conn->prepare("delete from alumnos where id = " . $id_alumno);
            $alumno->execute();
            header('location:listadoalumnos.view.php');
            }
            else{
	
                $_SESSION['message'] = 'El alumno no se puede eliminar';
                $_SESSION['message_type'] = 'danger';
                
            
                header('location:listadoalumnos.view.php');
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        die('Ha ocurrido un error');
    }
}else{
    header('location:inicio.view.php?err=1');
}
?>

