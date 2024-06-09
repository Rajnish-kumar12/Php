<!-- array_pop() == remove last element from the array -->
<?php
$array = [1, 2, 3, 4, 5];
array_pop($array);
echo "<pre>";
print_r($array);
echo "</pre>";
?>

<!-- array_push() == add element at the last of the array -->

<?php
$array = [1, 2, 3, 4, 5];
array_push($array, 6);
echo "<pre>";
print_r($array);
echo "</pre>";
?>