<?php

class Client extends User
{
    private string $city;
    private string $state;
    private string $country;

    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
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
        return $this -> city . " " . $this -> state . " " . $this -> country;
    }

}