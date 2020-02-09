<?php

function conectar()
{
  $user="K95XYrvS2W";
  $pass="iP5BEPlGCc";
  $server="remotemysql.com";
  $db="K95XYrvS2W";
  $con=mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar con la base".mysql_error());
  return $con;
}

?>
