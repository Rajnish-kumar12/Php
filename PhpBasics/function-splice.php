<!-- array_splice() == use to remove element from the array
                    == use to replace array with the element of the new array 
                    == use to adjust second array in first array 
                    == it doenot return new array it works on exixting array
-->

<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
array_splice($color, 2);  //it delete all the element from 2 to last index
echo "<pre>";
print_r($color);
echo "</pre>";
?>
<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
array_splice($color, 2, 2);  //it delete all the element from 2 index and total takes element 2
echo "<pre>";
print_r($color);
echo "</pre>";
?>
<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
array_splice($color, -1); // it remove last element
echo "<pre>";
print_r($color);
echo "</pre>";
?>
<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
array_splice($color, 0, 1);  //it delete the element at 0 index and total takes element 1
echo "<pre>";
print_r($color);
echo "</pre>";
?>

<!-- check below how to adjust new array or add new array  -->
<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
$fruit = ['mango', 'guavava'];
array_splice($color, 1, 2, $fruit);
echo "<pre>";
print_r($color);
echo "</pre>";
?>

<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
$fruit = ['mango', 'guavava'];
array_splice($color, 1, 3, $fruit);
echo "<pre>";
print_r($color);
echo "</pre>";
?>

<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
$fruit = ['mango', 'guavava'];
array_splice($color, 1, 0, $fruit);
echo "<pre>";
print_r($color);
echo "</pre>";
?>

<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
$fruit = ['mango', 'guavava'];
array_splice($color, 0, 0, $fruit);
echo "<pre>";
print_r($color);
echo "</pre>";
?>

<?php
$color = ['red', 'green', 'blue', 'yellow', 'brown'];
$fruit = ['mango', 'guavava'];
array_splice($color, count($color), 0, $fruit);
echo "<pre>";
print_r($color);
echo "</pre>";
?>