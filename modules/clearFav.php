<?php

session_start();
unset($_SESSION['fav']);
header("Location: /pages/favorite.php");