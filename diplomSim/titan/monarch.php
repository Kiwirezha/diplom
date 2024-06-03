<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | Monarch</title>
    <link rel="stylesheet" href="./templates/css/style.css">
</head>
<header>
<a href="./index.php" class="logo">TITANFALL II</a>
<nav>
    <ul>
        
        <li><a href="#">Информация&blacktriangledown;</a>
            <ul>
                <li><a href="./index.php">Оружие</a></li>
                <li><a href="./templates/titans.php">Титаны</a></li>
                <li><a href="./templates/ability.php">Способности</a></li>
            </ul>
        </li> 
        <li><a href="./faq.php">FAQ</a></li>
    </ul>
</nav>
<div class = "header-part">
    <?php if(!isset($_COOKIE['user'])): ?>
        <a href="./pageView.php?id=auth.php"><img class="log" src="./img/Group 40.png" alt=""></a>
        <a href="./pageView.php?id=registration.php" class="reg">Reg</a>
    <?php else: ?>
        <a href="./pageView.php?id=user.php"><img class="log" src="img/Group 40.png" alt=""></a>
    <?php endif; ?>
</div>
</header>
<body class="bodytitans">
    <article class="articlesmonarch">
        <img class="titanimg" src="./img/titans/monarchicon.png" alt="Пример картинки">
        <h1 class="h1titans">Monarch</h1>
        <p class="ptitans">Monarch - это титан класса "Специалист по адаптации", который обладает уникальной способностью модификации и усиления в бою. В отличие от других титанов, Monarch может постепенно модифицироваться, добавляя новые умения и улучшения с каждой успешной битвой. Его основное вооружение включает в себя ракетный запуск и энергетический лазер, который можно улучшить с прогрессом. </p>
        <p>Monarch также обладает способностью восстанавливать броню и здоровье, а также вызывать дополнительные титаны в бою. Этот титан является уникальным и эффективным выбором для игроков, предпочитающих адаптивный и гибкий стиль игры.</p>
    </article>
</body>
</html>