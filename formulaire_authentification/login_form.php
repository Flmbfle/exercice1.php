<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="d-flex justify-content-center flex-wrap bg-dark-subtle">
    
    <h1 class='col-12'>Formulaire d'authentification</h1>

    <form action="login_script.php" method="post" class='d-flex flex-wrap justify-content-center form bg-light m-5 p-2 rounded rounded-5 align-center shadow'>
    <div class='col-7 mt-3'>
        <label for="login" class="form-label">Email (pseudo) :</label>
        <input type="text" id="login" name="login" placeholder="dave.loper@afpa.fr" class="form-control" required><br>
    </div>
    <div class='col-7'>
        <label for="mdp" class="form-label">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" class="form-control" required><br>
    </div>
    <div class='align-self-end col-7'>
            <input type='reset' value='Annuler' id='btn_annuler' class='btn text-bg-light btn-outline-dark'>
            <input type='submit' value='Se connecter'id='btn_envoyer' class='btn text-bg-light btn-outline-dark mx-2'>
        </div>
    </form>       

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>