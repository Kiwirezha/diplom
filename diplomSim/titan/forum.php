<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Форум</title>
  <link rel="stylesheet" href="./templates/css/style.css">
</head>
<header>
<a href="./index.php" class="logo">TITANFALL II</a>
<nav>
    <ul>
        <li><a href="#">Информация&blacktriangledown;</a>
            <ul>
                <li><a href="#">Оружие</a></li>
                <li><a href="./templates/titans.php">Титаны</a></li>
                <li><a href="./templates/ability.php">Способности</a></li>
            </ul>
        </li> 
        <li><a href="./faq.php">FAQ</a></li>
    </ul>
</nav>
<div class = "header-part">
    <?php if(!isset($_COOKIE['user'])): ?>
        <a href="../pageView.php?id=auth.php"><img class="log" src="./img/Group 40.png" alt=""></a>
        <a href="../pageView.php?id=registration.php" class="reg">Reg</a>
    <?php else: ?>
        <a href="./pageView.php?id=user.php"><img class="log" src="img/Group 40.png" alt=""></a>
    <?php endif; ?>
</div>
</header>
<body background="./img/ASH.png">

<?php
$conn = mysqli_connect("localhost", "root", "", "titan_bd");

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d Y, h:i:s A');
  $reply_id = $_POST["reply_id"];

  $query = "INSERT INTO tb_data VALUES('', '$name', '$comment', '$date', '$reply_id')";
  mysqli_query($conn, $query);
}
?>
<html>
  <head></head>
  <style>
    *{
      margin: 0px;
      padding: 0px;
      color: black;
    }
    body{
      
      
    }
    
    .container{
      background: white;
      width: 700px;
      margin: 0 auto;
      margin-top: 50px;
      padding-bottom: 5px;
    }
    .comment, .reply{
      margin-top: 5px;
      padding: 10px;
      border-bottom: 1px solid black;
    }
    .reply{
      border: 1px solid #ccc;
    }
    p{
      margin-top: 5px;
      margin-bottom: 5px;
    }
    form{
      margin: 10px;
    }
    form h3{
      margin-bottom: 5px;
    }
    form input, form textarea{
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    form button.submit, button{
      background: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      width: 100%;
    }
    button.reply{
      background: red;
    }
  </style>
  <body>
    <div class="container">
      <?php
      $datas = mysqli_query($conn, "SELECT * FROM tb_data WHERE reply_id = 0"); //только выбирает комментарий но не выбирает ответ
      foreach($datas as $data) {
        require 'comment.php';
      }
      ?>
      <form action = "" method = "post">
        <h3 id = "title">Оставить комментарий</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" placeholder="временное имя">
        <textarea name="comment" placeholder="ваш комментарий"></textarea>
        <button class = "submit" type="submit" name="submit">Отправить</button>
      </form>
    </div>

    <script>
      function reply(id, name){
        title = document.getElementById('title');
        title.innerHTML = "Ответить " + name;
        document.getElementById('reply_id').value = id;
      }
    </script>
  </body>
</html>
</body>
</html>
