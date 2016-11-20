<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php	
	//Definiere Klasse Raumschiff
	class Starship{
		private $speed = 0;
		
		 function increase($value)
		{
			$this->speed += $value;
		}
		
		
		function __toString()
		{
			return "Geschwindigkeit: $this->speed <br>";
			        
		}
	}
	
	class Cargoship extends Starship {
		private $cargo = 0;
		
		function moreCargo($amount)
		{
		 $this->cargo += $amount;	
		}
		
		function lessCargo($amount)
		{
			$this->cargo -= $amount;
		}
		function __toString()
		{
			return "Die Ladung beträgt: $this->cargo <br>"
			. parent::__toString();
			
			
			
		}
	}
	
$flux = new Cargoship();
$flux->increase(45);
$flux->moreCargo(600);


echo $flux;
	
?>	
</body>
</html>