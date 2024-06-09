<!-- count -->
<?php
$x = [1, 2, 3, 4, 5, 6, 6];
echo count($x);  //it returns the count of the array
?>

<?php
$x = ["age1" => 20, "age2" => 30, "age3" => 40];
echo count($x);
?>

<!-- sizeof -->

<?php
$x = [1, 2, 3, 4, 5, 5];
echo sizeof($x);  //it also returns the count of the array
?>

<?php
$x = ["age1" => 20, "age2" => 30, "age3" => 40];
echo sizeof($x);
?>

<!-- Note:: count() is more faster than sizeof -->

<!-- for multidimensional array -->

<?php
$array = [[1, 2, 3, 4], [5, 6, 7, 8], [10, 11, 12, 13]];
echo count($array);  //it give the only outer array count not the value count.
echo count($array, 1); //it give count of all row + count of all column.
echo sizeof($array, 1); //it give count of all row + count of all column.
echo count($array[0]); // it give the count of value of row array which is on 0 position.
?>

<!-- array_count_values() == it returns the array in which they give the which value are present in arraya nd how many times it is present-->
<!-- array_count_values is only of single dimensional array -->
<?php
$array = [1, 2, 3, 4, 5];
$x = array_count_values($array);
echo "<pre>";
print_r($x);
echo "</pre>";
?>