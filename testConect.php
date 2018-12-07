<?php

$dbuser="test";
$dbpass="13vs07";
$dbname="test_db";
$chandle = mysql_connect("datenbank.com", $dbuser, $dbpass) or die("Error conectando a la BBDD");
echo "Conectado correctamente";

mysql_select_db($dbname, $chandle) or die ($dbname . " Base de datos no encontrada." . $dbuser);
echo "Base de datos " . $database . " seleccionada";
mysql_close($chandle);

?>
