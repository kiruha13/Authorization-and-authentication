<?php
if (isset($_SERVER['HTTP_REFERER']) != "http://site/checking.php" || isset($_SERVER['HTTP_REFERER']) != "http://site/save_user.php"
    || isset($_SERVER['HTTP_REFERER']) != "http://site/recovery.php" || isset($_SERVER['HTTP_REFERER']) != "http://site/changing.php") {
        http_response_code(403);
        exit();
    }
    session_start();

    function chpas($value) {
        if (strlen($value) < 16) {
            $_SESSION['error'] = "Password less than 16 characters!";
            return false;
        }
        else if (!preg_match("#^[A-Za-z0-9\-_]+$#",$value)) {
            $_SESSION['error'] = "Password must consist of only appropriate symbols!";
            return false;
        }
        return true;
    }
?>
