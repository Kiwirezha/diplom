<div class="form_auth_block">
        <div class="form_auth_block_content">
          <p class="form_auth_block_head_text">Регистрация</p>
          <form class="form_auth_style" action="./templates/PhP scripts/registration.php" method="post">
            <input type="text" name="reg_username" placeholder=" и имя ваше..." required >
            <input type="password" name="reg_pass" placeholder=" а ваш пароль..." required >
            <button class="form_auth_button" type="submit" name="form_auth_submit">Зарегистрироваться</button>
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