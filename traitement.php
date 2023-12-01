<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs du formulaire en utilisant $_REQUEST
    $nom = isset($_REQUEST["exampleInputNom"]) ? $_REQUEST["exampleInputNom"] : "";
    $email = isset($_REQUEST["exampleInputEmail"]) ? $_REQUEST["exampleInputEmail"] : "";
    $telephone = isset($_REQUEST["exampleInputTel"]) ? $_REQUEST["exampleInputTel"] : "";
    $adresse = isset($_REQUEST["exampleInputAdresse"]) ? $_REQUEST["exampleInputAdresse"] : "";
    $conditionsAcceptees = isset($_REQUEST["conditions"]) ? $_REQUEST["conditions"] : "";

    // Affiche les valeurs
    echo "Nom et Prénom : " . $nom . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Téléphone : " . $telephone . "<br>";
    echo "Adresse : " . $adresse . "<br>";
    echo "Conditions acceptées : " . ($conditionsAcceptees ? "Oui" : "Non") . "<br>";
} else {
    // Si le formulaire n'a pas été soumis, affiche un message d'erreur
    echo "Le formulaire n'a pas été soumis correctement.";
}
?>
