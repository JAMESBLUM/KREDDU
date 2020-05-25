<?php
  //obtener datos de conexion con la base
  include("conexion.php");
  $con=conectar();
  //obtener valores de los formularios
  $usuario=$_POST['user'];
  $contraseña=$_POST['pass'];
  //Realizando consulta de datos
  $consulta = "select * from `Alumno` where Clave='$usuario'";
  $resultado=mysqli_query($con, $consulta);
  //Validando datos
  $filas=mysqli_num_rows($resultado);
  if($filas>0)
  {
    echo "<h1><center><br><br>El Usuario ya existe</center></h1>";
    header("refresh:3;url=registro.html");
  }
  else
  {
    $consulta = "INSERT INTO `Alumno` (`Clave`, `Contra`) VALUES ('$usuario','$contraseña')";
    mysqli_query($con, $consulta);
    echo "<h1><center><br><br>Bienvenido</center></h1>";
    mysqli_close($con);
    header("refresh:3;url=EstoEsKreddu.html");

  }


  ?>
