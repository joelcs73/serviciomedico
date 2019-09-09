<?php
include_once("dbconfig.php");

if(!($link = mysql_connect(DB_SERVER,DB_USER,DB_PASS)))
{
	echo "Error con el servidor";
	exit();
}



if(!mysql_select_db(DB_NAME,$link))
{
	echo "Error con la base de datos";
	exit();
}
mysql_query("SET NAMES 'utf8'", $link);

?>