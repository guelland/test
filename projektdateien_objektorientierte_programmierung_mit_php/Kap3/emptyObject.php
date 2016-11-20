<?php
//Einbinden der Klassen-Datei

require 'Dog.php';

echo "<h1>Instanziieren</h1>";
//die Klasse Dog instanziieren 

$dog = new Dog;



echo "<h2>Ein leeres Objekt</h2>";
//hier passiert nicht viel - es wird nur getestet


echo "<p><pre>" . var_export($dog, TRUE). "</pre></p>";

echo "<h2>Werte wurden eingetragen</h2>";
//Werte zuweisen
$dog->dogName_1 = "Rufus";
$dog->dogName_2 = "Rex";
$dog->family = "Schäferhund";


echo "<p><pre>" . var_export($dog, TRUE). "</pre></p>";


echo "<h2> Und jetzt die geplante Anzeige </h2>";
 //die Methode showMe() wird ausgegeben

echo $dog->showMe();


?>