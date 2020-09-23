
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
   * @return int
   */
  
    function getNapetiBooij() : int {
      return $this->napetiBooij;
  }

  /**
   * fuknce ktera nastavi hodnotu atributu implementovana z interfacu
   * @param int $napetiBooij
   */
   
  function setNapetiBooij(int $napetiBooij) {
      $this->napetiBooij = $napetiBooij;
  }




}

