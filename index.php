<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
            body {
                padding: 20px;
                height: 500px;
                display: flex;
            }
            .container-disks {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-content: space-between;  
                width: 80%;
                margin: 0 auto;
            }
            .disk {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
                width: 18%;
                height: 48%;
                padding: 15px;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    <div class="container-disks">
        <?php
        include __DIR__ . '/partials/database.php';

        foreach ($disks as $disk) { ?>
            <div class="disk">
                <h2><?php echo $disk[title]; ?></h2>
                <h3><?php echo $disk[author]; ?></h3>
                <h4><?php echo $disk[year]; ?></h4>
                <h5><?php echo $disk[genre]; ?></h5>
                <img src="<?php echo $disk[poster] ?>" width="50px" height="50px" alt="">
            </div>
        <?php } ?>
        </div>
        
    </body>
</html>