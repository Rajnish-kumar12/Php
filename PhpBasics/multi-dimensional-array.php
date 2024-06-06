<?php
$array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
echo "<pre>";
print_r($array);
echo "<pre>";
?>
<!-- for loop to iterate the multidimensional array -->
<?php
$array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
?>
<!-- using foreach -->
<?php
$array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
foreach ($array as $value) {
    foreach ($value as $val) {
        echo $val;
    }
}
?>