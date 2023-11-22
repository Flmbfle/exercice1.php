<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 PHP</title>
</head>

<body>
    <?php
    echo '<style>
        table {
            background-color : white ;
            text-align: center ;
            border: black;
            border-style: solid;
        }
        th {
            padding: 15px;
            border: black;
            border-style: solid;
        }
        td {
            border: grey;
            border-style: solid;
        }
        tr {
            border: black;
            border-style: solid;
            background-color: whitesmoke;
        }
        
    </style>';
    echo "<h2>Nombres impairs entre 0 et 150 : </h2>";

    for ($i = 1; $i <= 150; $i += 2) {
        echo $i . " ";
    }

    echo "<h2>Ecrire 500 fois :</h2>";
    $nb = 1;
    while ($nb <= 500) {
        echo "$nb .Je dois faire des sauvegardes régulières de mes fichiers \n";
        $nb++;
    };

    echo "<h2>Table de multiplication</h2>";

    echo "<table>";
    echo "<tr><th>&nbsp;</th>"; // Cellule vide pour l'angle supérieur gauche de la table

    // En-têtes de colonnes
    for ($col = 1; $col <= 9; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    // Corps de la table
    for ($row = 1; $row <= 9; $row++) {
        echo "<tr>";
        echo "<th>$row</th>"; // En-tête de ligne
        for ($col = 1; $col <= 9; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    ?>
</body>

</html>