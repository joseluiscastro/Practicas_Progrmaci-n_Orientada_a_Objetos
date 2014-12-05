<?php

    require 'conexion.php';

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM asig_maes WHERE Id_mate = $id";
    $consulta = mysql_query($sql)or die("Error de consulta");

    print "<meta http-equiv='refresh' content='0;url=TestMateria.php'>";
    exit;