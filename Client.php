<?php

class Client extends User
{
    private $city;
    private $state;
    private $country;

    public function __construct($name, $username, $surname)
    {
        parent::__construct($name, $username, $surname);
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function location(){
        return $this -> city && $this -> state && $this -> country;
    }

}