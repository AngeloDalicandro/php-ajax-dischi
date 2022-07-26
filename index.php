<?php
require __DIR__ . "/database.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <img src="img/Spotify_logo_without_text.svg.png" alt="Spotify Logo">
    </header>
    
    <main>
        <div class="container">

            <?php foreach($database as $album) { ?>
                <div class="album">
                    <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album["title"] ?>">

                    <h2> <?php echo $album["title"] ?> </h2>

                    <div class="author"> <?php echo $album["author"] . "<br>" . $album["year"] ?> </div> 
                </div>
            <?php } ?>

        </div>
    </main>

</body>
</html>