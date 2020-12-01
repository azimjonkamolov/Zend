<?php
    echo "<h1>Basics</h1>";
    echo "\nConverting Between Data Types";
    echo "<br>";
    $x = 10.88;
    echo (int) $x; // Outputs 10

    echo "<br>";
    echo "<br/>Variables";
    echo "<br>";
    $name = "valid"; // Valid name
    $_name = "valid"; // Valid name
    # $1name = "invalid"; // Invalid name

    echo "<br>";
    echo "<br/>Variable Variables";
    echo "<br>";
    $name = "one";
    $$name = "two";
    echo $one; // Displays 'two'
    $name = "123"; // 123 is your variable name, this would normally be invalid
    $$name = "456"; // Again, you assign a value
    echo "<br>";
    echo ${'123'};
    echo "<br>";
    function myFunc(){
        echo "myFunc!";
    }
    $f = "myFunc";
    $f(); // Will call myFunc();
    echo "<br>";
    echo isset($f);

    echo "<br>";
    echo "<br/>Constants";
    echo "<br>";
    define('EMAIL', 'azimjonkamolov@naver.com'); // Valid name
    echo EMAIL; // Displays 'azimjonkamolov@naver.com'
    define('USE_XML', true);
    if(USE_XML){ // Evaluates to true
        echo "<br/>It is the case";
    }
    define('1CONSTANT', 'some value'); // Invalid name
    # echo 1CONSTANT;

    echo "<br>";
    echo "<br/>Operators";
    echo "<br>";
    $val = 1; // Assign the integer 1 to $val
    echo $val++; // Outputs 1, $val is now equal to 2
    echo ++$val; // Outputs 3, $val is now equal to 3
    echo --$val; // Outputs 2, $val is now equal to 2
    echo $val--; // Outputs 2, $val is now equal to 1
    $test = 'Test';
    echo ++$test; // Outputs Tesu in PHP 7.4

    echo "<br>";
    echo "<br/>The String Concatenation Operator";
    echo "<br>";
    $name = "Azim" . "jon"; // $name now contains the value 'Azimjon'
    $surname = " Kamolov"; // $surname now contains the value ' Kamolov'
    $name .= $surname; // After concatenationg the two variables, we end up with 'Azimjon Kamolov'
    echo $name; // Displays 'Azimjon Kamolov'

    echo "<br>";
    echo "<br/>Bitwise Operators";
    echo "<br>";
    $value = 0;
    echo ~$value; // Will output -1
    $value = 1;
    echo $value << 1; // Outputs 2
    echo $value << 2; // Outputs 4
    $value = 8;
    echo $value >> 1; // Outputs 4
    echo $value >> 2; // Outputs 2
    $value = 1;
    echo $value << 32;
    echo $value * pow(2, 32);

    echo "<br>";
    echo "<br/>Referencing Variables";
    echo "<br>";
    $a = 10;
    $b = $a;
    $b = 20;
    echo $a; // Outputs 10
    $a = 10;
    $b = &$a;
    $b = 20;
    echo $a; // Outputs 20

    echo "<br>";
    echo "<br/>Comparison Operators";
    echo "<br>";
    $left = "ABC";
    $right = "ABD";
    echo (int) ($left > $right);
    $left = "apple"; // a = 97
    $right = "Apple"; // A = 65
    echo (int) ($left > $right);
    
    echo "<br>";
    echo "<br/>Conditional Structures";
    echo "<br>";
    echo 10 == $x ? 'Yes' : 'No';
    $a = 0;
    if ($a) {// Evaluates to false
    } elseif ($a == 0) {// Evaluates to true
    } else {// Will only be executed if no other conditions are met
    }

    echo "<br>";
    echo "<br/>Iterative Constructs";
    echo "<br>";
    $i = 0;
    while ($i < 10) {
        echo $i . PHP_EOL;
        $i++;
    }
    $i = 0;
    do {
        echo $i . PHP_EOL;
        $i++;
    } while ($i < 10);
    for ($i = 0; $i < 10;$i++) {
        echo $i . PHP_EOL;
    }

    // echo "<br>";
    // echo "<br/>Handling Errors";
    // echo "<br>";
    // $oldErrorHandler = '';
    // function myErrorHandler ($errNo, $errStr, $errFile, $errLine, $errContext) {
    //     logToFile("Error $errStr in $errFile at line $errLine");// Call the old error handler
    //     if ($oldErrorHandler) {
    //         $oldErrorHandler ($errNo, $errStr, $errFile, $errLine, $errContext);
    //     }
    // }
    // $oldErrorHandler = set_error_handler ($oldErrorHandler);
     





?>