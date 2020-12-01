<?php
    echo "<h1>Functions</h1>";
    echo "\nBasic Syntax";
    echo "<br>";
    function hello(){
        echo "Hello World";
    }
    hello(); // Displays "Hello World!";

    echo "<br>";
    echo "<br>Returning Values";
    echo "<br>";
    function helloReturn(){
        return "Hello World"; // No output is shown
    }
    $text = helloReturn();
    echo $text;

    echo "<br>";
    function helloThere($who){
        echo "Hello $who";
        if($who == "World"){
            return; // Nothing else in the funciton will be processed
        }
        
        echo ", how are you?";
    }
    helloThere("World"); // Displays "Hello World"
    echo "<br>";
    helloThere("Reader"); // Displays "Hello Reader, how are you?"

    echo "<br>";
    echo "<br>Variable Scope";
    echo "<br>";
    $a = "Hello World";
    function helloMe(){
        $a = "Hello Reader";
        $b = "How are you?";
    }

    helloMe();
    echo $a; // Will output Hello World
    echo $b; // Will emit a warning

    $a = "Hello";
    $b = "World";
    function helloTest(){
        global $a, $b;
        echo "$a $b";
    }
    helloTest(); // Displays "Hello World"

    $a = "Hello";
    $b = "World";
    function helloOut()
    {
    echo $GLOBALS['a'] .' '. $GLOBALS['b'];
    }
    helloOut(); // Displays "Hello World"

    echo "<br>";
    echo "<br>Passing Arguments";
    echo "<br>";
    function helloYou($who){
        echo "Hello $who";
    }
    helloYou("World");

    function helloArgument($who = "World"){
        echo "Hello $who";
    }
    helloArgument("User"); // This time we pass in no argument and $who is assigned "World" by default

    echo "<br>";
    echo "<br>Variable-length Argument Lists";
    echo "<br>";
    function argument(){
    if (func_num_args() > 0) {
    $arg = func_get_arg(0); // The first argument is at position 0
    echo "Hello $arg";
    } else {
    echo "Hello World";
    }
    }
    argument("Reader"); // Displays "Hello Reader"
    argument(); // Displays "Hello World"

    function countAll($arg1){
        if (func_num_args() == 0) {
        die("You need to specify at least one argument");
        } else {
            $args = func_get_args(); // Returns an array of arguments
            // Remove the defined argument from the beginning
            array_shift($args);
            $count = strlen ($arg1);
            foreach ($args as $arg) {
                $count += strlen($arg);
            }
        }
        return $count;
    }
    echo countAll("foo", "bar", "baz"); // Displays ’9’

    echo "<br>";
    echo "<br>Passing Arguments by Reference";
    echo "<br>";
    function countUp(&$count)
    {
        if (func_num_args() == 0) {
        die("You need to specify at least one argument");
        } else {
            $args = func_get_args(); // Returns an array of arguments44 ” Functions
            // Remove the defined argument from the beginning
            array_shift($args);
            foreach ($args as $arg) {
                $count += strlen($arg);
            }
        }
    }
    $count = 0;
    countUp($count, "foo", "bar", "baz"); // $count now equals 9
    
    function cmdExists($cmd, &$output = null) {
        $output = 'whereis $cmd';
        if (strpos($output, DIRECTORY_SEPARATOR) !== false) {
            return true;
        } else {
            return false;
        }
    }

?>