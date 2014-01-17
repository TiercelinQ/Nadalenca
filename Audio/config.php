<?php
@session_start();
$hostname='localhost';
$login='root';
$passwd='';
$base='nadalenca';
$connect = mysql_connect($hostname,$login,$passwd) or die ("erreur de connexion");
mysql_select_db($base,$connect) or die ("erreur de connexion base");?>