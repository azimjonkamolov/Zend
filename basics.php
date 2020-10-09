<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics</title>
    <link rel="shortcut icon" href="https://azimjon.netlify.app/icons/php.png"/>
</head>
<body>
    <h1>echo '1' . (print'2') + 3; >> 
        <?php
            // if the file only contains php closing bracets can be skipped
            echo '1' . (print'2') + 3;  // this was the question that I got in Medium
            $myvar = 'AzimjonKamolov'
        ?>
    </h1>
    <h1>
    <?=$myvar?>
    </h1>
    <h2>Some Others:
        <?php
            echo $myvar
        ?>
    </h2>

    <h1>We can use PHP logic between opening and closing tags </h1>

    Your bank balance :
    <?php
    $balance = -4;
    if ($balance > 0): ?>
        <p style="color: green">
    <?php else: ?>
        <p style="color: red">
    <?php endif; ?>
    <?=$balance ?>
    </p>

    <?php
        $a = '123';
        $a = $a + 4;
        echo $a;
        $a = (int)$a;
        echo $a + 8;
        $a = (bool)$a;
        echo $a + 8;
        $a = 1234.56;
        echo (int)$a; // 1234 (not 1235)
        $a = -1234.56;
        echo (int)$a; // -1234

    ?>
    <br>
    <br>
    <?php
        echo (int)((0.1 + 0.3) * 10);
        echo (int)((0.1 + 0.8) * 10);
        echo "<br>";
        $a = 'name';
        $$a = 'AzimjonKamolov';
        echo $name;
    ?>

    <?php
        echo "Ternary Operator";
        $random_value = 'value';
        $check_value = (isset($random_value))? 'true' : 'false';
        echo "<br>";
        echo $check_value;
    ?>
    <?php
        echo "Null Coalescing Operator";
        // Long form ternary syntax
        $sort_direction = (isset($_GET['sort_dir'])) ? $_GET['sort_dir'] : 'ASC';

        // Equivalent syntax using the null coalescing operator
        $sort_direction = $_GET['sort_dir'] ?? 'ASC';

        // The null-coalesce operator can be chained
        $sort_direction = $_GET['sort_dir'] ?? $default_sort_dir ?? 'ASC';

        // The Elvis operator raises E_NOTICE if the GET variable is not set
        $sort_direction = $_GET['sort_dir'] ?: 'ASC';

        
    ?>
    <!-- <form action="" method="GET">
        <input type="hidden" name="sort_dir" value="1">
    </form> -->
    
    <?php
        echo "<br><h1>Assignment Operators</h1>";
        $test = 123;
        $test += 345;
        echo $test;
        echo "<br>";
        $test .='foo';
        echo $test;
        echo "<br>";
    ?>


</body>
</html>




