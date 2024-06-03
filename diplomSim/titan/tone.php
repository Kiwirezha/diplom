<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | Tone</title>
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
    <article class="articlestone">
        <img class="titanimg" src="./img/titans/toneicon.png" alt="Пример картинки">
        <h1 class="h1titans">Tone</h1>
        <p class="ptitans">Tone - это титан класса "Боевой командир", который специализируется на точных и целенаправленных атаках, используя свою ракетную систему поддержки. Его основное вооружение состоит из ракетного запуска и тяжелого орудия, которые позволяют ему наносить урон издалека и контролировать область боя. </p>
        <p>Tone также обладает способностью размещать управляемые ракетные снаряды и выпускать мощные сальвы, чтобы подавить противников и создать преимущество на поле боя. Этот титан отлично подходит для поддержки союзников и контроля стратегически важных точек.</p>
    </article>
</body>
</html>