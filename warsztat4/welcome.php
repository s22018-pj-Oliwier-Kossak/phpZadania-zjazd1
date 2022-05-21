<?php
    session_start();
    echo "Welcome " . $_SESSION['login'];
    echo"<br> cookie " . $_COOKIE['login'];
?>