<?php
if ((isset($_SERVER['HTTP_REFERER']) != "http://site/index.php")||(isset($_SERVER['HTTP_REFERER']) != "http://site/reg.php")) {
  http_response_code(403);
  exit();
}
  session_start();
  require_once 'messages.php';

?>
<html>
<head>
  <link rel="stylesheet" href="main.css" type="text/css"/>
</head>
<div class="wrapper">

  <div class="top">

  </div>

  <ul class="navigation">
    <li><a href="" title="Home">Home</a></li>
    <li><a href="change.php" title="Change password">Change password</a></li>
    <li><a href="logout.php" title="Log out">Log out</a></li>
    <div class="clear"></div>
  </ul>

  <div class="footer">
    <h1 class="pageTitle">Главная страница</h1>
    <p>  <?php
    message();
    ?></p>
  </div>

</div>
</html>
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
$_SESSION['error'] = "You enter this page as a guest";
}
else
{
  $_SESSION['success'] = "You entered!";
}
?>
