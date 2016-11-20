<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php
class MyException extends Exception
{
	public function __construct($message, $code = 0)
	{
		//Hier stehen wichtige Anweisungen und Funktionalitäten
		
		//den constructor der Elternklasse nicht vergessen...
		parent::__construct($message, $code);
	}
	public function __toString()
	{
		return "[" .$this->getCode(). "]" .$this->getMessage();
	}
	
		
	
}
	try{
	echo "Eigentlich läuft alles gut! <br>";
	throw new MyException("Hier ist ein Fehler!<br>");
	//ein Division durch 0
	$zahlA = 15;
	$zahlB = 0;
	$zahlC = $zahlA / $zahlB;
	
	echo "Das Ergebnis der Division zahlA / zahlB ist $zahlC !<br>";
	}
	catch (MyException $e)
	{
		echo $e->getMessage();
	}
	
	
	//noch ein Codeblock
	
	echo "Ich bin ein bedeutungsloser Satz<br>";
?>

</body>
</html>