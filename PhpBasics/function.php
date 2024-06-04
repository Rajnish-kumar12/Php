<!-- function is used to remove the code redundancy -->
<!-- 
    function printHello() --declaration of the function
    {
    echo "Hello";
    }
    printHello(); --calling of the function
-->
<?php
function printHello()
{
    echo "Hello world for function" . "<br>";
}
function helloRajnish()
{
    echo "Hello Rajnish" . "<br>";
}
printHello();
printHello();
printHello();
printHello();
helloRajnish()
?>

<!-- Note: whenever and whereever you want to print helloWorld just call the function you get the result. -->