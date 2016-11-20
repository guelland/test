<?php
	
	/**
	 * Eine Klasse, die unterschiedliche Hunde verwaltet.
	 */
	class Dog{
		//Hundegössen
		const SIZE_BIG = 1;
		const SIZE_MEDIUM =2;
		const SIZE_SMALL = 3;
		
		static public $size=array(
		Dog::SIZE_BIG =>'big',
		Dog::SIZE_MEDIUM =>'medium',
		Dog::SIZE_SMALL =>'small',
		);
		
		//Hunderasse
		public $family;
		//Hundenamen
		static $dogName = "Bello";
		public $dogName_1;
		public $dogName_2;
		//Hundealter
		protected $age = 1;
		//Besitzer
		private $ownerID;
		private $ownerFirstName;
		private $ownerSurName;
	
	/**	
	 * Ausgabe in HTML
	 */	
	function showMe(){
		$out = '';
		$out .= $this->dogName_1;
		if($this->dogName_2){
			$out .= ' '.$this->dogName_2;
		}
		$out .= '<br>';
		$out .= 'ist ein '.$this->family;
		return $out;
	}
	static public function helloWorld(){
		return "Hello world from ". self::$dogName;
	}
	
				 
	}	
?>