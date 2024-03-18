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
    <div class="container py-4 ">
        <h1>PHP Bad-words Censor</h1>

        <form action="censor.php">
            <div class="mb-3">
                <label for="paragraph" class="form-label">Paragrafo</label>
                <textarea class="form-control" name="paragraph" id="paragraph" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="censor-word" class="form-label">Parola da censurare</label>
                <input type="text" name="censor-word" class="form-control" id="censor-word" placeholder="***">
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>