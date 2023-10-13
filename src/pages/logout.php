<?php

use xpressxd\User;

$redirect = $_SESSION['lastPage'] ?? '';

User::logOut();
header('Location: /'.$redirect);
exit();

