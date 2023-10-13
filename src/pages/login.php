<?php

use xpressxd\User;

$redirect = '';

if(!empty($_POST))
{
    if(!User::logIn($_POST['username'], $_POST['password']))
    {
        $_SESSION['loginFailed'] = true;
    }

    $redirect = $_SESSION['lastPage'] ?? '';
}

header('Location: /'.$redirect);
exit();

