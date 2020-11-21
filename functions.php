<?php
    // in this example, the script outputs "string"
    function sayHello(string $name){
        echo gettype($name);
    }
    echo "Before strict used: ";
    sayHello(100);
    echo "<br>";
?>
<?php
    // Here however it gives a TypeError
    // declare(strict_types=1); >> must be at the top
    function giveOutput(string $value){
        echo "After strict used: ";
        echo gettype($value);
    }
    giveOutput(100);
    echo "<br>";
?>
<?php
    function myFunc(?MyObject $myObj){
        echo "hello world";
    }
    // this is allowed
    myFunc(null);
    // this produces a fatal error: Too few arguments
    // myFunc();
    echo "<br>";
?>
<?php
    // In the following example, if the used does not supply a message, the function assumes it will be world
    function sayHi($message = 'user'){
        echo "Hello $message";
    }
    // case 1: assumes the message is as given above
    sayHi();
    echo "<br>";
    // case 2: assumes the given message
    sayHi($message = "Azimjon");
    echo "<br>";
?>
