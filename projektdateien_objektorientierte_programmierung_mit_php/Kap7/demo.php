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
	 ?>	
	</body>
</html>