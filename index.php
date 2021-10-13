<?php $articolo= "
I portuali di Trieste avranno i tamponi gratis. Così l’Agenzia per il lavoro portuale (Alpt) dello scalo giuliano ritiene
di poter arginare la protesta avviata dai “camalli” triestini
(200 persone, il 40% delle quali non è vaccinato)
che hanno minacciato di bloccare il porto il 15 ottobre se il Governo non ritirerà l’obbligo di green pass.

Non solo. Un comunicato della Prefettura, 
al termine di un tavolo di confronto fra aziende, sindacati e il Prefetto di Trieste, 
Valerio Valenti, ha sancito la disponibilità di tutti i terminalisti a farsi carico dei tamponi per i
loro dipendenti.";
 
$badword = $_GET['badword'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p> <?php echo $articolo ; ?>
    </p>

    <h3> <?php echo strlen($articolo); ?>
    </h3>

    <h1>parola censurata: <?php echo $badword; ?>
    </h1>

    <p>
        <?php $articoloCensurato = str_replace($badword, "***", $articolo);
        echo ($articoloCensurato) ?>
    </p>

    <h3>lunghezza paragrafo: <?php echo strlen($badword, "***", $articolo); ?>
    </h3>

    
</body>
</html>