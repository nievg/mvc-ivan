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

$controllerName = array_shift($uriParts);
$action = array_shift($uriParts);

$app = new \Core\Application(
    $controllerName,
    $action,
    $uriParts
);

$app->start();