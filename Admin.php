<?php

class Admin extends User
{
    public function __construct($name, $username, $surname)
    {
        parent::__construct($name, $username, $surname);
        $this -> is_admin = true;
    }
}