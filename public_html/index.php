<?php

// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$rootPath = realpath("../");
$_ENV["source_root"] = $rootPath.'/src/';
$_ENV["config_root"] = $rootPath.'/config/';

$config = include($_ENV["config_root"] . 'config.php');

$request = $_SERVER['REQUEST_URI'];
preg_match("/\/((rxjs)\/)?([a-zA-Z_0-9\s\/\-]{1,20})(\.([a-z]+))?\??(.*)/", $request, $matches);

$page = empty($matches[3]) ? "index" : $matches[3];
$source_type = empty($matches[2]) ? "pages" : $matches[2];

$script = $config[$source_type][$page] ?? "error.php";

session_start($config['session_options']);
foreach($config['lib'] as $lib) {
    require_once($_ENV["source_root"].$lib);
}
ob_start();
include($_ENV["source_root"] . $source_type . "/" . $script);
ob_end_flush();

if($source_type === "pages")
{
    $_SESSION['lastPage'] = $script;
}
