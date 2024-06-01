<?php
$percentage = 56;
if ($percentage >= 80 && $percentage <= 100) {
    echo "merit";
} elseif ($percentage >= 60 && $percentage < 80) {
    echo "Ist division";
} elseif ($percentage >= 45 && $percentage < 60) {
    echo "second division";
} elseif ($percentage >= 33 && $percentage < 45) {
    echo "third division";
} else {
    echo "fail";
}
?>

<!-- or using another way of writing if -->

<?php
$percentage = 56;
if ($percentage >= 80 && $percentage <= 100) :
    echo "merit";
elseif ($percentage >= 60 && $percentage < 80) :
    echo "Ist division";
elseif ($percentage >= 45 && $percentage < 60) :
    echo "second division";
elseif ($percentage >= 33 && $percentage < 45) :
    echo "third division";
else : echo "fail";
endif;
