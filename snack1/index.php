<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$basketTeam = [
    [
        'homeTeam' => 'Olimpia Milano',
        'oppsingTeam' => 'Cantù',
        'homePoints' => 55,
        'opposingPoints' => 60,
    ],
    [
        'homeTeam' => 'Allianz Trieste' ,
        'oppsingTeam' => 'Germani Brescia',
        'homePoints' => 47,
        'opposingPoints' => 59,
    ],
    [
        'homeTeam' => 'Fortitudo Bologna', 
        'oppsingTeam' => 'Dolomiti Trentino',
        'homePoints' => 84,
        'opposingPoints' => 77,
    ],
    [
        'homeTeam' => 'Vanoli Cremona' ,
        'oppsingTeam' => 'Virtus Bologna',
        'homePoints' => 92,
        'opposingPoints' => 91,
    ],

];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista risultati</h2>
    <ul>
        <!-- Stampo la lista dei risultati con il ciclo for -->
        <?php for($i = 0; $i < count($basketTeam); $i++) { ?>
            <!-- Salvo la singola squadra in una variabile -->
            <?php $thisTeam = $basketTeam[$i]; ?>
            
            <li>
                <div>
                     <?php echo $thisTeam['homeTeam']; ?> - <?php echo $thisTeam['oppsingTeam']; ?>
                     | <?php echo $thisTeam['homePoints']; ?> - <?php echo $thisTeam['opposingPoints']; ?>

                </div>

            </li>
            
        <?php }?>
        
    </ul>
    
</body>
</html>