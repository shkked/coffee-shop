<?php

    setcookie('userName', "", time() - 3600, '/');
    setcookie('userEmail', "", time() - 3600, '/');
    setcookie('role', "", time() - 3600, '/');

    header('Location: /php');