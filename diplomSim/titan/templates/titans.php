<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | TITANS </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body background="../img/background.jpg"> 

<header>
<a href="../index.php" class="logo">TITANFALL II</a>
<nav>
    <ul>
        
        <li><a href="#">Информация&blacktriangledown;</a>
            <ul>
                <li><a href="../index.php">Оружие</a></li>
                <li><a href="../templates/titans.php">Титаны</a></li>
                <li><a href="../templates/ability.php">Способности</a></li>
            </ul>
        </li> 
        <li><a href="../faq.php">FAQ</a></li>
    </ul>
</nav>
<div class = "header-part">
    <?php if(!isset($_COOKIE['user'])): ?>
        <a href="../pageView.php?id=auth.php"><img class="log" src="../img/Group 40.png" alt=""></a>
        <a href="../pageView.php?id=registration.php" class="reg">Reg</a>
    <?php else: ?>
        <a href="./pageView.php?id=user.php"><img class="log" src="../img/Group 40.png" alt=""></a>
    <?php endif; ?>
</div>
</header>
<div class="backgroundtitans">
    <div class="h1guns"><h1 >Знакомство с титанами</h1></div>
    
    <div class="divh1">
        <h2>Виртуально приветствую вас на странице, посвященной величайшим титанам из мира Titanfall 2! В этом эпическом мире, где битвы разгораются на огромных масштабах, титаны — колоссальные боевые машины — играют ключевую роль в схватках будущего. Здесь вы найдете всю необходимую информацию о разнообразных титанах, их характеристиках, уникальных способностях и тактических преимуществах. Готовьтесь окунуться в захватывающий мир боевых машин и подготовьте себя к адреналиновым приключениям, которые только может предложить Titanfall 2!
            
        </h2>
    </div>
      <div class="photostitans">
        <a href="../scorch.php"><img class="icontitans" src="../img/titans/ScorchIcon.png" alt=""></a>
        <a href="../northstar.php"><img class="icontitans" src="../img/titans/NorthstarIcon.png" alt=""></a>
        <a href="../ronin.php"><img class="icontitans" src="../img/titans/RoninIcon.png" alt=""></a>
        <a href="../tone.php"><img class="icontitans" src="../img/titans/ToneIcon.png" alt=""></a>
        <a href="../legion.php"><img class="icontitans" src="../img/titans/LegionIcon.png" alt=""></a>
        <a href="../monarch.php"><img class="icontitans" src="../img/titans/MonarchIcon.png" alt=""></a>
      </div>
</div>
</body>
</html>