<!DOCTYPE html>
<html lang = "nl">
	<head>
		<meta charset="uft-8">
		<title> Datatypen </title>
	</head>
	<body>
	<?php
	$Naam = "Carl";
	$Straat = "Kruislaan 111";
	$Woonplaats = "Utrecht " ;
	$Naw = $Naam . " " . $Straat. " " . $Woonplaats ;
	$Dollars = "999.99";
	$Koers = "1.2";
	$Euros = $Dollars * $Koers ;
	$Euros =round($Euros ,2 );
	echo"Gegevens: $Naw" ;
	echo "<br> Salarisspecificatie van $Naam: 2000 Euro <br> Maand :November <br> Jaar 2020" ;
	echo "<br> Bedrag in euro's is: $Euros" ;
	?>
	</body>
</html>
