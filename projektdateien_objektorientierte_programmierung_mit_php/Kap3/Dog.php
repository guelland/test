<?php
	
	/**
	 * Eine Klasse, die unterschiedliche Hunde verwaltet.
	 */
	class Dog{
		//Hunderasse
		public $family;
		//Hundenamen
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
	
				 
	}	
?>