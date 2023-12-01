<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 PHP</title>
</head>
<body>
    <?php
    echo 
    "<nav>
        <ul>
            <li><a href='exercice1.php'>Exercice 1</a></li>
            <li><a href='exercice2.php'>Exercice 2</a></li>
            <li><a href='exercice3.php'>Exercice 3</a></li>
            <li><a href='exercice4.php'>Exercice 4</a></li>
            <li><a href='exercice5.php'>Exercice 5</a></li>
            <li><a href='exercice6.php'>Exercice 6</a></li>
            <li><a href='exercice7.php'>Exercice 7</a></li>
            <li><a href='exercice8.php'>Exercice 8</a></li>
            <li><a href='exercice9.php'>Exercice 9</a></li>
            <li><a href='exercice10.php'>Exercice 10</a></li>
        </ul>
    </nav>";

    echo"<h2>1. Trouvez le numéro de semaine de la date suivante : 14/07/2019.</h2>";
        $date = new DateTime('2019-07-14');
        $numeroSemaine = $date->format('W');
        echo "Numéro de semaine pour le 14/07/2019 : $numeroSemaine\n";

    echo"<h2>2. Combien reste-t-il de jours avant la fin de votre formation.</h2>";
        $dateActuelle = new DateTime('');
        $dateFin = new DateTime('2023-12-08');
        $interval = $dateActuelle->diff($dateFin);
        echo "Il reste " . $interval->days . " jours avant la fin de la formation.\n";

    echo"<h2>3. Comment déterminer si une année est bissextile ?</h2>";    
        $annee = 2020;
        if ((($annee % 4 == 0) && ($annee % 100 != 0)) || ($annee % 400 == 0)) {
            echo "$annee est une année bissextile.\n";
        } else {
            echo "$annee n'est pas une année bissextile.\n";
        }

    echo"<h2>4. Montrez que la date du 32/17/2019 est erronée.</h2>";
        try {
            $dateErronee = new DateTime('2019-17-32');
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "\n";
        }

    echo"<h2>5. Affichez l'heure courante sous cette forme : 11h25.</h2>";    
        $heureCourante = new DateTime();
        $heureFormatee = $heureCourante->format('H\hi');
        echo "Heure courante : $heureFormatee\n";

    echo"<h2>6. Ajoutez 1 mois à la date courante.</h2>";
        $dateCourante = new DateTime();
        $dateCourante->add(new DateInterval('P1M'));
        echo "Date courante + 1 mois : " . $dateCourante->format('d/m/Y') . "\n";

    echo"<h2>7. Que s'est-il passé le 1000200000</h2>";
        $timestamp = 1000200000;
        $date = new DateTime("@$timestamp");
        echo "La date correspondante au timestamp 1000200000 est : " . $date->format('d/m/Y H:i:s') . "\n";

    ?>
</body>
</html>