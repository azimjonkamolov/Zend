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
?>
