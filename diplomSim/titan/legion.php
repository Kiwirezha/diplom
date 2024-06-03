<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | Legion</title>
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
    <article class="articleslegion">
        <img class="titanimg" src="./img/titans/legionicon.png" alt="Пример картинки">
        <h1 class="h1titans">Legion</h1>
        <p class="ptitans">Legion - это титан класса "Тяжелый артиллерист", который является олицетворением мощи и разрушительной силы на поле боя. Его основное вооружение - мощный пулемет с большим обоймом, который способен наносить огромный урон врагам на больших расстояниях. Он также обладает способностью активировать щит для защиты себя и союзников от вражеских атак.  </p>
        <p>Legion может размещать стационарные турели и использовать усиленные снаряды, чтобы наносить еще больший урон противникам. Этот титан идеально подходит для контроля зоны и подавления противника своей мощной огневой мощью.

</p>
    </article>
</body>
</html>