<?php

  $host = "localhost";
  $usuario = "root";
  $pass = "";
  $database = "registro";

  $conexion = mysqli_connect("localhost", "root", "", "registro");

  if ($conexion) {
    return "Conectado";
  }else {
    return "No conectado";
  }

 ?>
