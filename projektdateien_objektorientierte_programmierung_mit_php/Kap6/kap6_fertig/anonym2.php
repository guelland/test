<?php
/*
 * Ein ganz normale Klasse, die Werte ausgibt
 */
class HasName
{
	protected $classType;
	protected $myArg = 'Ich bin ein Objekt mit einem Namen';
	
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
	
}

$obj = new HasName('Benannt');
echo '<h3>' . $obj -> returnProp('classType') . '</h3>';
echo $obj -> returnProp('myArg');
echo "<hr>";

/*
 * Hier wird die ganz normale Klasse erweitert und eine Eigenschaft wird überschrieben
 */

class ExtName extends HasName{
	protected $myArg = "Ich bin ein erweitertes Objekt";
}

$obj = new ExtName ('Erweitert');

echo '<h3>' . $obj -> returnProp('classType') . '</h3>';
echo $obj -> returnProp('myArg');
echo "<hr>";
/*
 * Und nun eine anonyme Klasse, die genauso funktioniert wie ihre 
 * Kollegin ExtName
 */

$obj = new class ('Anonym') extends HasName {
	protected $myArg = 'Ich bin ein anonymes Objekt!'.'<br>';
	
};
echo '<h3>' . $obj -> returnProp('classType') . '</h3>';
echo $obj -> returnProp('myArg');








?>