<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/style.css">
</head>
<body>
    
</body>
</html>

<div class="weapon">
        <img class="weapon_img" src="<?=$gun['img_path']?>" alt="">
        <div class="weapon-desc">
        <p class="weapon-name"><?=$gun['name'];?></p>
        <p class="weapon-type"><?=$gun['type'];?></p>
        </div>
        <p class="weapon-opis"><?=$gun['description'];?></p>
</div>    

    <div class="buttons">
        <?php if(isset($_COOKIE['user'])): ?>
            <?php if($_COOKIE['user'] == 'admin'): ?>
                <a class="weapon-but" href="./templates/PhP scripts/deleteweapon.php">Удалить оружие</a>
            <?php endif; ?>
        <?php endif; ?>
        <a class="weapon-but" href="./index.php#store">Назад</a>
    </div>  
