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

<a href="index.php" class="logo">TITANFALL II</a>
<nav>
    <ul>
        
        
        <li><a href="#">Информация&blacktriangledown;</a>
            <ul>
                
                <li><a href="./templates/titans.php">Титаны</a></li>
                <li><a href="./templates/ability.php">Способности</a></li>
                <?php if(isset($_COOKIE['user'])): ?>
            <?php error_reporting(0); if($_COOKIE['username'] == ''): ?>
                <a class="weapon-but" href="forum.php">Форум</a>
            <?php endif; ?>
        <?php endif; ?>
            </ul>
        </li> 
        <li><a href="./faq.php">FAQ</a></li>
        
    </ul>
</nav>
<div class = "header-part">
    <?php if(!isset($_COOKIE['user'])): ?>
        <a href="./pageView.php?id=auth.php"><img class="log" src="img/Group 40.png" alt=""></a>
        <a href="./pageView.php?id=registration.php" class="reg">Reg</a>
    <?php else: ?>
        <a href="./pageView.php?id=user.php"><img class="log" src="img/Group 40.png" alt=""></a>
    <?php endif; ?>
</div>