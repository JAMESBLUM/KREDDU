<?php
  //obtener datos de conexion con la base
  include("conexion.php");
  $con=conectar();
  //obtener valores de los formularios
  $usuario=$_POST['user'];
  $contraseña=$_POST['pass'];
  //Realizando consulta de datos
  $consulta = "select * from `Alumno` where Clave='$usuario' and Contra='$contraseña'";
  $resultado=mysqli_query($con, $consulta);
  //Validando datos
  $filas=mysqli_num_rows($resultado);
  if($filas>0)
  {
    echo "<h1><center><br><br>Bienvenido</center></h1>";
    header("refresh:3;url=EstoEsKreddu.html");
  }
  else
  {
    echo "<h1><center><br><br>Contraseña y/o Usuario equivocados</center></h1>";
    header("refresh:3;url=index.html");
  }
  mysqli_free_result($resultado);
  mysqli_close($con);
  ?>
