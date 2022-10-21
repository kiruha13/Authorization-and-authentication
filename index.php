<?php
    require_once 'messages.php';
    if (isset($_SESSION['id']['login'])) {
        header('Location: main.php');
        exit();
    }
    session_start();
    ?>
    <html>
    <div class="container">
    <head>
      <link rel="stylesheet" href="index.css" type="text/css"/>
      <title>Главная страница</title>
    </head>
    <body>
    <h1>Страница входа</h2>
    <form action="checking.php" method="post">
 <p>
   <hr>
    <label><b>Ваш логин:<br></label>
    <input name="login" type="text">
    </p>
    <p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password">
    </p>


    <p>
    <input type="submit" name="submit" class="regbt" value="Войти">
    <a href="recover.php">Забыли пароль?</a>
  </div>
      <?php
    message();
    ?>
  </form>

    <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    $_SESSION['error'] = "You enter this page as a guest";
    }
    else
    {
      $_SESSION['success'] = "You entered!";
      header('Location: main.php');
    }
    ?>
    </body>
    </html>
