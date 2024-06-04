<!-- pass by value -->
<?php
function testing($string)
{
    $string .= "and something extra";
}
$str = "This is a str";
testing($str);
echo $str;  //output==This is a str.
?>
<!-- Note:Here $string and $str are treated as individual it doesnot change the $str variable. -->
<!-- pass by reference -->
<?php
function testingRef(&$string) // it takes address of the $string variable 
{
    $string .= "and something extra"; //so it changes the str variable 
}
$str = "This is a str";
testingRef($str);
echo $str;  //output
?>
<!-- we can use reference variable when we have to change the value of argument that pass to the function -->