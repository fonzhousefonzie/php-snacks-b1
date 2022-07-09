<?php 
    $basketballGames = [
        [
            'home' => 'Milano',
            'guest' => 'Cantù',
            'homePoints' => rand(0, 100),
            'guestPoints' => rand(0, 100)
        ],
        [
            'home' => 'Roma',
            'guest' => 'Philadelphia',
            'homePoints' => rand(0, 100),
            'guestPoints' => rand(0, 100)
        ],
        [
            'home' => 'London',
            'guest' => 'Bruxelles',
            'homePoints' => rand(0, 100),
            'guestPoints' => rand(0, 100)
        ],
        [
            'home' => 'Paris',
            'guest' => 'Madrid',
            'homePoints' => rand(0, 100),
            'guestPoints' => rand(0, 100)
        ],
        [
            'home' => 'Berlin',
            'guest' => 'Moscow',
            'homePoints' => rand(0, 100),
            'guestPoints' => rand(0, 100)
        ],
    ];
?>

<?php for($i = 0; $i < count($basketballGames); $i++){ ?>
    <p><?php echo $basketballGames[$i]['home'] . ' - ' . $basketballGames[$i]['guest'] . ' | ' . $basketballGames[$i]['homePoints'] . '-' . $basketballGames[$i]['guestPoints'] ?></p>
<?php } ?>