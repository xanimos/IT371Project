<?php
return [
    'mysql'=>[
        'host'=>'localhost',
        'user'=>'',
        'pass'=>'',
        'db'=>'',
    ],
    'pages' => [
        'articles'=>'articles.php',
        'index'=>'index.php',
        'contact'=>'contact.php',
        'settings'=>'settings.php',
        'profile'=>'profile.php',
        'cookie-policy'=>'cookie-policy.php',
        'login' => 'login.php',
        'logout'=>'logout.php',
    ],
    'rxjs' => [
        'cookie-accept' => 'cookie-accept.php',
        'contact' => 'contact.php',
    ],
    'lib' => [
        'Database.php',
        'User.php',
    ],
    'session_options' => [
        "name" => "xpressxdSession",
        "cookie_domain" => $_SERVER['SERVER_NAME'],
    ]
];