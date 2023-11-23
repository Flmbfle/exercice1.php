<html>
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
            // Récupérer l'adresse IP du client
            $ipClient = $_SERVER['REMOTE_ADDR'];
    
            // Récupérer l'adresse IP du serveur
            $ipServeur = gethostbyname(gethostname());
            //$ipServeur = $_SERVER['SERVER_ADDR'];  Ne fonctionne pas
    
            // Afficher les adresses IP
            echo "Adresse IP du client : " . $ipClient . "<br>";
            echo "Adresse IP du serveur : " . $ipServeur;
        ?>
    </body>
</html>

