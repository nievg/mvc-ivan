<?php

namespace Core\View;


class View implements ViewInterface
{
    private $controllerName;
    private $actionName;

    public function __construct($controllerName,
                                $actionName)
    {
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;
    }

    public function render($viewName = null, $model = null)
    {
        require_once 'views/' . $viewName . '.php';
    }
}
