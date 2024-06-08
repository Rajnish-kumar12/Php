<!-- Basically used in multidimensional array to iterate the loop no need to write nested loop if using list() -->
<?php
$array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
echo "Iterate array using raw for loop";
echo "<table border='1'>";
for ($i = 0; $i < sizeof($array); $i++) {
    echo "<tr>";
    for ($j = 0; $j < sizeof($array[$i]); $j++) {
        echo "<td>";
        echo $array[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "Iterate array using foreach without key";
echo "<table border='1'>";
foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "Iterate array using foreach with key" . "<br>";
foreach ($array as $rowKey => $row) {
    echo $rowKey . "=>";
    foreach ($row as $colKey => $value) {
        echo $colKey . "=>" . $value;
    }
    echo "<br>";
}

echo "Now we can Iterate array using list method" . "<br>";
foreach ($array as list($a, $b, $c, $d)) {
    echo $a, $b, $c, $d;
    echo "<br>";
};
?>