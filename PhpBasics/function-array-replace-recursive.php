<?php
$a = ['orange', 'banana', 'apple', 'grapes'];
$b = ['carrot', 'peas'];
$c = array_replace($a, $b);  //first parameter is which array value we want to replace.
echo "<pre>";               //second parameter is to which array value we want to replace.
print_r($c);
echo "</pre>";
$d = array_replace($b, $a); //here it is not replace beacause $a array index are not present in $b array
echo "<pre>";
print_r($d);
echo "</pre>";
?>

<?php
$a = ['orange', 'banana', 'apple', 1 => 'grapes'];
$b = ['carrot', 'peas'];
$c = array_replace($a, $b);
echo "<pre>";
print_r($c);
echo "</pre>";
// grapes also replace by 1 indx of array b
?>

<?php
$fruit = ['orange', 'banana', 'apple', 'grapes'];
$veggie = ['carrot', 'pea'];
$color = ['red', 'green', 'blue'];
$newArray = array_replace($fruit, $veggie, $color);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

<!-- Below example of associative array -->
<?php
$fruit = ['orange', 'banana', 'a' => 'apple', 'grapes'];
$veggie = ['a' => 'carrot', 1 => 'pea'];
$newArray = array_replace($fruit, $veggie);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
<?php
$a = [1, 2, 3, 4];
$b = [5, 6];
$newArray = array_replace($b, $a);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
<?php
$a = [1, 2, 3, 4];
$b = [4 => 5, 5 => 6];
$newArray = array_replace($a, $b);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

<!-- it is based on index if index match from both array then it replace the value otherwise not -->

<!-- array_replace_recursive -->

<?php
$array1 = [["red"], ["green", "pink"]];
$array2 = [["yellow"], ["black"]];
$array3 = array_replace_recursive($array1, $array2);
echo "<pre>";
print_r($array3);
echo "</pre>";
?>

<!-- Note it is simply based on key or index if index or key of both array match then particular index or key value get replaced otherwise not -->