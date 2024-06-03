
    <div class="form_auth_block">
        <div class="form_auth_block_content">
          <p class="form_auth_block_head_text">Авторизация</p>
          <form class="form_auth_style" action="./templates/PhP scripts/authorization.php" method="post">
            <input type="text" name="auth_username" placeholder="        ==имя пользователя==" required >
            <input type="password" name="auth_pass" placeholder="                ==пароль==" required >
            <button class="form_auth_button" type="submit" name="form_auth_submit">Войти</button>
            <a href="http://localhost/diplomSim/titan/pageView.php?id=registration.php" class="regis">Регистрация</a>
            <style>
              
              body{
                background:url(../titan/img/background7.png);
                height: 100%;
                background-color: black;
                height: 100vh;
                background-size: cover;
                background-position: center;
                background-attachment: fixed
              }
            </style>
          </form>
          <?php
              if(isset($_COOKIE['error'])):
          ?>
              <p><?=$_COOKIE['error']?></p>
          <?php
              endif;
          ?>
        </div>
      </div>
    