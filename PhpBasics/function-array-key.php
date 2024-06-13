<!-- There are five type of array key function to work with array key below are following:
-->
<!--  array_keys() == return keys of all type of array
                   == It returns new array of keys       
-->
<?php
$color = ['red', 'blue', 'green', 'yellow'];
$key = array_keys($color);
echo "<pre>";
print_r($key);
echo "</pre>";
?>
<?php
$color = ['first' => 'red', 'second' => 'blue', 'third' => 'green', 'fourth' => 'yellow'];
$key = array_keys($color);
echo "<pre>";
print_r($key);
echo "</pre>";
?>

<?php
$color = [
    ['one', 'two', 'three'],
    ['red', 'blue', 'green']
];
$key = array_keys($color);
echo "<pre>";
print_r($key);
echo "</pre>";
?>

<!-- array_key_first() == it return the first key of the array -->
<?php
$color = ['red', 'blue', 'green', 'yellow'];
$key = array_key_first($color);
echo $key;
?>


<!-- array_key_last() == it return the last key of the array -->
<?php
$color = ['red', 'blue', 'green', 'yellow'];
$key = array_key_last($color);
echo $key;
?>

<!-- array_key_exists() or key_exists() == it check the key exist in array or not , it return 0 or 1 -->
<?php
$color = ['red', 'blue', 'green', 'yellow'];
$key = array_key_exists(1, $color);
echo $key;
?>

<?php
$color = ['color1' => 'red', 'color2' => 'blue', 'color3' => 'green', 'color4' => 'yellow'];
$key = array_key_exists('color1', $color);
if ($key) {
    echo "key value is : " . $color['color1'];
} else {
    echo "There is no key in thie array";
}
?>