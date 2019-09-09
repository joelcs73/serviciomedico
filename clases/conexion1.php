<?php
include_once("dbconfig.php");
$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if(!$link){
	echo "Error con el servidor ".PHP_EOL;
	exit();
}


if(!mysqli_select_db($link, DB_NAME)){
	echo "Error con la base de datos";
	exit();
}

mysqli_query($link, "SET NAMES 'utf8'");

// if(!($link = mysql_connect(DB_SERVER,DB_USER,DB_PASS)))
// {
// 	echo "Error con el servidor";
// 	exit();
// }



// if(!mysql_select_db(DB_NAME,$link))
// {
// 	echo "Error con la base de datos";
// 	exit();
// }
// mysqli_query($link, "SET NAMES 'utf8'");

?>