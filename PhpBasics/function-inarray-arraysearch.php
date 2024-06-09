<!-- in_array == It is a function which search the element whoch is present in array or not and return boolean value( 0 or 1)
                 It takes two parameter first ( the element which is to be searched and second array) -->

<?php
$array = [1, 2, 3, 4, 5, 6];
echo in_array(4, $array); //it return 1 because 4 is present at index 3.
?>

<?php
$array = ['name1' => "Rajnish", 'name2' => "Rahul", 'name3' => "Manish"];
if (in_array("Rajnish", $array)) {
    echo "rajnish is present";
} else {
    echo "rajnish is not present";
}
?>

<?php
$array = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];
// task is to find element 5
foreach ($array as $row) {
    if (in_array(5, $row)) {
        echo "find sucessfully";
        break;
    }
}
?>

<?php
$array = [1, 2, 3, 4, '5'];
if (in_array(5, $array)) {
    echo "find sucessfully";
} else {
    echo "can't find";
}

// note in this case 5 is string and we find 5 as integer then also it able to find but it is not good practise so for this in in_array function pass 3rd variable true or false if true then it check the value and data type also same concept for below array_search() also.
?>

<?php
$array = [1, 2, 3, 4, '5'];
if (in_array(5, $array, true)) {
    echo "find sucessfully";
} else {
    echo "can't find";
}

// in this case it return can't find because we use third variable and it check value as well as data type
?>

<!-- array_search() It is a function which search the element and return the index of  the element it also take two parameter first is element to be searched and second is array -->

<?php
$array = [1, 2, 3, 4, 5, 6];
echo array_search(4, $array);  //it return the index of element which is 3rd index.
?>



<!-- Note :: The main difference between in_array() and array_search() in_array() return the boolean and array_search() return index-->