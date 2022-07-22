<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Creo il mio array per i numeri vuoto
$numArray = [];

// Applico la condizione while
// Finché l'array non ha 15 elementi continua a pushare numeri 
while( count($numArray) < 15 ){
    $randomNum = rand(1, 100);


    // Applico la condizione che se un numero è già presente nel array non lo pusho 
    if(!in_array($randomNum, $numArray)){
        $numArray[] = $randomNum;

    }
}

?>

<!-- Stampo in pagina l'array di numeri -->
<ul>
     <?php for($i = 0; $i < count($numArray); $i++){ ?> 
        <li>
            <?php echo $numArray[$i]; ?>
        </li>

     <?php }?>

</ul>

    
</body>
</html>