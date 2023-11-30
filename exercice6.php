<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exercice 6 PHP</title>
</head>
<body class="p-3">
    <?php

        $contenuf = file ("/home/flambi/Bureau/exercice/liens.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        // Vérifie si le fichier a été lu avec succès 
        if ($contenuf !== false) {
            echo "<h1>1. Lecture d'un fichier</h1><ul>"; // affiche la liste des sites
            foreach ($contenuf as $site) { // Parcourt chaque ligne du fichier et crée un lien hypertexte pour chaque site
                echo "<li><a href='$site' target='_blank'>$site</a></li>";
            }
            echo "</ul>";
        } 
        else {
           echo "Erreur lors de la lecture du fichier."; // message d'alerte
        };

        // Ecercice 2

        echo "<h1>2. Récupération d'un fichier distant</h1>";
        $customers = file ("/home/flambi/Bureau/exercice/customers.csv");
        //Vérifie si le fichier a été lu avec succès
        if ($customers !== false) {
            echo 
            "<table class='table table-light border border-black'>
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Ville</th>
                        <th>Pays</th>
                    </tr>
                </thead>
                </tbody>"; 

            foreach ($customers as $ligne) {
                // Utiliser str_getcsv pour analyser chaque ligne en tant que tableau CSV
                $utilisateur = str_getcsv($ligne);

                $prenom = $utilisateur[0] ;
                $nom = $utilisateur[1] ;
                $email = $utilisateur[2] ;
                $telephone = $utilisateur[3] ;
                $ville = $utilisateur[4] ;
                $pays = $utilisateur[5] ;

                echo
                "<tr>
                    <td>$prenom</td>
                    <td>$nom</td>
                    <td>$email</td>
                    <td>$telephone</td>
                    <td>$ville</td>
                    <td>$pays</td>    
                </tr>";
            };
            echo"</tbody></table>";
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>