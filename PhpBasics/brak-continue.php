<!-- break==To break the loop and stop the iteration of the loop -->
<!-- continue==to ignore the iteration of the loop where continue statement match and start to next iteration -->
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 3) {
        echo "i am out of the loop when i = $i";
        break;
    }
}
?>
<?= "<br>" ?>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i === 3) {
        echo "i am ignore the " . $i . " iteration";
        continue;
    }
}
