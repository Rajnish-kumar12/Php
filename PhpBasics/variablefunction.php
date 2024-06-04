<!-- assign function into the variable -->
<!-- type1 -->
<?php
function Hello($name)
{
    echo "Hello " . $name;
};
$x = "Hello";  //assign the function to the variable and the variable function.
$x("Rajnish");
?>

<!-- type 2(Also called anonymous function {Anonymous function is the function whose name are not declared at the time of function declaration}) -->
<?php
$say = function ($name) {
    echo "Hello" . $name;
};
$say("kumar");
?>