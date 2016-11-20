<?php

class CloneTest
{
	public $a;
	private $b;
		
	public function __construct($a,$b)
	{
		$this->a = $a;
		$this->b = $b;
	}	
	public function __clone()
	{
		$this->a = "etwas Neues";
	}
}
$original = new CloneTest("ich bleibe erhalten" , "Kontrollwert");
print "<pre>";
print_r($original);
print "</pre> <hr>";

$kopie = $original;
$c = clone $original;
$kopie->a = "ein anderer Wert";
print "<pre>";
print_r($kopie);
print_r($original);
print_r($c);
print "</pre> <hr>";
?>