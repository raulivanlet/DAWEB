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
    margin-top : 10px;
    margin-bottom : 10px;
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
	color : #FFFFFF;
	border : 5px solid #ffa31a;
    font-size : 25px;
    margin-top : 10px;
    margin-bottom : 10px;
}
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0; 
    background: transparent;
}
input[type="file"] {
    display: none;
}

</style>

</head>

<body bgcolor="#1b1b1b">

<?php

include_once('config.php');

if($_SESSION['user_id'] == '3') {
    echo "<form action='' method='post' enctype='multipart/form-data'>
    <label class='desc' for='name'>Name:</label><br>
    <input class='input' type='text' name='name' value=''/><br>

    <label class='desc' for='description'>Description:</label><br>
    <textarea class='input' rows='4' name='description'></textarea><br>

    <label class='desc' for='category'>Category:</label><br>

    <input class='input' type='radio' name='category' id='action' value='action'>
    <label class='desc' for='action'>Action</label><br>

    <input class='input' type='radio' name='category' id='adventure' value='adventure'>
    <label class='desc' for='adventure'>Adventure</label><br>

    <input class='input' type='radio' name='category' id='rpg' value='rpg'>
    <label class='desc' for='rpg'>RPG</label><br>

    <label class='desc' for='price'>Price:</label><br>
    <input class='input' type='text' name='price' value=''/><br>

    <label class='desc' for='stock'>Stock:</label><br>
    <input class='input' type='text' name='stock' value=''/><br>

    <label class='desc'><input type='file' name='filename'>Select image file</label><br>

    <input class='button' type='submit' name='add' value='Add product'>
    </form>";

    if(isset($_POST['add'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $image = $_FILES['filename']['name'];
        $tempname = $_FILES['filename']['tmp_name'];
        $folder = "poze/products/" . $image;

        $cerereSQL = "INSERT INTO `products` (`name`, `description`, `category`, `price`, `stock`, `image`) VALUES ('$name', '$description', '$category', '$price', '$stock', '$image');"; 
        mysql_query($cerereSQL);

        move_uploaded_file($tempname, $folder);
    }
    echo "<form action='logout.php' target='_top' method='post'>
    <input class='button' type='submit' name='send' value='Log Out'>
    </form>";
}
else {
    $user_id = $_SESSION['user_id'];
    $cerereSQL = "SELECT * FROM users WHERE id='$user_id' "; 
    $result = mysql_query($cerereSQL);
    while($row = mysql_fetch_array($result)) {
        $name = $row['name'];
        $email = $row['email'];
        echo "<p class='title'>$name</p><p class='desc'>Email: $email</p>";
        echo "<form action='logout.php' target='_top' method='post'>
        <input class='button' type='submit' name='send' value='Log Out'>
        </form>";
    }
    echo "<p class='title'>My orders:</p>";
    $cerereSQL = "SELECT * FROM orders WHERE user_id='$user_id' "; 
    $result = mysql_query($cerereSQL);
    while($row = mysql_fetch_array($result)) {
        $id = $row['id'];
        $content = $row['content'];
        $price = $row['value'];
        $time = $row['date'];
        echo "<p class='desc'>$id - $content - $price lei - $time</p>";
    }
}

?>

</body>

</html>
