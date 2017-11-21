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

$controllerName = ucfirst($uriParts[0]);
$action = $uriParts[1];

$controller = new $controllerName();
$controller->$action();

// taka se vika funkciq
call_user_func_array(
    'ime_na_funkciq',
    [val,val2,val3]
);

// taka se vika method na obekt
call_user_func_array(
  [obekt , method],
  [args]
);
