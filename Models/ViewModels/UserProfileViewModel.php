<?php

namespace Models\ViewModels;

class UserProfileViewModel
{
    private $name;
    private $called;

    public function __construct(string $name, string $called){
        $this->name = $name;
        $this->called = $called;
    }

    public function getName(){
        return $this->name;
    }

    public function getCalled(){
        return $this->called;
    }


}