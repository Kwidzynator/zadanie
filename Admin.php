<?php

class Admin extends User
{
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
        $this -> is_admin = true;
    }
}