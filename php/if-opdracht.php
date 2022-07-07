<!DOCTYPE html>
	<head>
		<title> if-opdracht.php </title>
	</head>
	<body>
		<?php
			$gewerkteuren = 45;
			$uurtarief = 15.00;
			$bonus = 100.00;
			$bruto =$gewerkteuren *15.00;
			$werkuren($gewerkteuren > 40? "Belasting is 40%" : "Belasting is 45%") ;
			if ($gewerkteuren <=40){
				$belasting = 0.40 *$bruto ;
				$nettoBedrag = $bruto -$belasting ;

			echo "<br>Uw basissalaris is: € " .$bruto ;
			echo "<br> Uw belasting is: € " .$belasting;
			echo "<br> Uw Nettobedrag is: € ".$nettoBedrag  ;


			}
			elseif($gewerkteuren >40){
				$brutoEnBonus = $bruto +$bonus;
				$belasting = 0.45 *$brutoEnBonus;
				$nettoBedrag = $brutoEnBonus - $belasting;

			echo "<br>Uw basissalaris is: € " .$bruto ;
			echo "<br>Uw basissalaris plus bonus is: €" .$brutoEnBonus;
			echo "<br> Uw belasting is: € " .$belasting;
			echo "<br> Uw Nettobedrag is: € ".$nettoBedrag  ;
			}
		?>
	</body>
</html>
