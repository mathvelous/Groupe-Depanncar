<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Depanncar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/mecano-profil.css">

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
            <p class="text-dark">
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star"></i>
            </p>
            <a href="#" class="text-white">
                <p>modifier <i class="fa fa-pencil-alt"></i></p>
            </a>
        </article>
        <article class="text-white text-center">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "depanncar";

            try {
                //for windows
                //$db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, '');
                //for mac
                $bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
            } catch(Exception $e) {
                die("Error: ". $e);
            }

            $save = $bdd->query('SELECT firstname FROM mecano');

            while ($data = $save->fetch()){
                ?>
                <p>
                    <?php
                        echo $data['firstname'];
                    ?>
                </p>
                <?php
            }
            ?>
        </article>
        <a href="#" class="text-white">Mes projets</a>
    </aside>
    <section class="col-10 p-4">
        <div class="w-100 d-flex justify-content-between">
            <h3>Mes demandes</h3>
            <a href="#">
                <h3>Déconnexion</h3>
            </a>
        </div>
        <section>
        </section>
    </section>
</main>
<script>

</script>
</body>
</html>