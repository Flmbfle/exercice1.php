<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="traitement.php" method="post" class="row d-flex justify-content-around">
        <!-- NOM PRENOM-->
        <div class="my-2">
            <label for="exampleInputNom" class="form-label">Nom et Prénom<b>*</b></label>
            <input type="text" class="form-control" id="exampleInputNom" name="exampleInputNom" placeholder="Veuillez saisir votre nom" required>
            <div class="text-danger alert alert-danger d-none" role="alert" id="NomPrenomError"></div>
        </div>
        <!-- EMAIL -->
        <div class="col-md-6 my-2">
            <label for="exampleInputEmail" class="form-label">Email<b>*</b></label>
            <input type="email" class="form-control" id="exampleInputEmail" name="exampleInputEmail" placeholder="dave.loper@afpa.fr" required>
            <div class="text-danger alert alert-danger d-none" role="alert" id="EmailError"></div>
            <div id="emailHelp" class="form-text text-black-50">
            Nous< ne partagerons jamais votre email.
            </div>
        </div>
        <!--TELEPHONE-->
        <div class="col-md-6 my-2">
            <label for="exampleInputTel" class="form-label">Téléphone<b>*</b></label>
            <input type="tel" class="form-control" id="exampleInputTel" name="exampleInputTel" placeholder="xx.xx.xx.xx.xx" required>
            <div class="text-danger alert alert-danger d-none" role="alert" id="TelError"></div>
        </div>
        <!--ADRESSE-->
        <div class="my-2">
            <label for="exampleInputAdresse" class="form-label">Adresse<b>*</b></label>
            <input type="text" class="form-control" id="exampleInputAdresse" name="exampleInputAdresse" required>
            <div class="text-danger alert alert-danger d-none" role="alert" id="AdresseError"></div>
        </div>
        <!--CONDITIONS-->
        <div class="row">
            <div class="my-2">
                <input type="checkbox" name="conditions" value="j'accepte le traitement informatique de ce formulaire"  id="conditions" required>
                <span class="fs-6"><b>*</b>J'accepte le traitement informatique de ce formulaire.</span><br>
                <div class="text-danger alert alert-danger d-none" role="alert" id="ConditionError"></div>
            </div>

            <div class="d-flex justify-content-end">
                <input type="reset" value="Annuler" id="btn_annuler" class="btn text-bg-light btn-outline-dark">
                <input type="submit" id="btn_envoyer" class="btn text-bg-light btn-outline-dark mx-2">
            </div>
        </div>
    </form>
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
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>