<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php	

require 'crew.php';


	//Definiere Klasse Raumschiff
	class Starship{
		private $designation;
		private $speed;
		private $besatzung;
		
		
		
		function __construct($des, $spe, $bes)
		{
			$this->designation = $des;
			$this->speed = $spe;
			$this->besatzung = $bes;
			
		}
		
		function __toString()
		{
			return "$this->designation, " . "$this->speed Lj/h <br>" 
			       ."$this->besatzung";
		}
		
		
	}
	
	
	
	//Objekt
	$flex = new Starship("Shuttle",15,(new Crew("Fritz", "Franz", "Frei")));
	

	//Ausgabe
	
	echo $flex;
	
?>	
</body>
</html>