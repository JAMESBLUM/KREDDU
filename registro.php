<?php
  //obtener datos de conexion con la base
  include("conexion.php");
  $con=conectar();
  //obtener valores de los formularios
  $usuario=$_POST['user'];
  $contraseña=$_POST['pass'];
  //Realizando consulta de datos
  $consulta = "select * from `datos` where Usuario='$usuario'";
  $resultado=mysqli_query($con, $consulta);
  //Validando datos
  $filas=mysqli_num_rows($resultado);
  if($filas>0)
  {
    header("location:bienvenido.html");
  }
  else
  {
    $consulta = "INSERT datos VALUES ($usuario, $contraseña)";
    mysqli_query($con, $consulta);
  }
  mysqli_free_result($resultado);
  mysqli_close($con);

  ?>
