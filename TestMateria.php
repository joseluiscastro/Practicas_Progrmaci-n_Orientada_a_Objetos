<?php
include('men.php');

    require 'Materia.php';
    require 'conexion.php';
    require 'bootstrap/Admin/header.php';
    require 'bootstrap/Admin/footer.php';

    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
        $materia = $_REQUEST['materia'];
        $maestro = $_REQUEST['maestro'];

        if($materia != 0){
            $sql = "INSERT INTO asig_maes (Id_maes, Id_mate) VALUES ($maestro, $materia)";
            $consulta = mysql_query($sql)or die("Error de inserción");
        }

    }

    //Creamos un objeto
    $materia = new Materia();

    $materia->seleccionaMaestro();

?>