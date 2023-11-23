<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercie 3 PHP</title>
    <style>
        h1 {
            text-decoration-line: underline;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
<?php
    echo "
    <nav>
        <ul>
            <li><a href='exercice1.php'>Exercice 1</a></li>
            <li><a href='exercice2.php'>Exercice 2</a></li>
            <li><a href='exercice3.php'>Exercice 3</a></li>
            <li><a href='exercice4.php'>Exercice 4</a></li>
        </ul>
    </nav>";

    //EXERCICE 1
    echo "<h1>1.Mois de l'année non bissextile :</h1>";
    echo "<table>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";

    $année = array(
        'Janvier' => 31,
        'Février' => 28,
        'Mars' => 31,
        'Avril' => 30,
        'Mai' => 31,
        'Juin' => 30,
        'Juillet' => 31,
        'Août' => 31,
        'Septembre' => 30,
        'Octobre' => 31,
        'Novembre' => 30,
        'Décembre' => 31
    );
    asort($année);

    foreach ($année as $mois => $jours) {
        echo "<tr>";
        echo "<td>$mois</td>";
        echo "<td>$jours</td>";
        echo "</tr>";
    }
    echo "</table>";

    //EXERCICE 2
    echo "<h1>2.Capitales</h1>";
    $capitales = array(

        "Bucarest" => "Roumanie",
    
        "Bruxelles" => "Belgique",
    
        "Oslo" => "Norvège",
    
        "Ottawa" => "Canada",
    
        "Paris" => "France",
    
        "Port-au-Prince" => "Haïti",
    
        "Port-d'Espagne" => "Trinité-et-Tobago",
    
        "Prague" => "République tchèque",
    
        "Rabat" => "Maroc",
    
        "Riga" => "Lettonie",
    
        "Rome" => "Italie",
    
        "San José" => "Costa Rica",
    
        "Santiago" => "Chili",
    
        "Sofia" => "Bulgarie",
    
        "Alger" => "Algérie",
    
        "Amsterdam" => "Pays-Bas",
    
        "Andorre-la-Vieille" => "Andorre",
    
        "Asuncion" => "Paraguay",
    
        "Athènes" => "Grèce",
    
        "Bagdad" => "Irak",
    
        "Bamako" => "Mali",
    
        "Berlin" => "Allemagne",
    
        "Bogota" => "Colombie",
    
        "Brasilia" => "Brésil",
    
        "Bratislava" => "Slovaquie",
    
        "Varsovie" => "Pologne",
    
        "Budapest" => "Hongrie",
    
        "Le Caire" => "Egypte",
    
        "Canberra" => "Australie",
    
        "Caracas" => "Venezuela",
    
        "Jakarta" => "Indonésie",
    
        "Kiev" => "Ukraine",
    
        "Kigali" => "Rwanda",
    
        "Kingston" => "Jamaïque",
    
        "Lima" => "Pérou",
    
        "Londres" => "Royaume-Uni",
    
        "Madrid" => "Espagne",
    
        "Malé" => "Maldives",
    
        "Mexico" => "Mexique",
    
        "Minsk" => "Biélorussie",
    
        "Moscou" => "Russie",
    
        "Nairobi" => "Kenya",
    
        "New Delhi" => "Inde",
    
        "Stockholm" => "Suède",
    
        "Téhéran" => "Iran",
    
        "Tokyo" => "Japon",
    
        "Tunis" => "Tunisie",
    
        "Copenhague" => "Danemark",
    
        "Dakar" => "Sénégal",
    
        "Damas" => "Syrie",
    
        "Dublin" => "Irlande",
    
        "Erevan" => "Arménie",
    
        "La Havane" => "Cuba",
    
        "Helsinki" => "Finlande",
    
        "Islamabad" => "Pakistan",
    
        "Vienne" => "Autriche",
    
        "Vilnius" => "Lituanie",
    
        "Zagreb" => "Croatie"
    
    );

    echo "<h2>1. Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.</h2>";

    //Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
    ksort($capitales);

    foreach ($capitales as $capitale => $pays) {
        echo "$capitale - $pays<br>";
    }

    echo "<h2>2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale</h2>";

    //Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
    asort($capitales);

    foreach ($capitales as $capitale => $pays) {
        echo "$pays - $capitale<br>";
    }

    //Affichez le nombre de pays dans le tableau.
    echo "<h2>3. Affichez le nombre de pays dans le tableau.</h2>";

    $nombreDePays = count($capitales);
    echo "Il y a $nombreDePays pays dans le tableau.";

    
    echo"<h2>4. Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.</h2>";
    // Supprimer du tableau toutes les capitales ne commençant pas par la lettre 'B'
    foreach ($capitales as $capitale => $pays) {
        if (strtoupper(substr($capitale, 0, 1)) !== 'B') {
            unset($capitales[$capitale]);
        }
    }

    // Afficher le contenu du tableau après la suppression
    echo "<h2>Capitales après suppression :</h2>";

    foreach ($capitales as $capitale => $pays) {
        echo "$capitale - $pays<br>";
    }


    //EXERCICE 3
    echo "<h1>3.Départements</h2>";

    $departements = array(
        "Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );
    
    // Trie le tableau par les clés (régions)
    ksort($departements);
    
    echo "<h2>Liste des régions par ordre alphabétique :</h2>";
    
    foreach ($departements as $region => $listeDepartements) {
        $nombreDepartements = count($listeDepartements);
        echo "<h3>$region ($nombreDepartements départements) :</h3>";
        echo "<ul>";
        foreach ($listeDepartements as $departement) {
            echo "<li>$departement</li>";
        }
        echo "</ul>";
    }
?>

</body>
</html>
