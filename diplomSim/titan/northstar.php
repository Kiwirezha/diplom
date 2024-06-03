<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | Northstar</title>
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
    <article class="articlesnorthstar">
        <img class="titanimg" src="./img/titans/northstaricon.png" alt="Пример картинки">
        <h1 class="h1titans">Northstar</h1>
        <p class="ptitans">Northstar - это титан класса "Снайпер", который специализируется на дальних атаках и поддержке союзников с помощью своего мощного оружия и возможности быстрого перемещения. Его основное вооружение включает в себя плазменный снайпер и ракетный запуск, позволяющие ему наносить смертоносные удары с огромного расстояния и поражать цели точно и эффективно. </p>
        <p>Northstar также обладает способностью использовать ракетную систему защиты и выпускать энергетические мины, чтобы отпугивать противников и защищать ключевые позиции на поле боя. Этот титан идеально подходит для стратегической игры и поддержки союзников издалека.</p>
    </article>
</body>
</html>