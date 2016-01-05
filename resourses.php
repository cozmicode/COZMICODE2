<?php
$serv="http://" . $_SERVER["SERVER_NAME"] .'/COZMICODE/';;
$RUTAS= array(
"GENERAL"=>$serv,
"CSS"=>$serv."librerias/css/",
"JS"=>$serv."librerias/js/",
"JS-DATATABLES"=>$serv."librerias/js/datatables/",
"FONTAWESOME"=>$serv."librerias/fontawesome/",
"GLOBALES"=>$serv."globales/",
"LENGUAJES"=>$serv."lenguajes/",
);

$FONTAWESOME=array('css/font-awesome.min.css');
$CSS=array('../font/typicons.css','style.css');
$JSDATATABLES=array('jquery.dataTables.min.js','dataTables.bootstrap.min.js');
$JS=array('jquery.min.js','scripts.js');


/*

for ($i=0 ; $i<=(count($FONTAWESOME)-1);$i++) {
	echo '<link href="'.$RUTAS['FONTAWESOME'].$FONTAWESOME[$i].'" rel="stylesheet">';
}
*/
for ($i=0 ; $i<=(count($JS)-1);$i++) {
	echo '<script src="'.$RUTAS['JS'].$JS[$i].'"></script>';
}
for ($i=0 ; $i<=(count($CSS)-1);$i++) {
	echo '<link href="'.$RUTAS['CSS'].$CSS[$i].'" rel="stylesheet">';
}
/*
for ($i=0 ; $i<=(count($JSDATATABLES)-1);$i++) {
	echo '<script src="'.$RUTAS['JS-DATATABLES'].$JSDATATABLES[$i].'"></script>';
}*/

include("classes/config.php"); 
require_once('classes/conex.php');


?>
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,100' rel='stylesheet' type='text/css'>