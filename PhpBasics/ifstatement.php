<?php
$x = 10;
if ($x > 5) {
    echo "true"; //this run because condition is true
}

// one more way to write if statement in php is below
?>

<?php
$x = 20;
if ($x > 10) :
    echo "true";
endif;
?>

<?php
$x = 10;
$y = "10";
if ($x === $y) {
    echo "true"; //it gives false beacuse as you know triple equal to operator check datatype as well value so value is equal but data type are not same
}
