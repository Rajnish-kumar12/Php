<?php
define('test', 50);
echo test;
/* define(name,value,casesensitive)
--case sensitive default value is false now in above scenariao it is false.*/
// echo Test;here it display error case sensitive value is false and i am try to use TEST

define("tests", 100, true);
echo tests;
echo TESTS;

// define("9test", 98); //we can't do this 

echo test + 20;//we can perform arithmetic on constant variable
