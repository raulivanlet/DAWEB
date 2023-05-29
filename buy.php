<?php

include_once('config.php');

$id=$_POST['id'];

require_once('config.php');
 
$cerereSQL = "SELECT stock FROM products WHERE id='$id' "; 
$rezultat = mysql_query($cerereSQL); 
 while($rand = mysql_fetch_array($rezultat)) { 
  $a=$rand['stock'];
 } 
 
 if($a!=0)
 {
	$a=$a-1; 
	
	$cerereSQL = "UPDATE `products` SET  stock='$a' WHERE id='$id' "; 
	mysql_query($cerereSQL); 
	
	echo '<p class="com">Order completed</p>';
 }
 else
 {
	 echo '<p class="com">No stock</p>';
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

<p class="com"><a href="center.php">Continue shopping</a></p>

</body>

</html>