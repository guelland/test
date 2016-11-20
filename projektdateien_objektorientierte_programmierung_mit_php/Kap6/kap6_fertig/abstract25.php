<?php

abstract class AbstractFamily
{
	abstract protected function prefixName($name);
}

class Family extends AbstractFamily
{
  // Eine ganz normale Klasse, in der gewisse Aussagen getroffen werden
  
   public function prefixName($name, $seperator= " ") {
      if ($name == "Familienmann") {
          $prefix = "Herr";
      } elseif ($name == "Familienfrau") {
          $prefix = "Frau";
      } else {
          $prefix = "";
      }
      return "{$prefix}". ($seperator)."{$name}";
  }
}

echo "<h3> Eine normale Instanziierung</h3>";

$member = new Family;
echo  $member->prefixName("Familienmann"), "<br>";
echo  $member->prefixName("Familienfrau"), "<br>";

echo "<h3> Eine Erweiterung der Elternklasse</h3>";

class ConcreteChild extends Family
{
	public function kinderkram(){
		return "Ich will auch funktionieren!";
	}
}

$fam = new ConcreteChild;

echo $fam->prefixName("Familienmann"), "<br>";
echo $fam->prefixName("Familienfrau"), "<br>";
echo $fam->kinderkram(), "<br>";



?>

