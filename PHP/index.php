<?php

declare (strict_types=1);



require "class/NumbersJeffreyBooij.php";


$float=100.2561;

$float2=5.6148;

$floatA=[10,25.3,60,4];

$decimals = 2;

var_dump(NumbersJeffreyBooij::roundJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::ceilJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::floorJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::sqrtJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::powJeffreyBooij($float, $float2));

var_dump(NumbersJeffreyBooij::sinJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::cosJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::tanJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::asinJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::acosJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::atanJeffreyBooij($float));

var_dump(NumbersJeffreyBooij::fmodJeffreyBooij($float, $float2));

var_dump(NumbersJeffreyBooij::maxJeffreyBooij($floatA) );

var_dump(NumbersJeffreyBooij::minJeffreyBooij($floatA) );

var_dump(NumbersJeffreyBooij::absJeffreyBooij($float) );

var_dump(NumbersJeffreyBooij::odecitaniJeffreyBooij($float, $float2) );

var_dump(NumbersJeffreyBooij::scitaniJeffreyBooij($float, $float2) );

var_dump(NumbersJeffreyBooij::deleniJeffreyBooij($float, $float2) );

var_dump(NumbersJeffreyBooij::nasobeniJeffreyBooij($float, $float2) );

var_dump(NumbersJeffreyBooij::number_formatJeffreyBooij($float, $decimals) );

