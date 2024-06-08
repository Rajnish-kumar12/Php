<?php
$array = [
    "Rajnish" => ["math" => 87, "physics" => 65, "chemistry" => 990],
    "Manish" => ["math" => 77, "physics" => 65, "chemistry" => 890],
    "Rahul" => ["math" => 97, "physics" => 85, "chemistry" => 110],
];
echo "<pre>";
print_r($array);
echo "<pre>";
?>

<?php
$array = [
    "Rajnish" => ["math" => 87, "physics" => 65, "chemistry" => 990],
    "Manish" => ["math" => 77, "physics" => 65, "chemistry" => 890],
    "Rahul" => ["math" => 97, "physics" => 85, "chemistry" => 110],
];
echo "<table border='1'>";
foreach ($array as $name) {
    echo "<tr>";
    foreach ($name as $value) {
        echo "<td>";
        echo $value . " ";
        echo "</td>";
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";
?>

<?php
$array = [
    "Rajnish" => ["math" => 87, "physics" => 65, "chemistry" => 990],
    "Manish" => ["math" => 77, "physics" => 65, "chemistry" => 890],
    "Rahul" => ["math" => 97, "physics" => 85, "chemistry" => 110],
];

echo "<table border='1'>";
echo "<tr><th>Name</th><th>Math</th><th>Physics</th><th>Chemistry</th></tr>";
foreach ($array as $name => $subjects) {
    echo "<tr>";
    echo "<td>$name</td>";
    foreach ($subjects as $subject => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
