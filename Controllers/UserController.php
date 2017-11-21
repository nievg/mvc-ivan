<?php

namespace Controllers;

use Core\View\View;
use Core\View\ViewInterface;
use Models\ViewModels\UserProfileViewModel;

class UserController{
    /** @var ViewInterface */
    private $view;

    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

    public function profile( $name, $called){
        $model = new UserProfileViewModel($name, $called);
        $this->view->render('User/profile', $model);
    }

    public function register(){
        $this->view->render();
    }

}

