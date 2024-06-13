<!-- these function checks the different betweent two array -->
<!-- array_diff() == it check the different value and return array -->
<?php
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name1' => "Rajnish", 'name6' => "Manishi"];
$result = array_diff($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<!-- array_diff_key() == it check the different key and return array -->
<?php
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name1' => "Rajnish", 'name6' => "Manishi"];
$result = array_diff_key($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<!-- array_diff_assoc() == it check the different key and value both and return array -->
<?php
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name1' => "rajnish", 'name6' => "Manishi"];
$result = array_diff_assoc($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>