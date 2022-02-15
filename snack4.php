<!-- Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$numberList= array();
while(count($numberList) < 15) {
    $randomNum = rand(1, 50);
    if(!in_array($randomNum, $numberList)) {
        $numberList[] = $randomNum;
    }
}
var_dump($numberList);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>
    <?php
      for($i = 0; $i < count($numberList); $i++){
        echo '<h2>'. $numberList[$i] .'</h2>';
    } 
    ?>


</body>

</html>
