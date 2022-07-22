<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

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
    //Leggo nel URL i valori dati tramite il GET e li salvo in una variabile
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    // Stabilisco la seguente condizione:
      // La lunghezza della stringa del nome deve essere maggiore di 3
      // Nella email deve contenere sia il . e la @
      // L'età deve essere un dato di tipo numerico 

    // Se le condizioni sopra indicate si verificano tutte il risultato sarà positivo altrimenti negativo  
    $userMessage;
    if(strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age)){
        $userMessage = 'Accesso riuscito';
    } else {
        $userMessage = 'Accesso negato';
    }

?>

<!-- Stampo in pagina il risultato -->
<div> <?php echo $userMessage; ?></div>


    
</body>
</html>

