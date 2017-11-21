<?php

namespace Controllers;

use Models\ViewModels\UserProfileViewModel;

class UserController{

    public function profile( $name, $called){
        $model = new UserProfileViewModel($name, $called);
        require_once 'Views/User/profile.php';
    }

    public function register(){
        echo '<h1>Ti si v reg formulqra</h1>';
    }

}

