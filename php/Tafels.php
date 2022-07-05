<?php
	for ($tafel = 1;$tafel<=10;$tafel++)
	{
		echo "<h2> Tafel van $tafel</h2>";
		for ($teller = 1;$teller<=10;$teller++){

		$tafelresultaat = $teller * $tafel;
		echo "$teller x $tafel =$tafelresultaat";

		echo "<br>";
		}
	}
?>