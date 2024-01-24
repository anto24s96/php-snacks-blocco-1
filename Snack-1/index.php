<?php $teams = [
    [
        'home_team' => 'Dolomiti Energia Trentino',
        'away_team' => 'Germani Brescia',
        'home_score' => 69,
        'away_score' => 93,
    ],
    [
        'home_team' => 'Estra Pistoia',
        'away_team' => 'Givova Scafati Basket',
        'home_score' => 78,
        'away_score' => 71,
    ],
    [
        'home_team' => 'Happy Casa Brindisi',
        'away_team' => 'Generazione Vincente Napoli Basket',
        'home_score' => 77,
        'away_score' => 80,
    ],
    [
        'home_team' => 'Openjobmetis Varese',
        'away_team' => 'Virtus Segafredo Bologna',
        'home_score' => 69,
        'away_score' => 81,
    ],
    [
        'home_team' => 'Bertram Derthona Tortona',
        'away_team' => 'Umana Reyer Venezia',
        'home_score' => 75,
        'away_score' => 69,
    ],
    [
        'home_team' => 'UNAHOTELS Reggio Calabria',
        'away_team' => 'Vanoli Basket Cremona',
        'home_score' => 78,
        'away_score' => 71,
    ],
    [
        'home_team' => 'Carpeggia Prosciutto Pesaro',
        'away_team' => 'EA7 Emporio Armani Milano',
        'home_score' => 65,
        'away_score' => 85,
    ],
    [
        'home_team' => 'NutriBullet Treviso Basket',
        'away_team' => 'Banco di Sardegna Sassari',
        'home_score' => 77,
        'away_score' => 70,
    ],
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>

<body>
    <h1>Seria A Basket Italia, 17° Giornata</h1>
    <ul>
        <?php foreach ($teams as $team) { ?>
            <li>
                <h2>
                    <?php
                    echo $team['home_team'] . ' VS ' . $team['away_team'] . ' | ' . $team['home_score'] . '-' . $team['away_score'];
                    ?>
                </h2>
            </li>
        <?php } ?>
    </ul>
</body>

</html>