<?php

/**
 *  normalni trida ktera dedi predchozi abstraktni tridu
 */
class ustrednaBooij extends ustrednyBooij{
    /**
     *  konstanta ktera se nastavila a uz se nemeni, pristup k ni je staticky
     */
    const TYPE = 1;

   
    /**
     * funkce pro ziskani hodnoty atributu
     * @return type
     */
    public function getNapetiBooij() {
      return $this->napetiBooij;
  }
  
/**
 * fuknce ktera nastavi hodnotu atributu
 * @param type $napetiBooij
 */
   public function setNapetiBooij($napetiBooij) {
      $this->napetiBooij = $napetiBooij;
  }
}