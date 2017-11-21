<?php

namespace Core;

class Application{
    private $controllerName;
    private $action;
    private $parameters;

    public function __construct(string $controllerName,
                                string $action,
                                array $parameters)
    {
        $this->controllerName = $controllerName;
        $this->action = $action;
        $this->parameters = $parameters;
    }

    public function start(){
        $controller = new $this->controllerName();

        call_user_func_array(
            [
                $controller,
                $this->action
            ],
            $this->parameters
        );

    }

}