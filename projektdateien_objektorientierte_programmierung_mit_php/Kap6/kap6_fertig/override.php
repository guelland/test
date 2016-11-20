<?php
/*
 * Ein ganz normale Klasse, die Werte ausgibt
 */
class Eltern
{
	const IMMER = 'mein Wert besteht';	
	protected $classType;
	protected $myArg = 'Ich bin ein Elternteil';
	
	public function __construct($value){
		$this->classType = $value;
	}
	public function returnProp($propName) {
		if( !empty( $this->$propName)){
			return $this->$propName . '<br><br>';
			
		}else{
			return 'Argument nicht gefunden' . '<br>';
			
		}
	}
	public function getImmer(){
		return self::IMMER;
	}
	
}

$obj = new Eltern('Ursprung');
echo '<h3>' . $obj -> returnProp('classType') . '</h3>';
echo $obj -> returnProp('myArg');
echo $obj -> getImmer();
echo "<hr>";

/*
 * Hier wird die Klasse Erweitert und ein Eigenschaft wird 
 * überschrieben
 */

class ExtName extends Eltern{
	const IMMER = 'Ich habe meinen Wert überschrieben!';
	public $myArg = "Ich habe meinen Elternwert überschrieben!";
	public function getImmer(){
		return self::IMMER;
	}
	
}
$obj = new ExtName('Erweitert');
echo '<h3>' . $obj -> returnProp('classType') . '</h3>';
echo $obj -> returnProp('myArg');
echo $obj -> getImmer();
echo "<hr>";












?>