<?php
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

