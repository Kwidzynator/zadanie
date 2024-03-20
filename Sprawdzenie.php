<?php

require 'User.php';
require 'Client.php';
require 'Admin.php';


    $user = new User("Winston", "Smith", "Abdsdbhgsk");

    $user -> whoAmI();

    $client = new Client("John", "Marston", "shuegh");
    $client -> setCity("BlackWater");
    $client -> setCountry("Usa");
    $client -> setState("texas");
    echo $client -> getCity() . PHP_EOL;
    echo $client -> getCountry() . PHP_EOL;
    echo $client -> getState() . PHP_EOL;
    echo $client -> location() . PHP_EOL;
    $client -> whoAmI();


    $admin = new Admin("Jack", "Sparrow", "sdgnj");
    $admin -> whoAmI();