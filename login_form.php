<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="d-flex justify-content-center flex-wrap bg-dark-subtle">
    
<?php
    echo
    "<h1 class='col-12'>Formulaire d'authentification</h1>";

    echo
    "<form class='d-flex flex-wrap justify-content-center form bg-light m-5 p-2 rounded rounded-5 align-center shadow'>
        <div class='col-7 my-3'>
            <label for='exampleInputEmail' class='form-label'>Email<b>* : </b></label>
            <input type='email' class='form-control' id='exampleInputEmail' name='exampleInputEmail' placeholder='dave.loper@afpa.fr' required>
        </div>

        <div class='col-7 my-3'>
            <label for='mdp' class='form-label'>Mot de passe<b>* : </b></label>
            <input type='text' class='form-control' id='mdp' name='mdp' required>
        </div>
        <div class='align-self-end col-7'>
            <input type='reset' value='Annuler' id='btn_annuler' class='btn text-bg-light btn-outline-dark'>
            <input type='submit' valur=''id='btn_envoyer' class='btn text-bg-light btn-outline-dark mx-2'>
        </div>
    </form>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>