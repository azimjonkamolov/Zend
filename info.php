<?php include 'globals.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>System Info</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Server & File Info</h1>
            <?php if($server): ?>
                <ul class="list-group">
                    <?php foreach($server as $key => $value): ?>
                        <li class="list-group-item">
                            <strong>
                                <?php echo $key; ?>:
                                <?=$value;?>
                            </strong>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
        </div>
    </body>
</html>