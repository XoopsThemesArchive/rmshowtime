<?php
/***
 * Archivo para comprobar la ubicaci�n actual
 **/
 
 if (strstr($_SERVER['PHP_SELF'], "/modules/newbb")){
 	$xoopsTpl->assign('inforum', 1);
 }
?>