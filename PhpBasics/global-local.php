<!-- local variable == The variable is only access within its scope where it is declaring -->
<?php
function Test()
{
    $x = "Rajnish";
}
echo $x;  //Warning: Undefined variable $x showing this beacuse the scope of $x is in only inside test function
// 
?>

<!-- Global variable == The variable which is access every where -->
<?php
$x = "Rajnish";
function testGlobal()
{
    global $x;  // we can use global variable inside function by using global keyword.
    echo $x;
}
?>
testGlobal();