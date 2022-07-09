<?php 
    $class = [
        [
            "Nome" => "Mario",
            "Cognome" => "Rossi",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Giorgio",
            "Cognome" => "Rossi",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Giorgio",
            "Cognome" => "Poveracci",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Chiara",
            "Cognome" => "Fischietto",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Aldo",
            "Cognome" => "Aldi",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Felice",
            "Cognome" => "Mastronzo",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Ajeje",
            "Cognome" => "Brazorf",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Piero",
            "Cognome" => "Peluria",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Pino",
            "Cognome" => "Cammino",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
        [
            "Nome" => "Marino",
            "Cognome" => "Peluria",
            "Voti" => [
                "Matematica" => rand(0, 10),
                "Italiano" => rand(0, 10),
                "Storia" => rand(0, 10),
                "Scienze" => rand(0, 10),
                "Geografia" => rand(0, 10)
            ]
        ],
    ];

    for ($i = 0; $i < count($class); $i++){
        echo $class[$i]["Nome"] . " " . $class[$i]["Cognome"] . "<br>Media voti: " . array_sum($class[$i]["Voti"]) / count($class[$i]["Voti"]) . "<br><br>";
    }
?>