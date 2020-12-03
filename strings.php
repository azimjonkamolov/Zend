<?php
    echo "<h1>Arrays</h1>";

    echo "Comparing, Searching and Replacing Strings";
    echo "<br>";
    $string = '123aa';
    if($string == 123){ // The string equals 123
        echo "The sting is the same!";
    }
    echo "<br>";
    $str = "Hello World";
    if(strcmp($str, "hello world") ===0 ){
        echo "It won't get here, because of case sensitivity " . strcmp($str, "hello world");
    }
    if(strcasecmp($str, "hello world") === 0){
        echo "It will get here, because strcasecmp() is case-insensitive " . strcasecmp($str, "hello world");
    }
    echo "<br/>";
    $who = "World";
    echo <<<TEXT
    So I said, "Hello $who"
    TEXT;

    echo "<br>";
    echo "<br>Transforming a String";
    echo "<br>";
    // Single character version
    echo strstr ('abc', 'a', '1'); // Outputs 1bc
    // Multiple-character version
    $subst = array('1' => 'one', '2' => 'two',);
    echo strtr('123', $subst); // Outputs onetwo3

    echo "<br>";
    echo "<br>Using Strings as Arrays";
    echo "<br>";
    $string = 'abcdef';
    echo $string[1]; // Outputs 'b'
    $s = 'abcdef';
    for($i=0;$i<strlen($s);$i++){
        if($s[$i]>'c'){
            echo $s[$i];
        }
    }

    echo "<br>";
    echo "<br>Simple Searching Functionality";
    echo "<br>";
    $haystack = "abcdefg";
    $needle = 'abc';
    if(strpos($haystack, $needle) !== false){
        echo "Found";
    }
    echo "<br/>";
    $haystack = "1234561234567";
    $needle = "123";
    $val = "7";
    echo strpos($haystack, $needle); // Outputs 0
    echo strpos($haystack, $needle, 1); // Outputs 6
    echo strpos($haystack, $val); // Outputs 12
    // Case-insensitive search
    echo stripos("Hello World", "hello"); // outputs zero
    echo stristr("Hello My World", "my"); // outputs "My World"
    // Reverse search
    echo strrpos ("123123", "123"); // outputs 3

    echo "<br>";
    echo "<br>Simple Search and Replace Operations";
    echo "<br>";
    echo str_replace("World", "Reader", "Hello World") . PHP_EOL;
    echo str_ireplace("world", "Reader", "Hello World") . PHP_EOL;
    $a = 0; // Initialize
    str_replace('a', 'b', 'a1a1a1', $a);
    echo $a . PHP_EOL; // Outputs 3
    echo str_replace(array("Hello", "World"), array("Bonjour", "Monde"), "Hello World");
    echo str_replace(array("Hello", "World"), "Bye", "Hello World");
    echo substr_replace("Hello World", "Reader", 6);
    echo substr_replace("Canned tomatoes are good", "potatoes", 7, 8);
    $user = "davey@php.net";
    $name = substr_replace($user, "", strpos($user, '@'));
    echo "Hello" . $name;
    $num = "1234567";
    echo substr($num, 0, 3) . PHP_EOL; // Outputs 123
    echo substr($num, 1, 1) . PHP_EOL; // Outputs 2
    echo substr($num, -2) . PHP_EOL; // Outputs 67
    echo substr($num, 1) . PHP_EOL; // Outputs 234567
    echo substr($num, -2, 1) . PHP_EOL; // Outputs 6

    echo "<br>";
    echo "<br>Formatting Numbers";
    echo "<br>";
    echo number_format("100000.698"); // Shows 100,001
    echo number_format("100000.698", 3, ",", ""); // Shows 100 000,698

    echo "<br>";
    echo "<br>Formatting Currency Values";
    echo "<br>";
    // setlocale(LC_MONETARY, "en_US");
    // echo money_format("%.2n", "100000.698");

    echo "<br>";
    echo "<br>Parsing Formatted Input";
    echo "<br>";
    $data = '123 456 789';
    $format = '%d %d %d';
    var_dump(sscanf($data, $format));

    echo "<br>";
    echo "<br>Matching and Extracting Strings";
    echo "<br>";
    $name = "Azimjon Kamolov";
    // Simple match
    $regex = "/[a-zA-Z\s]/";
    if(preg_match($regex, $name)){
        echo "Allowed!"; // Valid Name
    }
    $regex = '/^(\w+)\s(\w+)/';
    $matches = array();
    if(preg_match($regex, $name)){
        var_dump($matches);
    }

    echo "<br>";
    echo "<br>Performing Multiple Matches";
    echo "<br>";
    $string = "a1bb b2cc c2dd";
    $regex = "#([abc])\d#";
    $matches = array();
    if (preg_match_all ($regex, $string, $matches)) {
    var_dump ($matches);
    
}


?>