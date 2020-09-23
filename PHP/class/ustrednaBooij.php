
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
     * @return int
     */
    public function getNapetiBooij() : int{
      return $this->napetiBooij;
  }
  
/**
 * fuknce ktera nastavi hodnotu atributu
 * @param int $napetiBooij
 */
   public function setNapetiBooij(int $napetiBooij)  {
      $this->napetiBooij = $napetiBooij;
  }
}