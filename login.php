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

</style>

</head>

<body bgcolor="#1b1b1b">

<?php

include_once('config.php');

if(isset($_POST['login'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $cerereSQL = "SELECT * FROM users WHERE name='$username' "; 
    $result = mysql_query($cerereSQL);
	while($row = mysql_fetch_array($result)) {
		if($row['name'] == NULL) {
			echo "<p class='desc'>Wrong user or password!</p>";
		}
		if($password != $row['password']) {
			echo "<p class='desc'>Wrong user or password!</p>";
		}
		else {
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			echo "<p class='desc'>Succes! Please refresh the page.</p>";
		}
	} 
}

?>

<form action="" method="post">
<label class="desc" for="name">Username:</label><br>
<input class='input' type='text' name='name' value=''/><br>
<label class="desc" for="password">Password:</label><br>
<input class='input' type='password' name='password' value=''/><br>
<input class='button' type='submit' name='login' value='Log In'>
</form>

</body>

</html>
