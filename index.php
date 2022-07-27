<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Dischi</title>
</head>
<body>
    <!-- Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

    <!-- HEADER -->
    <header>
        <img src="./img/logo.svg" alt="spotify logo" class="logo">
    </header>

    <!-- MAIN -->
    <main>
        <div class="albums-container">
            <?php foreach ($albums as $album) { ?>
                <div class="album">
                    <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title']; ?>">

                    <h3><?php echo $album['title']; ?></h3>
                    <span><?php echo $album['author']; ?></span>
                    <div><?php echo $album['year']; ?></div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>