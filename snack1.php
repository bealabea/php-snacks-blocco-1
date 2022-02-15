<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60 -->

<?php

$basketMatches = [
    [
        'homeTeam' => 'Milano',
        'awayTeam' => 'Cantù',
        'homeTpoint' => 50,
        'awayTpoint' => 60,
    ],
    [
        'homeTeam' => 'Verona',
        'awayTeam' => 'Torino',
        'homeTpoint' => 40,
        'awayTpoint' => 55,
    ],
    [
        'homeTeam' => 'Genova',
        'awayTeam' => 'Emilia',
        'homeTpoint' => 50,
        'awayTpoint' => 60,
    ],
];

var_dump($basketMatches[0]['homeTeam']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <h2>
        <?php

        for ($i = 0; $i < count($basketMatches); $i++) {
            echo $basketMatches[$i]['homeTeam'] . ' - ' . $basketMatches[$i]['awayTeam'] . ' | ' . $basketMatches[$i]['homeTpoint'] . '-' . $basketMatches[$i]['awayTpoint'] . '<br/>';
        };

        ?>
    </h2>
</body>

</html>