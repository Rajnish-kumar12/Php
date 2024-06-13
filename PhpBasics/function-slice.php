<!-- array slice() == use to retrieve element of the array
                   == Also it returns new array
-->
<?php
$colors = ['red', 'blue', 'green', 'yellow'];
$newArray = array_slice($colors, 1, 2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
<?php
$colors = ['red', 'blue', 'green', 'yellow'];
$newArray = array_slice($colors, 0 - 2, 2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
<?php
$colors = ['red', 'blue', 'green', 'yellow'];
$newArray = array_slice($colors, 1, 3, true); //when we pass fourth parameter true then it return element with actual index in new array.
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

<!-- for associative array -->

<?php
$colors = ['color1' => 'red', 'color2' => 'blue', 'color3' => 'green', 'color4' => 'yellow'];
$newArray = array_slice($colors, 1, 2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>