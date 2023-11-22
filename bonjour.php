<html>
    <body>
        <?php
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

