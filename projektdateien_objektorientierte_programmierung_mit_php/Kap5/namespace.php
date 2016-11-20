<?php
namespace Namensraum\Subnamensraum\Tieferraum;

class EinBeispiel{
	//Hier steht Wichtiges
}


namespace Test;

class Test extends Namensraum\Subnamensraum\Tieferraum\EinBeispiel{
	//auch Hier steht Wichtiges
}
 
 /*
  * Oder aber ich verwende das Schlüsselwort use und mache mir
  * so das Leben leichter
  */
  
  use Namensraum\Subnamensraum\Tieferraum\EinBeispiel as MeinBeispiel;
  $diesesBeispiel = new MeinBeispiel;
 ?>