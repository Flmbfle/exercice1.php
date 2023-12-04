<?php
session_start();

// Vérification de la session auth
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 'ok') {
    header('Location: login_form.php'); // Redirection vers la page de connexion
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
</head>
<body>
    <h2>Page de connexion</h2>
    <p>Cette page est accessible uniquement si vous êtes authentifié.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>
