<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="./js/script.js"></script>
    <title>Diplom</title>
</head>
<body>
    <main>
    <a name="weapons"></a>
        <div class="weaponss">
        <?php if($guns != NULL):?>
            <?php foreach($guns as $gun):?>
            <?=renderTemplate('templates/gun.php', ['gun' => $gun]);?>
        <?php endforeach; ?>
        <?php endif;?>
        </div>
    </main>