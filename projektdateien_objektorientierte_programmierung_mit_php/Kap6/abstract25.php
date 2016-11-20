<?php


class Family 
{
  // Eine ganz normale Klasse, in der gewisse Aussagen getroffen werden
  
   public function prefixName($name) {
      if ($name == "Familienmann") {
          $prefix = "Herr";
      } elseif ($name == "Familienfrau") {
          $prefix = "Frau";
      } else {
          $prefix = "";
      }
      return "{$prefix}"." "."{$name}";
  }
}

echo "<h3> Eine normale Instanziierung</h3>";

$member = new Family;
echo  $member->prefixName("Familienmann"), "<br>";
echo  $member->prefixName("Familienfrau"), "<br>";






?>

