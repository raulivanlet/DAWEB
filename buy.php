<?php

session_start();
include_once('config.php');
if(isset($_SESSION['user_id'])) {
$id=$_POST['id']; 
$cerereSQL = "SELECT * FROM products WHERE id='$id' "; 
$rezultat = mysql_query($cerereSQL); 
while($rand = mysql_fetch_array($rezultat)) { 
  $stock = $rand['stock'];
  $content = $rand['name'];
  $price = $rand['price'];
} 
if($stock != 0) {
	$stock = $stock - 1; 
	$cerereSQL = "UPDATE `products` SET  stock='$stock' WHERE id='$id' "; 
	mysql_query($cerereSQL); 

	$user_id = $_SESSION['user_id'];
	$time = date("Y-m-d H:i:s");
	$cerereSQL = "INSERT INTO `orders` (`user_id`, `content`, `value`, `date`) VALUES ('$user_id', '$content', '$price', '$time');"; 
	mysql_query($cerereSQL); 
	
	echo '<p class="com">Order completed!</p>';
	echo "<p class='com'><a href='center.php'>Continue shopping</a></p>";
}
else {
	echo '<p class="com">No stock available!</p>';
	echo "<p class='com'><a href='center.php'>Continue shopping</a></p>";
}
}
else {
	echo "<p class='com'><a href='login.php'>Please log in</a></p>";
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

</body>

</html>