<?php

function conectar()
{
  $user="root";
  $pass="";
  $server="localhost";
  $db="login";
  $con=mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar con la base".mysql_error());
  return $con;
}

?>
