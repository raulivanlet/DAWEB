<?php

include_once('config.php');

$b=$_POST['nume'];

require_once('config.php');
 
$cerereSQL = "SELECT cantitate FROM produse WHERE nume='$b' "; 
$rezultat = mysql_query($cerereSQL); 
 while($rand = mysql_fetch_array($rezultat)) { 
  $a=$rand['cantitate'];
 } 
 
 if($a!=0)
 {
	$a=$a-1; 
	
	$cerereSQL = "UPDATE `produse` SET  cantitate='$a' WHERE nume='$b' "; 
	mysql_query($cerereSQL); 
	
	echo '<p class="com">Comanda finalizata</p>';
 }
 else
 {
	 echo '<p class="com">Stoc epuizat</p>';
 }

?>

<html>

<head>

<style>
.com
{
	font-size : 100px;
	color : #FFFFFF;
	font-family: Impact;
	margin-top : 180px;
	text-align: center;
	
}
a
{
	text-decoration: none;
	color : #FFFFFF;
}
</style>

</head>

<body bgcolor="#1b1b1b">

<p class="com"><a href="centru.php">Continua cumparaturile</a></p>

</body>

</html>