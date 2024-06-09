<!-- array_shift() == remove first element from the array -->
<?php
$array = [1, 2, 3, 4, 5];
array_shift($array);
echo "<pre>";
print_r($array);
echo "</pre>";
?>

<!-- array_unshift() == add element at first in the array -->
<?php
$array = [1, 2, 3, 4, 5];
array_unshift($array, 0);
echo "<pre>";
print_r($array);
echo "</pre>";
?>