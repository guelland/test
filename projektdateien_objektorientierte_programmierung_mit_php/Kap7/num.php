<?php
try {
	require_once 'includes/connect.php';
	mysqli_select_db($db, "oopgb");
} catch (Exception $e) {
	$error = $e -> getMessage();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8" >
		<link href="css/grund.css" rel="stylesheet" type="text/css">
		<title>Einträge</title>
	</head>
	<body>
		<h1>Die Einträge</h1>
		<?php
if (isset ($error)) {
echo "<p> $error</p>";
}else{
echo "<p>Die Verbindung funktioniert!</p>";
}
$sql = "SELECT name, mail FROM person";
$res = mysqli_query($db, $sql);
$num = mysqli_num_rows($res);
if($num>0){
	echo "Ergebnis:". $num . "Datensätze. <br>";
} else{
	echo "Kein Ergebnis";
}
	

?>
<!--<table>
    <tr>
        <th>Name</th>
        <th>Mail</th>
       
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>    
</table>-->


	</body>
</html>