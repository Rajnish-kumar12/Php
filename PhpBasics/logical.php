<!-- Types of logical operator -->
<!-- 
    && = logical AND operator
    || = logical OR operator
    ! = logical NOT operator
    and = logical AND operator
    or = logical OR operator
    XOR = exclusive or
 -->
<!-- EXAMPLES OF AND OPERATOR -->
<?php
$age = 21;
if ($age >= 18 && $age <= 24) {
    echo "you are elligible";
}
// Note:in the case of and operator both condition should be true then it run the statement under if.
?>
<!-- EXAMPLES OF OR OPERATOR -->
<?php
$age = 25;
if ($age >= 18 && $age <= 24) {
    echo "you are elligible";
}
// Note:in the case of or operator any one condition should be true then it run the statement under if.
?>
<!-- EXAMPLES OF not OPERATOR -->
<?php
$age = 25;
if (!$age == 25) {
    echo "you are elligible";
}
// Note:in the case of not operator if condition is true then if statement run.
?>
<!-- EXAMPLES OF xor OPERATOR -->
<?php
$age = 25;
if ($age >= 25 xor $age <= 20) {
    echo "you are elligible";
}
// Note:in the case of xor operator if both condition is true of both condition is false then it didn't run the statement,must be anyone true for run statment.
?>