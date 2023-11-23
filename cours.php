<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récap cours php</title>
</head>
<body>
    <?php
        //Tri ordre alphabétique
        $nom = array('franck','laurent','caroline','magalie','vero');
        sort($nom);

        for ($nb1=0;$nb1<=count($nom)-1; $nb1++)
        {
            echo "$nom[$nb1]<br>";
        }


        //TRI ordre décroissant
        $nom = array('franck','laurent','caroline','magalie','vero');
        rsort($nom);
        
    
        for ($nb1=0;$nb1<=count($nom)-1; $nb1++)
        {
            echo "$nom[$nb1]<br>";
        }

        //Compte le nombre d'éléments
        $nb = count($nom);
        echo"Le tableau contient " .$nb. " éléments";
    ?>
</body>
</html>
