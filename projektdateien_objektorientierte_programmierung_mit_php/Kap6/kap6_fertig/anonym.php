<?php
//Früher - vor PHP7

class Argument
{
	public function log($msg)
	 {
	 	echo $msg;
	 }
}

$arg =new Argument;
echo $arg->log('hallo')."<br>";

//ab PHP7 und danach

	$object = new class ('hallo')
	{
		public $property;
		public function __construct($hallo){
			echo $this->property = $hallo;
		}
	};
?>