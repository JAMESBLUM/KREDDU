<?php

function conectar()
{
  $user="6XOcv3g6Ri";
  $pass="U8RJeDHxfr";
  $server="remotemysql.com";
  $db="6XOcv3g6Ri";
  $con=mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar con la base".mysql_error());
  return $con;
}

?>
