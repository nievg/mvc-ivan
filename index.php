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

$controllerName = ucfirst(array_shift($uriParts));
$action = array_shift($uriParts);

$controller = new $controllerName();

//$a = array_shift($arr); - присвоява първия елемент от масива
//на променливата а и го изтрива от масива

call_user_func_array(
  [
      $controller,
      $action
  ],
  $uriParts
);
