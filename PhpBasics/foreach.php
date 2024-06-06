<!-- This loop basically use for iterating the array of indexed array or associated array -->
<!-- Below foreach for indexed array -->
<?php
$x = [10, 20, 30, 40,];
foreach ($x as $value) {
    echo $value . "<br>"; // this gives the value of the array.
}
?>
<?php
$x = [10, 20, 30, 40,];
foreach ($x as $key => $value) {
    echo $key . "=" . $value . "<br>"; // this gives the index and value of the array.
}
?>



<!-- Below foreach for associative array -->
<?php
$age = ["Rajnish" => 10, "Aman" => 20, "Vp" => 30];
foreach ($age as $value) {
    echo $value . "<br>";
}
?>
<?php
$age = ["Rajnish" => 10, "Aman" => 20, "Vp" => 30];
foreach ($age as $key => $value) {
    echo $key . "=" . $value . "<br>";
}
?>