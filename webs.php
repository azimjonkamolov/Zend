<?php
    echo "<h1>Web Programming</h1>";

    echo "Comparing, Searching and Replacing Strings";
    echo "<br>";
?>
    <!-- Form submitted with GET -->
    <from action="index.php" method="GET">
        List: <input type="text" name="list"/><br/>
        Order by:
        <select name="orderby">
            <option value="name"> Name </option>
            <option value="city"> City </option>
            <option value="zip"> Zip Code </option>
        </select><br/>
        Sort order:
        <select name="direction">
            <option value="asc"> Ascending </option>
            <option value="desc"> Descending </option>
        </select><br/>
    </from>

    <!-- Form submitted with GET -->
    <form action="index.php" method="POST">
        <input type="hidden" name="login" value="1" />
        <input type="text" name="user" />
        <input type="password" name="pass" />
    </form>
    <br>

    <form action="index.php" method="POST">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque dolores 
        alias hic excepturi. Ipsa at rerum exercitationem libero laudantium reiciendis 
        dolor quis sit ducimus, quaerat totam laboriosam, vel doloribus aut.</p>
        <p>
            <label>
                <input type="checkbox" name="languages[]" value="PHP">
            </label>
            <label>
                <input type="checkbox" name="languages[]" value="Perl">
            </label>
            <label>
                <input type="checkbox" name="languages[]" value="Ruby">
            </label>
            <br/>
            <input type="submit" name="Send" name="poll">
        </p>
    </form>
    <br>

    <form enctype="multipart/form-data" action="index.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="50000" />
        <input name="filedata" type="file" />
        <input type="submit" value="Send file" />
    </form>    