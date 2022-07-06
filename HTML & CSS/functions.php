<?php
function createlist($array, $classname)
{

    $html = '<ul class="'. $classname . '">';

    foreach ($array as $key => $val){
   $html .= "<li><a href='". $val ."'>".$key."</a></li>";
    }

    $html .='</ul>';
    return "$html";
}
	//maak functie
	function createTable($arr)
	{

		$html ="<table>";
	//loop door de array
	foreach($arr as$row){
		$html .= "<tr>";
		foreach($row as $key => $value){
			//weergeven key en value op het scherm
			$html .="<td>".$value."<td>";
			}
			$html .="<tr>";
	};
	$html .="</table>";
	return $html;
}
	//call function

	$arr = ["html", "css" ,"js","php"];
	//maak skillbar functie
	function createSkillbar($taal,$perc,$color){

		//html tag openen
		$html = "<p>.$taal.</p>";

		//html div tag openen
		$html .= "<div class='container'>";

		//variabelen injecteren in de html
		$html .="<div class ='skills ".$taal."' style='width:".$perc."%;
		background-color:".$color.";'>".$perc."%</div>";
		$html .= "</div>";

		//resultaat terug geven
		return $html ;
	}

	//maak Card fuctie
	function createCard($plaatje,$naam,$baan){


		$html= "<div class='card'>";
		$html .="<img src='./media/$plaatje' style='width: 100%'>";
		$html .= "<div class='containercard'>";
		$html .= "<h4><b>$naam</b></h4>";
		$html .= "<p>$baan</p>";
		$html .= "</div>";
		$html .= "</div>";
		return $html;
		}
		//resultaat terug geven