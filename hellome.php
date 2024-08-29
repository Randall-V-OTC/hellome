<?php

    // a variable to hold my name
    $name = "Randall";

    // a variable that holds an associate array (key value pairs) that has some info about myself
    $associate_arr = [
        "degree" => "CIS (AAS)",
        "transportation_mode" => "car",
        "github_repo" => "https://github.com/Randall-V-OTC/hellome.git"
    ];

    // display my name in the terminal
    echo($name . "\n");

    // display the associate array
    print_r($associate_arr);

    $people = [

        "Randall" => [
            "Gender" => "Male",
            "Age" => "33",
            "Eye Color" => "Blue"
        ],

        "Billy" => [
            "Gender" => "Male",
            "Age" => "43",
            "Eye Color" => "Brown"
        ],

        "Chris" => [
            "Gender" => "Male",
            "Age" => "39",
            "Eye Color" => "Brown",
            "Height" => "5'07"
        ]

    ];

    foreach($people as $person => $item) {
        echo("Person: $person, item: $item");
    }