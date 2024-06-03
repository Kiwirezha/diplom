<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | Scorch</title>
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
    <article class="articlescorch">
        <img class="titanimg" src="./img/titans/ScorchIcon.png" alt="Пример картинки">
        <h1 class="h1titans">Scorch</h1>
        <p class="ptitans">Scorch - это титан класса "Огненный монстр", который специализируется на использовании огня и жарких атак для подавления противников. Его основным вооружением является огнемет, который может выстреливать горящими снарядами и создавать стены огня для блокировки пути противников.</p>
        <p>Кроме того, Scorch может размещать горящие ловушки и выпускать мощные огненные сальвы из своего особого умения, нанося урон по широкой области. Этот титан идеально подходит для контроля зоны и уничтожения больших скоплений вражеских сил при помощи своего разрушительного огня.</p>
    </article>
</body>
</html>