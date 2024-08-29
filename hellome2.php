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
        ],

        "Jordan" => [
            "Gender" => "Male",
            "Age" => "28",
            "Eye Color" => "Hazel",
            "Height" => "6'00",
            "extras" => [
                "Misc" => "Whatever else goes here."
            ],
            "after extras" => "after extras",
            "extras" => [
                "Misc again" => "more stuff that goes here."
            ]
        ]

    ];

    function displayPeople_arr($array) {
        foreach($array as $person => $descriptor) {
            echo("Person: $person\n");
            foreach($descriptor as $key => $value) {
                if (strcasecmp($key, "Extras") == 0) {
                    foreach($value as $key2 => $value) {
                        echo("\t" . ucfirst($key) . ":\n\t\t$key2: $value\n");
                    }
                } else {
                    echo("\t$key: $value\n");
                }
            }
            echo("\n");
        }
    }

    displayPeople_arr($people);