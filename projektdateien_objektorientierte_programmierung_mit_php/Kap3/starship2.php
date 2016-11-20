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
		function __clone()
		{
			$this->designation = "Ein Abbild von: " . $this->designation;
			$this->speed = $this->speed + 5;
		}
		
	}
	
	//Objekt
	
	$enterprise = new Starship ("Enterprise 2", 15);
	$ramboo = new Starship ("Shuttle", 3);
	$flex = $ramboo;
	$flex2 = clone $ramboo;
	
	
	//Ausgabe
	
	echo $enterprise;
	echo $ramboo;
	echo $flex2;
	echo $flex;
?>	
</body>
</html>