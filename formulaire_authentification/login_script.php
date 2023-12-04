<?php
session_start();

// Les identifiants de l'utilisateur autorisé (à des fins de démonstration)
$authorized_login = 'admin';
$authorized_password = 'admin';

// Vérification des données du formulaire
if (isset($_POST['login']) && isset($_POST['mdp'])) {
    $user_login = $_POST['login'];
    $user_password = $_POST['mdp'];

    // Vérification des identifiants
    if ($user_login === $authorized_login && $user_password === $authorized_password) {
        // Initialisation de la session
        $_SESSION['auth'] = 'ok';
        header('Location: restricted_page.php'); // Redirection vers la page restreinte
        exit();
    } else {
        // Destruction de la session en cas d'échec d'authentification
        session_destroy();
        header('Location: login_form.php?error=1'); // Redirection avec un indicateur d'erreur
        exit();
    }
} else {
    // Redirection si les données du formulaire ne sont pas définies
    header('Location: login_form.php');
    exit();
}
?>
