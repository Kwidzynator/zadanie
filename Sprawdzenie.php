<?php

    $user = new User("Winston", "Smith", "Abdsdbhgsk");

    $user -> whoAmI();

    $client = new Client("John", "Marston", "shuegh");
    $client -> setCity("Black Water");
    $client -> setCountry("Usa");
    $client -> setState("texas");
    echo $client -> getCity();
    echo $client -> getCountry();
    echo $client -> getState();
    echo $client -> location();
    $client -> whoAmI();

    $admin = new Admin("Jack", "Sparrow", "sdgnj");
    $admin -> whoAmI();