<?php
include('men.php');

    require 'Materia.php';
    require 'conexion.php';
    require 'bootstrap/Admin/header.php';
    require 'bootstrap/Admin/footer.php';

    $maestro = $_POST['maestro'];

    //Creamos un objeto
    $materia = new Materia();

    $materia->datosMaestro($maestro);

    $materia->materiasAsignadas($maestro);

    $materia->asignarMateriaMaestro($maestro);






