<?php
echo 'Az sym index';

//var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
$junk = str_replace(
    basename(__FILE__),
    '',
    $_SERVER['PHP_SELF']
);
//var_dump($junk);

$significantPart = str_replace(
    $junk,
    '',
    $uri
);
//var_dump($significantPart);

$uriPart = explode('/', $significantPart);


