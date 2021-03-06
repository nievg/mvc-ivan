<?php

namespace Core;

class Application{
    private $controllerName;
    private $actionName;
    private $parameters;

    public function __construct(string $controllerName,
                                string $actionName,
                                array $parameters)
    {
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;
        $this->parameters = $parameters;
    }

    public function start(){

        $controllerName =
            'Controllers\\'
            .ucfirst($this->controllerName)
            .'Controller';

        $controller = new $controllerName();

        call_user_func_array(
            [
                $controller,
                $this->actionName
            ],
            $this->parameters
        );
    }

}