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
        $view = new View();
        $view->render('User/profile', $model);
    }

    public function register(){
        $view = new View();
        $view->render('User/register');
    }

}

