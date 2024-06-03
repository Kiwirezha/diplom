<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanfall2 | ABILITY </title>
    <link rel="stylesheet" href="../templates/css/style.css">
</head>
<body class="body1ark" background="../img/background6.png">
    
    <header>
<a href="../index.php" class="logo">TITANFALL II</a>
<nav>
    <ul>
        
        <li><a href="#">Информация&blacktriangledown;</a>
            <ul>
                <li><a href="../index.php">Оружие</a></li>
                <li><a href="../templates/titans.php">Титаны</a></li>
                <li><a href="#">Способности</a></li>
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



    <div class="block">
        <div id="opisanie" class="opisanie">
            <b>Amped Weapons</b> <!--11111111111-->
          </div>
        <div class="text1">При применении прицельная марка пользователя становится оранжевой, и его оружие перезаряжается. Урон от оружия пилота значительно увеличен по всем целям; Однако это не сочетается с такими способностями, как A-Wall.</div>
        <img src="../img/Ampedweapons_boost.png" class="opis_img" alt="">
      </div>

      <div>
        <div id="opisanie" class="opisanie">
            <b> Tick</b> <!--22222222-->
          </div>
        <div class="text1">Клещи различаются по внешнему виду. Клещи, встречающиеся в ходе кампании, имеют шарообразные головы, состоящие из красных шестиугольников, пронизанных утопленными точечными огоньками. В многопользовательской игре головы клещей шестигранные, имеют грубую форму треугольной призмы и окрашены в более красный цвет на остальной части тела.</div>
        <img src="../img/tick_2.png" class="opis_img" alt="">
      </div>

      <div>
        <div id="opisanie" class="opisanie">
            <b>  Pilot Sentry</b> <!--3333333333-->
          </div>
        <div class="text1">Пилотная турель (также называемая турелью) — это часть оборудования, появляющаяся в Titanfall 2 в качестве усиления. Как и легкая турель, Sentry служит стационарным противопехотным пулеметом, способным с легкостью косить врагов. Уничтожение его даст вам 10% билда титана (5% ядра, если вы находитесь в Титане), а рукопашный бой мгновенно уничтожит его. Pilot Sentries самоуничтожится через одну минуту в обычном многопользовательском режиме.</div>
        <img src="../img/pilotsentry_boost.png" class="opis_img" alt="">
      </div>

      <div>
        <div id="opisanie" class="opisanie">
            <b>Map Hack </b> <!--44444444444-->
          </div>
        <div class="text1">Map Hack — это усиление, появляющееся в Titanfall 2. При активации оно будет посылать серию активных радиолокационных импульсов, подобных импульсному клинку или гидролокатору, позволяя пользователю — и его команде — видеть сквозь стены. Он активируется при 70% счетчике Титана.

</div>
        <img src="../img/Maphack_boost.png" class="opis_img" alt="">
      </div>

      <div>
        <div id="opisanie" class="opisanie">
            <b>Battery Back-up</b> <!--55555555555-->
          </div>
        <div class="text1">Резервная батарея — это усиление, которое появляется в Titanfall 2. При активации оно дает игроку бесплатную батарею, которую он может использовать на своем Титане или на Титане товарища по команде.</div>
        <img src="../img/Battery_boost.png" class="opis_img" alt="">
      </div>

      <div>
        <div id="opisanie" class="opisanie">
            <b>Radar Jammer</b> <!--666666666-->
          </div>
        <div class="text1">Подавитель радаров — это усиление в Titanfall 2. При его активации на радаре противника в течение 20 секунд будут отображаться только статические помехи. Примерно каждые 7 секунд можно увидеть мини-карту. Его можно активировать при уровне Титана 40%.

</div>
        <img src="../img/radarjammer_boost.png" class="opis_img" alt="">
      </div>
</body>
</html>