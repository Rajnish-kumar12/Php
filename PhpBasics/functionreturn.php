<!-- to use the value of function at any other place then use return  -->
<?php
function sum($x, $y)
{
    return $x + $y;
}
$z = sum(3, 4);  //here you see we can take function sum value in variable z and we can use now z variable anywhere.
echo $z;
?>

<?php
function sumAvg($p, $q, $r)
{
    return $p + $q + $r;
}
function avg($t)
{
    return $t / 3;
}
$t = sumAvg(3, 3, 3);
echo avg($t);
?>