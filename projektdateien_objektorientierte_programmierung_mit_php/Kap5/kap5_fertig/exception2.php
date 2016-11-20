<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php
	try{
	echo "Eigentlich läuft alles gut! <br>";
	throw new Exception("Noch ein Fehler!<br>");
	//ein Division durch 0
	$zahlA = 15;
	$zahlB = 0;
	$zahlC = $zahlA / $zahlB;
	
	echo "Das Ergebnis der Division zahlA / zahlB ist $zahlC !<br>";
	}
	catch (Exception $ausnahme){
		
		echo "Hier ist die Fehlermeldung<br>";
	}
	
	//noch ein Codeblock
	
	echo "Ich bin ein bedeutungsloser Satz<br>";
?>

</body>
</html>