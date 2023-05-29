<!doctype html>

<head>

<link rel="stylesheet" href="CSS/style.css">

<style>
.input
{
	background-color : #1b1b1b;
	color : #1b1b1b;
	width : 1%;
	border : 5px solid #1b1b1b;
}
.button
{
	font-size : 25px;
	font-family: Impact;
	border : 5px solid #ffa31a;
	background-color : #ffa31a;
}
</style>

</head>

<body bgcolor="#1b1b1b">

<p id="acasa">
<font face="Arial" ><b><a href="center.php" target="centru">Home</a></b></f>
</p>
<p id="categorii">
<font face="Arial" ><b>Categories</b></f></p>
    <p><font face="Arial" >
    <form action='category.php' target="centru" method='post'>
    <input class='input' type='text' name='name' value='action'/>
    <input class='button' type='submit' name='send' value='Action'>
    </form>
    </f></p>

    <p><font face="Arial" >
    <form action='category.php' target="centru" method='post'>
    <input class='input' type='text' name='name' value='adventure'/>
    <input class='button' type='submit' name='send' value='Adventure'>
    </form>
    </f></p>

    <p><font face="Arial" >
    <form action='category.php' target="centru" method='post'>
    <input class='input' type='text' name='name' value='rpg'/>
    <input class='button' type='submit' name='send' value='RPG'>
    </form>
    </f></p>
</body>

</html>