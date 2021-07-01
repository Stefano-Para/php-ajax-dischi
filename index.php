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
                padding: 40px 0;
                height: 100%;
                display: flex;
                background-color: #21606e;
            }
            .container-disks {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-content: space-between;  
                width: 80%;
                margin: 0 auto;
                height: 100%;
            }
            .disk {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
                width: 18%;
                height: 250px;
                padding: 15px;
                margin: 15px 0;
                border: 1px solid black;
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
    <div class="container-disks">
        <?php
        include __DIR__ . '/db/database.php';

        foreach ($disks as $disk) { ?>
            <div class="disk">
                <img src="<?php echo $disk[poster] ?>" width="50px" height="50px" alt="">
                <h2><?= $disk[title]; ?></h2>
                <h3><?= $disk[author]; ?></h3>
                <h4><?= $disk[year]; ?></h4>
                <h5><?= $disk[genre]; ?></h5>
            </div>
        <?php } ?>
        </div>
        
    </body>
</html>