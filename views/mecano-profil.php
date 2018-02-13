<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Depanncar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/headers.css">
    <link rel="stylesheet" href="../assets/css/profils.css">

    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>
<body>
<?php
    include 'header-mecano.html';
?>
<main class="container-fluid p-0 d-flex">
    <aside class="col-sm-2 p-4 d-flex flex-column align-items-center">
        <article class="text-white d-flex flex-column align-items-center">
            <div class="pp-large pp-meca mb-3"></div>
            <p>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star"></i>
            </p>
            <a href="">
                <p>modifier <i class="fa fa-pencil-alt"></i></p>
            </a>
        </article>
        <article class="text-white">
            <h6>Nom Prénom</h6>
            <p>adresse</p>
            <p>téléphone</p>
            <p>mail</p>
        </article>
        <a href="#">Mes projets</a>
    </aside>
    <section class="col-10 p-4">
        <div class="w-100 d-flex justify-content-between">
            <h5>Mes demandes</h5>
            <a href="#">
                <h5>Déconnexion</h5>
            </a>
        </div>
        <section>
            <article class="card col-sm-3 p-3">
                <div class="d-flex justify-content-around">
                    <div>
                        <h5>Nom client</h5>
                        <p>date de demande <br>type de voiture</p>

                    </div>
                    <div>img voiture</div>
                </div>
                <div class="mb-3">
                    <h6>Description de la panne</h6>
                    <p>ici description de la panne</p>
                    <button class="btn btn-outline-info btn-sm">plus d'infos</button>
                </div>
                <div class="d-flex row wrap align-items-center justify-content-between">
                    <button class="btn btn-success m-1">
                        accepter
                    </button>
                    <button class="btn btn-danger m-1">
                        refuser
                    </button>
                </div>
            </article>
        </section>
    </section>
</main>
</body>
</html>