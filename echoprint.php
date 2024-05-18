<!-- Echo -->
<!-- Echo is used to print variable or string like -->
<?php
echo "Rajnish";
echo "Rajnish", "kumar"; //here both string are different
echo "Rajnish" . "kumar"; //here both string behaves individually
// we can also write html under php 
echo "Rajnish", "<br>", "Kumar";
?>

<!-- print -->
<!-- print is also use to print variable and string -->
<?php
print "hello";
print "<br>";
// print "Rajnish","kumar";//this is wrong because print takes only one argument
print "Rajnish" . "kumar";
?>

<!-- Note:The main difference between print and echo are print takes only one argument and echo takes miltiple argument and echo is fater than print  -->