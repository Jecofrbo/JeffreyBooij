
<?php

/**
 * abstraktni trida ktera se neda instancovat a implementuje interface
 */

abstract class ustrednyBooij implements iustrednyBooij{
 /**
  *atribut ktery je pristupny jen ve tride a tridach dedicich
  * @var type 
  */
    protected $napetiBooij; 
  
  /**
   *funkce pro ziskani hodnoty atributu implementovana z interfacu
   * @return type
   */
  
    function getNapetiBooij() {
      return $this->napetiBooij;
  }

  /**
   * fuknce ktera nastavi hodnotu atributu implementovana z interfacu
   * @param type $napetiBooij
   */
   
  function setNapetiBooij($napetiBooij) {
      $this->napetiBooij = $napetiBooij;
  }




}

