<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | Ronin</title>
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
    <article class="articlesronin">
        <img class="titanimg" src="./img/titans/roninicon.png" alt="Пример картинки">
        <h1 class="h1titans">Ronin</h1>
        <p class="ptitans">Ronin - это титан класса "Истребитель", который обладает высокой скоростью и маневренностью, позволяя ему быстро перемещаться по полю боя и атаковать врагов с близкого расстояния. Вооруженный мечом и легкими артиллерийскими системами, Ronin способен наносить огромный урон в ближнем бою и обходить оборону врагов благодаря своей маневренности. </p>
        <p>Он также обладает способностью создавать временную защитную стену, чтобы защитить себя и союзников от атак противника. Ronin идеально подходит для атаки и ослабления обороны противника с помощью своей агрессивной и быстрой игры.</p>
    </article>
</body>
</html>