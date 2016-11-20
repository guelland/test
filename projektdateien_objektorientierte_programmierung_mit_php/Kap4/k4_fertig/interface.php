<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php	
  interface room
  {
  	function chair();
	function table();
  }

	class Artist implements room{
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
		function chair(){
			echo "Er sitzt auf dem Sofa <br>";
		}
		function table(){
			echo $this->name . " sitzt bei Tisch. <br>";
		}
		
	}
	
	class  Painter extends Artist {
		
		public function getName()
		{
			return "Mein name ist " .$this->name ."<br>";
		}
	  
		
		
	}
	
	$artist = new Artist ("Rembrand");
	$painter = new Painter ("Klee");
	$artist->chair();
	$artist->table();
	$painter->table();
	
	
	

?>	
</body>
</html>