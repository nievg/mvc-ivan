<?php

spl_autoload_register();

$uri = $_SERVER['REQUEST_URI'];

$junk = str_replace(
    basename(__FILE__),
    '',
    $_SERVER['PHP_SELF']
);

$significantPart = str_replace(
    $junk,
    '',
    $uri
);

$uriParts = explode('/', $significantPart);
var_dump($uriParts);

$controllerName = ucfirst($uriParts[0]);
$action = $uriParts[1];

$controller = new $controllerName();
$controller->$action();