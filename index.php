<?php include __DIR__ . '/db/database.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Document</title>
    </head>
    <body>
        <!-- header  -->
        <?php include __DIR__ . '/partials/header.php'; ?>

        <!-- main  -->
        <main>
            <div class="container-disks">
                <?php foreach ($disks as $disk) { ?>
                    <div class="disk">
                        <img src="<?php echo $disk["poster"] ?>" width="50px" height="50px" alt="">
                        <h2><?= $disk["title"]; ?></h2>
                        <h3><?= $disk["author"]; ?></h3>
                        <h4><?= $disk["year"]; ?></h4>
                        <h5><?= $disk["genre"]; ?></h5>
                    </div>
                <?php } ?>
            </div>
        </main>
        
    </body>
</html>