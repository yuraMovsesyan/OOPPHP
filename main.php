<?php
    require('Farm.php');

    include 'Animals/Cow.php';
    include 'Animals/Chicken.php';
    include 'Animals/Sheep.php';


    $Farm = new Farm();

    for ($i = 0; $i < 10; $i++)
        $Farm->Add(new Cow());

    for ($i = 0; $i < 20; $i++)
        $Farm->Add(new Chicken());

    $Farm->RollCall();

    for ($i = 0; $i < 7; $i++)
        $Farm->Collect();

    $Farm->RollCall();

    echo "> we went to the market, bought animals\n";

    $Farm->Add(new Cow());

    for ($i = 0; $i < 5; $i++)
        $Farm->Add(new Chicken());

    for ($i = 0; $i < 7; $i++)
        $Farm->Collect();

    $Farm->RollCall();

    echo "> Won a Sheep xD\n";

    $Farm->Add(new Sheep());

    $Farm->Collect();

    $Farm->RollCall();
?>