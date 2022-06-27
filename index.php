<?php
    // metodo diretto per sostituire una parola nel testo
    // variabile per il testo
    $testo = 'lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet';
    //variabile per sostituire la parola scelta nel testo
    $testo_replaced = str_replace('ipsum', '***', $testo);

    // metodo indiretto con parola scelta dall'utente
    $parola = $_GET['name'];
    // $testo = 'lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet';
    $testo_replaced2 = str_replace($parola, '***', $testo);
    $count = strlen($testo);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Titolo pagina -->
    <title>BadWords</title>
</head>
<body>
    
    <h1>
        Testo base
    </h1>
    <p>
        <?= $testo; ?>
    </p>
    <div>
        <span>Lunghezza testo base</span>
        <strong>
            <?= $count ?>
        </strong>
    </div>

    <form action="" methods="get">
        <label for="name">Scelta Parola da sostituire</label>
        <input type="text" id="name" name="name">
        <button>Sostituisci</button>
    </form>

    <div id="metodi">
        <div id="indiretto">
            <!-- visualizzazione metodo diretto -->
            <h2>
                Testo sostituito
            </h2>
            <p>
                <?= $testo_replaced; ?>
            </p>
            <strong>
                <?= $count ?>
            </strong>
        </div>


        <div id="diretto">
            <!-- visualizzazione metodo con parola scelta dall'utente -->
            <h2>
                Testo sostituito
            </h2>
            <p>
                <?= $testo_replaced2; ?>
            </p>
            <strong>
                <?= $count ?>
            </strong>
        </div>
    </div>
</body>
</html>