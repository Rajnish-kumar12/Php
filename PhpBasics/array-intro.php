<!-- Array is a data type which is used to store multiple value in single variable -->
<!-- Also called indexed array beacsue it is index based and starting index of the array is 0 -->
<?php
$x = array('Rajnish', 10, "kumar");
print_r($x);
echo $x[0];  //output is Rajnish.
echo $x[1];  //output is 10.
?>


<!-- we can also create array like below -->

<?php
$y = [1, 2, 3, "four", 5, 6.5, null];
echo "<pre>";
print_r($y);
echo "</pre>";
?>

<!-- we can access the variable using loop also -->
<?php
$z = [1, 2, 3, "four", 5, 6.5, null];
echo "<ul>";
for ($i = 0; $i <= sizeof($z) - 1; $i++) {
    echo "<li>" . $z[$i] . "</li>";
}
echo "</ul>";
?>