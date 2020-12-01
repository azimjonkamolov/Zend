<?php
    echo "<h1>Arrays</h1>";

    echo "Array Basics";
    echo "<br>";
    $val = array(10, 20, 30);
    $val = array('a' => 10, 'b' => 20, 'c' => 30);
    $val = array(5 => 1, 3 => 2, 1 =>3,);
    $val = array();
    $x[] = 10;
    $x['aa'] = 11;
    echo $x[0]; // Outputs 10
    $a = array(2=>5);
    $a[] = 'a'; // This will have a key of 3
    $a = array ('4' => 5, 'a' => 'b');
    $a[] = 44; // This will have a key of 5

    echo "<br>";
    echo "<br>Array Basics";
    echo "<br>";
    $array = array();
    $array[] = array('foo', 'bar');
    $array[] = array('baz', 'bat');
    echo $array[0][1] . $array[1][0];

    echo "<br>";
    echo "<br>Array Operations";
    echo "<br>";
    $a = array(1,2,3);
    $b = array('a' => 1, 'b' => 2, 'c' => 3);
    var_dump($a+$b);

    echo "<br>";
    echo "<br>Comparing Arrays";
    echo "<br>";
    $a = array(1,2,3);
    $b = array(1 => 2, 2 =>3, 0 => 1);
    $c = array('a' => 1, 'b' => 2, 'c' => 3);
    var_dump($a == $b); // True
    var_dump ($a === $b); // False
    var_dump ($a == $c); // True
    var_dump ($a === $c); // False
    $a = array (1, 2, 3);
    $b = array (1 => 2, 2 => 3, 0 => 1);
    var_dump ($a != $b); // False
    var_dump ($a !== $b); // True

    echo "<br>";
    echo "<br>Counting, Searching and Deleting Elements";
    echo "<br>";
    $a = array(1,2,4);
    $b = array();
    $c = 10;
    echo count ($a); // Outputs 3
    echo count ($b); // Outputs 0
    echo count ($c); // Gives a warning and outputs 1
    $a = array ('a' => 1, 'b' => 2);
    echo isset ($a['a']); // True
    echo isset ($a['c']); // False
    $a = array ('a' => NULL, 'b' => 2);
    echo isset ($a['a']); // False
    // $a = array ('a' => NULL, 'b' => 2);
    // echo array_key_exists ($a['a']); // True
    // $a = array ('a' => NULL, 'b' => 2);
    // unset ($a['b']);
    // echo in_array ($a, 2); // False

    echo "<br>";
    echo "<br>Flipping and Reversing";
    echo "<br>";
    $a = array ('a', 'b', 'c');
    var_dump (array_flip ($a));

    echo "<br>";
    echo "<br>The Array Pointer";
    echo "<br>";
    $array = array('name' => 'Azimjon', 'Zakirovich', 'surname' => 'Kamolov');
    function displayArray($array){
        reset($array);
        while(key($array) !== null){
            echo key($array) . ": " .current($array) .PHP_EOL;
            next($array);
        }
    }
    displayArray($array);

    $a = array(1,2,3);
    end($a);
    while(key ($array) !== null){
        echo key($array) . ": " .current($array) . PHP_EOL;
        prev($array);
    }

    echo "<br>";
    echo "<br>An Easier Way to Iterate";
    echo "<br>";
    $array = array('foo ', 'bar ', 'baz ');
    foreach($array as $key => $value){
        echo "$key: $value";
    }

    echo "<br>";
    echo "<br>Passive Iteration";
    echo "<br>";
    function setCase(&$value, &$key){
        $value = strtoupper($value);
    }
    $type = array('internal', 'custom');
    $output_formats[] = array('rss', 'html', 'xml');
    $output_formats[] = array('csv', 'json');
    $map = array_combine($type, $output_formats);
    array_walk_recursive($map, 'setCase');
    var_dump($map);

    echo "<br>";
    echo "<br>Sorting Arrays";
    echo "<br>";
    $array = array('a' => 'foo', 'b' => 'bar', 'c' => 'baz');
    sort($array);
    var_dump($array);

    echo "<br>";
    echo "<br>Other Sorting Operations";
    echo "<br>";
    $a = array('a' => 30, 'b' => 10, 'c' => 22);
    ksort($a);
    var_dump($a);

    function myCmp($left, $right){
        // Sorting according to the length of the value
        // If the length is the same, sort normally
        $diff = strlen($left) - strlen($right);
        if(!$diff){
            return strcmp($left, $right);
        }
        return $diff;
    }
    $a = array('three', '2two', 'one', 'two');
    usort($a,'myCmp');
    var_dump($a);

    echo "<br>";
    echo "<br>The Anti-Sort";
    echo "<br>";
    $cards = array(1,2,3,4);
    echo shuffle($cards);
    var_dump($cards);

    $cards = array('a' => 10, 'b' => 12, 'c' => 13);
    $keys = array_keys($cards);
    shuffle($keys);
    foreach($keys as $v){
        echo $v. " - " . $cards[$v] . "\n";
    }

    echo "<br>";
    echo "<br>Arrays as Stacks, Queues and Sets";
    echo "<br>";
    $stack = array();
    array_push($stack, 'first', 'second');
    var_dump($stack);
    $last_in = array_pop($stack);
    var_dump($last_in, $stack);

    echo "<br>";
    echo "<br>Set Functionality";
    echo "<br>";
    $a = array (1, 2, 3);
    $b = array (1, 3, 4);
    var_dump (array_diff ($a, $b));
    $a = array (1, 2, 3);
    $b = array (1, 3, 4);
    var_dump (array_intersect ($a, $b));



?>