<!-- it is conditional operator -->
<?php
$x = 15;
if ($x > 30) {
    echo "x is greater than 30";
} else {
    echo "x is not greater than 30";
}
?>
<?php
$x = 100;
if ($x === 100) {
    echo "x is same";
} else {
    echo "x is not same";
}
?>
<?php
$name = "Rajnish";
$gender = "male";
if ($gender === "male") {
    echo "Mr" . $name . "is male";
} else {
    echo "Mrs" . $name . "is female";
}
?>