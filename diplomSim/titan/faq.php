<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="./templates/css/style.css">
</head>
<body class="bodyfaq" >
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

<nav class="faq">
    <ul class ="faq1">
        <li>1. Что такое сайт-энциклопедия с форумом? </a></li>
        <li>-Сайт-энциклопедия с форумом - это онлайн-ресурс, который объединяет в себе базу знаний (энциклопедию) и форум для обсуждения различных тематик. </a></li>
        <li>2. Как найти нужную информацию на сайте-энциклопедии с форумом?</a></li>
        <li>На нашем сайте есть поиск по категориям, что помогает найти нужную информацию. Также можно просматривать разделы энциклопедии или форума, чтобы найти интересующие темы.</a></li>
        <li>3. Как стать активным участником сообщества на сайте-энциклопедии с форумом?</a></li>
        <li>-Для этого обычно нужно зарегистрироваться на сайте и начать участвовать в обсуждениях, задавать вопросы, отвечать на них, добавлять новую информацию и комментировать статьи. Чем активнее вы будете участвовать, тем больше вы станете частью сообщества.</a></li>
    </ul>
</nav>

</body>
</html>