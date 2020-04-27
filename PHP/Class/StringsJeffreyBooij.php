<?php

/**
 * Class for work with strings 
 * @author Jecofrbo
 */
class StringsJeffreyBooij {
    
    
 /**
  * Returns part of the string dependant on variables
  * @param string $string
  * @return string
  */
public static function substrJeffreyBooij(string $string) : string{

return $data= substr($string, 4,4) ;    
    
}
 /**
  * Replaces a part of a string 
  * @param string $string
  * @return string
  */
public static function substr_replaceJeffreyBooij(string $string) : string{
    
    return $data= substr_replace($string,"whatever", 0, 8) ;
    
}
 /**
  * Replaces Cs with Ds
  * @param string $string
  * @return string
  */
public static function strtrJeffreyBooij(string $string) : string{
    
    return  $data= strtr($string, "c","d");
    
}
 /**
  * Capitalizes all letters
  * @param string $string
  * @return string
  */
public static function strtoupperJeffreyBooij(string $string) : string{
    
    return  $data= strtoupper($string);
    
}
 /**
  * Turns all letters Lowecase
  * @param string $string
  * @return string
  */
public static function strtolowerJeffreyBooij(string $string) : string{
    
    return $data= strtolower($string)  ;
    
}
 /**
  * First position of the letter s 
  * @param string $string
  * @return int
  */
public static function strrposJeffreyBooij(string $string) : int{
    
    return $data= strrpos($string, "s")  ;

}
 /**
  * Last possition of the letter s 
  * @param string $string
  * @return int
  */
public static function strriposJeffreyBooij(string $string) : int{
    
    return  $data= strripos($string, "s");
    
}
 /**
  * First position of the letter s 
  * @param string $string
  * @return string
  */
public static function strposJeffreyBooij(string $string) : string{
    
    return $data= strpos($string, "s")  ;
    
}
 /**
  * Lenght of the string
  * @param string $string
  * @return string
  */
public static function strlenJeffreyBooij(string $string) : string{
    
    return $data= strlen($string)  ;
    
}
 /**
  * Returns string beggining from S
  * @param string $string
  * @return string
  */
public static function strchrJeffreyBooij(string $string) : string{
    
    return $data= strchr($string, "S")  ;
    
}
 /**
  * Replaces Suck with ChokeOnmyPP
  * @param string $string
  * @return string
  */
public static function str_replaceJeffreyBooij(string $string) : string{
    
    return  $data= str_replace($string, "Suck", "ChokeOnmyPP");
    
}
 /**
  * Makes a hash out of the string
  * @param string $string
  * @return string
  */
public static function md5JeffreyBooij(string $string) : string{
    
    return $data= md5($string) ;
    
}
 /**
  * Adds Fucking at the beggining and Now at the end of string
  * @param string $string
  * @return string
  */
public static function implodeJeffreyBooij(string $string) : string{
    
return $data= implode($string, $data=["Fucking","Now"])  ;
    
}
 /**
  * Divides the string into two parts at My
  * @param string $string
  * @return array
  */
public static function explodeJeffreyBooij(string $string) : array{
    
return  $data= explode("My",$string);
    
}
 /**
  * Ads backslashes to the letter M
  * @param string $string
  * @return string
  */
public static function addcslashesJeffreyBooij(string $string) : string{
    
return $data= addcslashes($string, "M") ;
    
}
 /**
  * Adds additional backslash
  * @param string $string
  * @return string
  */
public static function addslashesJeffreyBooij(string $string) : string{
    
    return $data= addslashes($string) ;
    
}
 /**
  * Removes spaces at front and end of string
  * @param string $string
  * @return string
  */
public static function trimJeffreyBooij(string $string) : string{
    
    return trim($string) ;
    
}
 /**
  * Capitalizes first Letter 
  * @param string $string
  * @return string
  */
public static function ucfirstJeffreyBooij(string $string) : string{
    
    return $data= ucfirst($string)  ;
    
}
 /**
  * Capitalizes the first letter of every word
  * @param string $string
  * @return string
  */
public static function ucwordsJeffreyBooij(string $string) : string{
 
    return  $data = ucwords($string);
}

}