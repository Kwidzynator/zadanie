<?php

class User
{
    public $name;
    public $surname;
    public $username;
    protected $is_admin = false;
    public function __construct($name, $username, $surname){
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> username = $username;
    }

    protected function isAdmin()
    {
        return $this->is_admin;
    }

    protected function whoAmI(){
        echo $this -> name . " " . $this -> surname . " ";
        if($this->isAdmin()){
            echo "admin";
        }
        echo PHP_EOL;
    }

}