<?php

// Informatii baza de date

$AdresaBazaDate = "localhost";
$UtilizatorBazaDate = "root";
$NumeBazaDate = "daw";

$conexiune = mysql_connect($AdresaBazaDate,$UtilizatorBazaDate)
or die("Nu ma pot conecta la MySQL!");
mysql_select_db($NumeBazaDate,$conexiune)
or die("Nu gasesc baza de date!");

?>