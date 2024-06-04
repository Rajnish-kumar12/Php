<!-- function calling itself is called recursive function -->
<?php
function displayNumber($number)
{
    if ($number <= 5) {
        echo $number;
        displayNumber($number + 1);  //here function called recursively
    };
}
displayNumber(1);
?>

<!-- Recursive function for factorial number -->
<!-- below is basic factorial code -->
<?php
function fact($n)
{
    $result = 1;
    for ($i = $n; $i > 0; $i--) {
        $result = $result * $i;
    }
    return $result;
};
$x = fact(5);
echo $x;
?>
<!-- now we write using recursive concept -->
<?php
function factRecursive($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factRecursive($n - 1);
    }
}

$x = factRecursive(5);
echo $x;
?>