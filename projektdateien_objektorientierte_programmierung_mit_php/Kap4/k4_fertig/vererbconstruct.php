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
		
	protected $material;
	public function __construct($name,$mat)
	{
		parent::__construct($name);	
		$this->material = "$mat";
	}
		
	  public function worksWith()
	  {
	  	return $this->name . " arbeitet mit " . $this->material .".<br>";
	  }
		
		
	}
	
	$artist = new Artist ("Rembrand");
	$painter = new Painter ( "Klee", "Leinwand");
	
	echo $artist->getName();
	echo $artist->lob();
	echo $painter->getName();
	echo $painter->lob();
	echo $painter->worksWith();
?>	
</body>
</html>