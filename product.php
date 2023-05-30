<?php
session_start();
?>
<html>

<head>

<style>

.title
{
	font-size : 40px;
	color : #FFFFFF;
	font-family: Arial;
	margin-top : 20px;
}
.img
{
	width : 70%;
	border : 5px solid #ffa31a;
}
.desc
{
	font-size : 25px;
	font-family: Arial;
	color : #FFFFFF;
}
.button
{
	font-size : 25px;
	font-family: Impact;
	border : 5px solid #ffa31a;
	background-color : #ffa31a;
	border-radius: 25px;
}
a
{
	text-decoration: none;
	color : #1b1b1b;
}
.input
{
	background-color : #1b1b1b;
	color : #1b1b1b;
	width : 1%;
	border : 5px solid #1b1b1b;
}
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0; 
    background: transparent;
}

</style>

</head>

<body bgcolor="#1b1b1b">

<?php

include_once('config.php');

$id=$_POST['id'];

$cerereSQL = "SELECT * FROM products WHERE id='$id'"; 
$rezultat = mysql_query($cerereSQL); 
while($rand = mysql_fetch_array($rezultat)) {
    $id = $rand['id'];
    $name = $rand['name'];
    $desc = $rand['description'];
	$price = $rand['price'];
    $image = $rand['image'];
	$rating = $rand['avg_rating'];
	$ratings = $rand['ratings'];
}

if(isset($_POST['rate'])) {
	$new_rating = $_POST['stars'];
	$ratings += 1;
	if($ratings >= 2) {
		$rating = ($rating + $new_rating) / 2;
	}
	else {
		$rating = ($rating + $new_rating) / $ratings;
	}
	$rating = number_format((float)$rating, 1, '.', '');
	$cerereSQL = "UPDATE `products` SET ratings='$ratings', avg_rating='$rating' WHERE id='$id' ";
	$rezultat = mysql_query($cerereSQL);
}

echo "<p class='title'>$name</p>";
echo "<p class='desc'>Rating: $rating/5 ($ratings)</p>";
echo "<img class='img' src='poze/products/$image'>";
echo "<p class='desc'>$desc</p>";
echo "<p class='desc'>$price lei</p>";

echo "<form action='product.php' target='centru' method='post'>
<input class='input' type='text' name='id' value='$id'/>
<input type='radio' name='stars' value='1'>
<input type='radio' name='stars' value='2'>
<input type='radio' name='stars' value='3'>
<input type='radio' name='stars' value='4'>
<input type='radio' name='stars' id='five' value='5'>
<input class='button' type='submit' name='rate' value='Rate'>
</form>";

echo "<div style='width : 170px'>
<form action='buy.php' method='post'>
<input class='input' type='text' name='id' value='$id'/>
<br>
<input class='button' type='submit' name='send' value='Buy now'>
</form>
</div>";

?>

</body>

</html>
