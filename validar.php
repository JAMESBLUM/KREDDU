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
    echo "<h2> Bienvenido </h2>"
    header("refresh:5;url=EstoEsKreddu.html");
  }
  else
  {
    echo "Usuario y/o contraseña equivocados";
    header("refresh:5;url=index.html");
  }
  mysqli_free_result($resultado);
  mysqli_close($con);
  ?>
