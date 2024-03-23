<?php

    setcookie('id', $result['users_id'], time() - 3600, '/');
    setcookie('userName', $result['users_name'], time() - 3600, '/');
    setcookie('userEmail', $result['users_email'], time() - 3600, '/');
    setcookie('role', $result['users_role'], time() - 3600, '/');

    header('Location: /');