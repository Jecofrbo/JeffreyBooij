<?php
require 'class/User.php';



$ryan = 2;
$gump = 3;

/*
 * instance tridy user
 */
$user = new user;


/*
 * nastaveni private promenych
 */
$user->setRyanJeffreyBooij($ryan);
$user->setGumpJeffreyBooij($gump);

/*
 * vypsani public promenych
 */
echo $user->getPpJeffreyBooij()."<br>"; 
echo $user->getSmallppJeffreyBooij()."<br>";
echo $user->getBigppJeffreyBooij()."<br>";
echo $user->getAverageppJeffreyBooij()."<br>";
echo $user->getMicroppJeffreyBooij()."<br>";
 
/*
 * var dump tridy User
 */
var_dump($user);

































































































































































