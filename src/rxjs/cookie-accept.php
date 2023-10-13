<?php
$cookie_options = array (
    'expires' => time() + (86400 * 365), // 86400 = 1 day
    'path' => '/',
    'domain' => $_SERVER["SERVER_NAME"],
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
);
setcookie("xpressxd_gdpr", "All", $cookie_options);
http_response_code(204);
header('Content-Type: application/json; charset=utf-8');
echo "";