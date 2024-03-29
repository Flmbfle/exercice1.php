<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 PHP</title>
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


    //EXERCICE 1
    echo "<h2>1.Ecrivez une fonction qui permette de générer un lien.</h2>";
    function genererLien($lien, $titre)
    {
        $lienHTML = "<p><a href='$lien'>$titre</a></p>";
        return $lienHTML;
    }

    // Exemple d'utilisation de la fonction
    $monLien = genererLien("https://www.reddit.com", "Reddit Hug <br><br>");
    echo $monLien;


    //EXERCICE 2
    echo "<h2>2.Ecrivez une fonction qui calcul la somme des valeurs d'un tableau.</h2>";
    $tab = array(4, 3, 8, 2);
    function somme($tab)
    {
        $tabSomme = array_sum($tab);
        return $tabSomme;
    }
    $resultat = somme($tab);
    echo "<p>La somme des valeurs du tableau est = $resultat</p>";


    //EXERCICE 3
    echo "<h2>3.Créer une fonction qui vérifie le niveau de complexité d'un mot de passe.</h2>";

    function complex_password($motDePasse) {
        // Vérifier la longueur
        $longueur = strlen($motDePasse);
        if ($longueur < 8) {
            return false;
        }

        // Vérifier au moins 1 chiffre
        if (!preg_match('/[0-9]/', $motDePasse)) {
            return false;
        }

        // Vérifier au moins une majuscule et une minuscule
        if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
            return false;
        }

        // Si toutes les conditions sont remplies, retourner true
        return true;
    }

    $resultat = complex_password("Top");
    echo $resultat ? "<p>Mot de passe valide</p>" : "<p>Mot de passe invalide</p>";
    
    ?>
</body>
</html>