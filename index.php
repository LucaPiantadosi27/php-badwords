<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> Bad-woords </title>
</head>

<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.

.Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

.Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza (con un design accettabile)
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
(cercate nella documentazione online quale sia la funzione corretta di PHP da utilizzare per sostituire la stringa corretta)
P. S.
Per debuggare la vostra pagina utilizzate la funzione var_dump(), ma una volta completato l'esercizio fate sparire le stampe di debug, scrivete tutto con echo e in maniera ordinata e piacevole per l'utente -->

<body>
    <div class="container">
        <h1>BAD WORDS CENSOR</h1>
        <form action="" method="get">
        <label for="Frase"></label>
        <?php
        echo "TEST"
        ?>
        <input type="text" name="Frase" id="Frase">
        <label for="Frase"></label>
        <input type="text" name="Frase" id="Frase">
        </form>

    </div>

</body>
</html>