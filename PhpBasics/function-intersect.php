<!-- use to find the common of value, key, key value in an array -->
<!-- array_intersect() == find the comman value between two or more than two array -->
<?php
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name5' => "Rahul", 'name6' => "Manishi"];
$result = array_intersect($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<!-- array_intersect() == find the comman key between two or more than two array -->
<?php
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name1' => "Rahul", 'name6' => "Manishi"];
$result = array_intersect_key($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<!-- array_intersect_assoc() == find the comman keyad value both between two or more than two array -->
<?php
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name1' => "Rajnish", 'name6' => "Manishi"];
$result = array_intersect_assoc($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<!-- array_intersect_uassoc()or array_uintersect_assoc() == we can add third parameter which is function user defined or php function  -->
<!-- and it is for value matching -->
<?php
function compare($a, $b)
{
    if ($a == $b) {
        return 0;
    } else {
        return ($a > $b) ? 1 : -1;
    }
}
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name1' => "Rajnish", 'name6' => "Manishi"];
$result = array_intersect_uassoc($array1, $array2, 'compare');
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<!-- array_intersect_ukey()or array_uintersect_assoc() == we can add third parameter which is function user defined or php function-->
<!-- and it is for key matching -->
<?php
function compares($a, $b)
{
    if ($a == $b) {
        return 0;
    } else {
        return ($a > $b) ? 1 : -1;
    }
}
$array1 = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
$array2 = ['name4' => "Rajnishi", 'name1' => "Rajnish", 'name6' => "Manishi"];
$result = array_intersect_ukey($array1, $array2, 'compares');
echo "<pre>";
print_r($result);
echo "</pre>";
?>