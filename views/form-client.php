<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Depanncar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/headers.css">

    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include 'header-conn.html';
    ?>
<main class="container-fluid">
    <div id="Form" class="rgba-white">
        <div class="choice-form">
            <a href="form-mecano.php">Mécanicien</a>
            <a href="#">Client</a>
        </div>
        <form id="formClient">
            <div class="first-part">
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp">
                </div>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input name="lastname"  type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp">
                </div>
            </div>
            <div class="last-part">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="form-check">
                    <input name="checkbox" type="checkbox" class="form-check-input" id="checkbox">
                    <label class="form-check-label" for="checkbox">J’accepte les Conditions Générales</label>
                </div>
            </div>
            <button type="submit" class="btn">Enregistrer</button>
        </form>
    </div>
</main>

<script>
    var form = $('#formClient');
    //au submit je lance une fonction
    form.submit(function(e){
        e.preventDefault() //je ne lance pas la fonction par défaut (la page ne se recharge pas)
        console.log($(this))
        //ajax relie back et front sans recharger la page
        //je lance une méthode ajax
        var data = $(this).serialize();
        $.ajax({
            method : 'POST',
            url : 'bddClient.php',
            data : data, /*{name = valeur}*/
            dataType :"json",
            success: function(msg){

            }
        })
    })
</script>
</body>
</html>