<!-- comparison operator are used to compare the variable and what we want to commpare
types of comparison operatorr

== check value is equal or not
=== check value and data type both equal or not
> check value is greater than or not
>= check value is greater than equal or not
!=check value is not equal or not
!==check value with data type that it is equal or not
<> check value is not equal or not
< check value is less than or not
<=check value is less than or equal or not
 -->
<!-- Note:::It return true or false and in php if it return true and you want to print then it will give 1 as a output and if false and you want to print then it print empty string-->

<!-- Below are implementation of == operator-->
<?php
$a = 10;
$b = 20;
$c = $a == $b;
echo $c; //it print empty string because a and b are not equal 
$h = 10;
$i = 10;
echo $h == $i; //it return 1 beacause a and b are equal
?>

<!-- Below are the implementation of === operator -->
<?php
$e = "10"; //string
$f = 10;
echo $e == $f; //it return empty string beacuse it returns false (one 10 is string andd one 10 is integer)
?>

<!-- Below are the implementation of > operator -->
<?php
$j = 10;
$k = 89;
echo $j > $k; //it return empty strings
?>

<!-- Below are the implementation of > operator -->
<?php
$j = 10;
$k = 89;
echo $j < $k; //it return 1
?>

<!-- Below are the implementation of >= operator -->
<?php
$j = 10;
$k = 10;
echo $j >= $k; //it return 1 because it check greater than if not then check equal if one of then in this are correct then it return true.
?>

<!-- Below are the implementation of <= operator -->
<?php
$j = 10;
$k = 10;
echo $j <= $k; //it return 1 because it check less than if not then check equal if one of then in this are correct then it return true.
?>

<!-- Below are the implementation of != operator -->
<?php
$o = 10;
$l = 12;
echo $o != $l; //return 1 beacuse $o not equal to $l
?>

<!-- Note::: it is bad practise to write more than one php block i single file , like i used above(this is for implementation purpose) -->