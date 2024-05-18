 <!-- types of arth operator -->
 <!-- 
    + == Addition
    - == substraction
    * == multiplication
    / == division
    ** == exponential (used in power)
    % == modulus(used to find rerminder)
    ++ == increment
    -- == decrement
 -->

 <!-- Note:declare(strict_types=1) is a directive in PHP that enforces strict type checking for function and method arguments and return values within a specific PHP file or code block. When you enable strict type checking, PHP ensures that the data types of function arguments and return values match exactly with the declared types -->

 <?php

    /* declare(strict_types=1); this statement not work now beacuse it should be very first line on php script but due to above comment it doesn't work but maksure when you use this add in the first line of script*/
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo $c . "<br>";
    $d = $a - $b;
    echo $d . "<br>";
    $e = $a * $b;
    echo $e . "<br>";
    $f = $a / $b;
    echo $f . "<br>";
    $g = $b % $a;
    echo $g . "<br>";
    $h = $a ** 2;
    echo $h . "<br>";

    // increment and decrement operator
    // a)post increment == $a++(first return value of a and then increase to one)
    // a)pre increment == ++$a(first value increase to one and then return)
    // a)post decrement == $a--(first return value of a and then decrease to one)
    // a)pre ideccrement == --$a(first value decrease to one and then return)

    $m = 10;
    echo $m++ . "<br>";
    echo ++$m . "<br>";
    echo $m-- . "<br>";
    echo --$m . "<br>";
