<?php 
include __DIR__ . './database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>PHP Dischi</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="./img/logo.png" alt="logo">
            </div>    
        </div>
    </header>

    <main>
        <div class="album_list container">
            <?php foreach ($database as $key => $album) { ?>
            <div class="album">
                
                <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">
                
                <h3> <?php echo $album['title']; ?></h3>
                <span> <?php echo $album['author']; ?></span>
                <span><strong><?php echo $album['year']; ?></strong></span>
                <span> <?php echo $album['genre']; ?></span>
            
            </div>
            <?php } ?>
        </div>

    </main>
    
</body>
</html>