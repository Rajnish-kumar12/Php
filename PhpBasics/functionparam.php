<!-- 
    function functionName(param1,param2,....)-- parameter passed in function
    {
        logic
    }
    functionName(arg1,arg2);--argument passed in function at the time of calling.
    note: here arg2 passed to param1 and arg2 passed to param2.
 -->
<?php
function hello($name)
{
    echo "Hello " . $name . "<br>";
}
hello("Rajnish");
hello("Manish");
hello("Rahul");

?>

<?php
function sum($x, $y)
{
    echo $x + $y . "<br>";
}
sum(10, 20);
sum(20, 20);
?>

<?php
function sub($x, $y)
{
    echo $x - $y . "<br>";
}
sub(10, 20);
sub(20, 20);
?>

<!-- default parameter == if we dont pass the parameter at the time of calling the function then it takes the default parameter value -->

<?php
function sumDefault($y, $x = 10)  //default parameter comes after all required parameter
{
    echo $x + $y . "<br>";
}
sumDefault(20);
?>