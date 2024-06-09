<!-- array_merge() == used to merge the arrays -->

<?php
$name = ["Rajnish", "manish"];
$name1 = ["Rahul", "aman"];
$resultAarray = array_merge($name, $name1);
echo "<pre>";
print_r($resultAarray);
echo "</pre>";
?>

<?php
$x = ["age1" => 40, "age2" => 30];
$y = ["age3" => 50, "age4" => 80];
$resultAarray = array_merge($x, $y);
echo "<pre>";
print_r($resultAarray);
echo "</pre>";
?>

<!-- Note :: we can merge associative array and index array -->
<!-- Note :: + operator is also used to merge two array-->

<?php
$x = ["age1" => 40, "age2" => 30];
$y = ["age1" => 50, "age4" => 80];
$resultAarray = array_merge($x, $y);  //here index 1 value of array 1 is replace  by index 1 value of array 2.
echo "<pre>";
print_r($resultAarray);
echo "</pre>";
?>

<!-- array_merge_recursive() == also used to merge array but one difference whenever arrays got same index then at that time it doesnot replace the value it create one array with the name of that index in case of associative array-->

<?php
$x = ["one" => 1, "two" => 2, "three" => 3, "four" => 4];
$y = ["one" => 5, 6];
$z = array_merge_recursive($x, $y);
echo "<pre>";
print_r($z);
echo "</pre>";
?>



<!-- array_combine() == It is used to combine two array but no of value of both array should be same and in this method after combining first array value become the index and second array value become the value of that index and it is only used for indexed array-->

<?php
$x = ["one", "two", "three"];
$y = [1, 2, 3];
$z = array_combine($x, $y);
echo "<pre>";
print_r($z);
echo "</pre>";
?>