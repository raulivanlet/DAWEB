<html>

<head>


<style>

.list
{
	display: flex;
	justify-content: left;
	margin-top : 50px;
    flex-wrap: wrap
}
.img
{
	width : 100%;
	border-bottom : 5px solid #ffa31a;
}
.product
{
	border : 5px solid #ffa31a;
	width : 250;
	height : 300;
	float : left;
	margin-left : 25px;
    margin-top : 50px;
}
.name
{
	color : #FFFFFF;
	font-family: Arial;
	text-align : center;
	font-size : 25px;
	margin-bottom : 10px;
	margin-top : 20px;
}
a
{
	text-decoration: none;
	color : #FFFFFF;
}
.button
{
	font-size : 25px;
	font-family: Impact;
	border : 5px solid #ffa31a;
	background-color : #ffa31a;
    width : 250;
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

<div class="list">

<?php

include_once('config.php');

$category = $_POST['name'];

$cerereSQL = "SELECT * FROM products WHERE category='$category'"; 
$rezultat = mysql_query($cerereSQL); 
while($rand = mysql_fetch_array($rezultat)) {
    $id = $rand['id'];
    $name = $rand['name'];
    $price = $rand['price'];
    $image = $rand['image'];

    echo "<div class='product'>
    <img class='img' src='poze/products/$image'>
    <form action='product.php' method='post'>
    <input class='input' type='text' name='id' value='$id'/>
    <br>
    <input class='button' type='submit' name='send' value='$name'>
    </form>
    <p class='name'>$price lei</p>
    </div>";
}

?>

</div>

</body>

</html>