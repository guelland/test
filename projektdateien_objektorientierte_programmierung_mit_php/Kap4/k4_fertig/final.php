<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php	
	class Artist{
		protected $name;
		public function __construct($name)
		{
			$this->name = $name;
		}
		public function getName()
		{
			return $this->name . "<br>";
		}
		final public function lob()
		{
			return $this->name . " ist der Allerbeste! <br>";
		}
	}
	
	class  Painter extends Artist {
		
		public function getName()
		{
			return "Mein name ist " .$this->name ."<br>";
		}
	  public function lob()
	  {
	  	return "Das darf nicht funktionieren";
	  }
		
		
	}
	
	$artist = new Artist ("Rembrand");
	$painter = new Painter ("Klee");
	
	echo $artist->getName();
	echo $artist->lob();
	echo $painter->getName();
	echo $painter->lob();
?>	
</body>
</html>