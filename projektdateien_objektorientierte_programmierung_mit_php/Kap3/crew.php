<?php
  class Crew{
  	private $captain;
	private $firstOfficer;
	private $navigator;
private $navigator1;
	
	function __construct($cap, $first, $nav)
	{
		$this->captain = $cap;
		$this->firstOfficer = $first;
		$this->navigator = $nav;
	}
	function __toString()
	{
		return "$this->captain als Kapitän <br> " 
		. "$this->firstOfficer als Erster Offizier <br>"
		. "$this->navigator als Navigator";
	}
  }


?>