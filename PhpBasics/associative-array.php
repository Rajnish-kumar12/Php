<!-- it store multiple value like key value pair this is not indexed based array -->
<?php
$x = array("age1" => 10, "age2" => 20, "age3" => 30);
print_r($x);
?>

<?php
$x = array(0 => 10, 1 => 20, 2 => 30);
print_r($x);
?>

<!-- another way to write associative array -->
<?php
$x = ["age1" => 10, "age2" => 20, "age3" => 30];
print_r($x);
// echo $x; we cannot print array using echo statement
?>