<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php
$posts = [
    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Gigio Gigi',
            'text' => 'Testo post 2'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Ron Rosso',
            'text' => 'Testo post 3'
        ]
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Marco Marchi',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Beppi Di Caprio',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Gilda Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>

<body>
    <?php
    foreach ($posts as $date => $value) {
        echo "<h2> $date <br/> </h2>";
        foreach ($value as $v) {
            $post = $v['title'] . '<br/>';
            $post .= $v['author'] . '<br/>';
            $post .= $v['text'] . '<br/>';
            echo "<p> $post </p>";
        }
    }
    ?>

</body>

</html>
