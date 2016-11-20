<?php
try{
	require_once 'includes/connect.php';
}catch (Exception $e){
	$error = $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8" >
	</head>
	<body>
		<h1>Verbindung mit MySQLi</h1>
	<?php
			if (isset ($error)) {
				echo "<p> $error</p>";
			}else{
				echo "<p>Die Verbindung funktioniert!</p>";
			}
	  $db->close();
	  // MySQL-Befehl der Variablen $sql zuweisen
	  $sql = "
    CREATE TABLE `test1 (

    `Name` VARCHAR( 150 ) NOT NULL ,
    `Mail` VARCHAR( 150 ) NULL) ENGINE = MYISAM ;";
 
// MySQL-Anweisung ausführen lassen
$db_erg = mysqli_query($db_link, $sql) 
  or die("Anfrage fehlgeschlagen: " . mysqli_error());

    ";
    

$sql = "
  INSERT INTO `test1`
  ( 
'Name' , 'Mail'
  ) 
  VALUES
  (
'Dennis' , 'Dennis@email.de'
  );
";
$db_erg = mysqli_query($db_link, $sql) 
   or die("Anfrage fehlgeschlagen: " . mysqli_error());

    
	 ?>	
	</body>
</html>