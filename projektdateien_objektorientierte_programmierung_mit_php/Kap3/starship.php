<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php	
	//Definiere Klasse Raumschiff
	class Starship{
		private $designation;
		private $speed;
		
		function __construct($des, $spe)
		{
			$this->designation = $des;
			$this->speed = $spe;
		}
		
		function __toString()
		{
		return "$this->designation, " . "$this->speed Lj/h <br>";
		}
	}
	
	//Objekt
	
	$enterprise = new Starship ("Enterprise 2", 15);
	$ramboo = new Starship ("Shuttle", 3);
	
	//Ausgabedfgdfdfdf
	
	echo $enterprise;
	echo $ramboo;
?>	
</body>
</html>