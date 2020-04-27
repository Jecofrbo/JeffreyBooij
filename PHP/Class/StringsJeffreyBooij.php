<?php

/**
 * Class for work with strings 
 * @author Jecofrbo
 */
class StringsJeffreyBooij {
    
    
    
public static function substrJeffreyBooij(string $string) : string{

return $data= substr($string, 4,4) ;    
    
}

public static function substr_replaceJeffreyBooij(string $string) : string{
    
    return $data= substr_replace($string,"whatever", 0, 8) ;
    
}

public static function strtrJeffreyBooij(string $string) : string{
    
    return  $data= strtr($string, "c","d");
    
}

public static function strtoupperJeffreyBooij(string $string) : string{
    
    return  $data= strtoupper($string);
    
}

public static function strtolowerJeffreyBooij(string $string) : string{
    
    return $data= strtolower($string)  ;
    
}

public static function strrposJeffreyBooij(string $string) : int{
    
    return $data= strrpos($string, "s")  ;

}

public static function strriposJeffreyBooij(string $string) : int{
    
    return  $data= strripos($string, "s");
    
}

public static function strposJeffreyBooij(string $string) : string{
    
    return $data= strpos($string, "s")  ;
    
}

public static function strlenJeffreyBooij(string $string) : string{
    
    return $data= strlen($string)  ;
    
}

public static function strchrJeffreyBooij(string $string) : string{
    
    return $data= strchr($string, "S")  ;
    
}

public static function str_replaceJeffreyBooij(string $string) : string{
    
    return  $data= str_replace($string, "Suck", "ChokeOnmyPP");
    
}

public static function md5JeffreyBooij(string $string) : string{
    
    return $data= md5($string) ;
    
}

public static function implodeJeffreyBooij(string $string) : string{
    
return $data= implode($string, $data=["Fucking","Now"])  ;
    
}

public static function explodeJeffreyBooij(string $string) : array{
    
return  $data= explode("My",$string);
    
}

public static function addcslashesJeffreyBooij(string $string) : string{
    
return $data= addcslashes($string, "M") ;
    
}

public static function addslashesJeffreyBooij(string $string) : string{
    
    return $data= addslashes($string) ;
    
}

public static function trimJeffreyBooij(string $string) : string{
    
    return trim($string) ;
    
}

public static function ucfirstJeffreyBooij(string $string) : string{
    
    return $data= ucfirst($string)  ;
    
}

public static function ucwordsJeffreyBooij(string $string) : string{
 
    return  $data = ucwords($string);
}

}