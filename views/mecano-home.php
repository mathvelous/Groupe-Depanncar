<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Depanncar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/headers.css">
    <link rel="stylesheet" href="../assets/css/mecano-home.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
                    //$db = new PDO(‘mysql:host=’ . $servername . ‘;dbname=’ . $dbname . ‘;charset=utf8’, $username, ‘’);
                    //for mac
                    $db = new PDO(‘mysql:host=’ . $servername . ‘;dbname=’ . $dbname . ‘;charset=utf8’, $username, $password);
                       } catch(Exception $e) {
                    die(“Error: “. $e);
                       }

                $save = $db->query(‘SELECT content FROM card ORDER BY position’);

                       while ($data = $save->fetch()){
                           ?>
                               <h6>
                                   <?php
                                   echo $this[‘firstname’] . " " . $this[‘lastname’];
                                   ?>
                               </h6>
                           <?php
                       }
                   ?>
            <p><?php
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "depanncar";

                try {
                    //for windows
                    //$db = new PDO(‘mysql:host=’ . $servername . ‘;dbname=’ . $dbname . ‘;charset=utf8’, $username, ‘’);
                    //for mac
                    $db = new PDO(‘mysql:host=’ . $servername . ‘;dbname=’ . $dbname . ‘;charset=utf8’, $username, $password);
                       } catch(Exception $e) {
                    die(“Error: “. $e);
                       }

                $save = $db->query(‘SELECT content FROM card ORDER BY position’);

                       while ($data = $save->fetch()){
                ?>
            <p>
                <?php
                echo $this[‘phone’];
                ?>
            </p>
        <?php
        }
        ?>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "depanncar";

            try {
                //for windows
                //$db = new PDO(‘mysql:host=’ . $servername . ‘;dbname=’ . $dbname . ‘;charset=utf8’, $username, ‘’);
                //for mac
                $db = new PDO(‘mysql:host=’ . $servername . ‘;dbname=’ . $dbname . ‘;charset=utf8’, $username, $password);
                       } catch(Exception $e) {
                die(“Error: “. $e);
                       }

            $save = $db->query(‘SELECT content FROM card ORDER BY position’);

                       while ($data = $save->fetch()){
                           ?>
                               <p>
                                   <?php
                                   echo $this[‘email’];
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
            <h5>Mes demandes</h5>
            <a href="#" class="text-blue">
                <h5>Déconnexion</h5>
            </a>
        </div>
        <section>
            <article class="card col-sm-1 col-lg-3 col-md-6 p-3">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5>Nom client</h5>
                        <p>date de demande <br>type de voiture</p>

                    </div>
                    <div class="car-picture"><img src="../assets/images/car-pic.jpg" alt="#"></div>
                </div>
                <div class="mb-3">
                    <h6>Description de la panne</h6>
                    <p>ici description de la panne</p>
                    <a href="#" class="more">plus d'infos</a>
                </div>
                <div class="d-flex row wrap align-items-center justify-content-around">
                    <button class="btn-accept m-2">
                        Accepter
                    </button>
                    <button class="btn-refuse m-2">
                        Refuser
                    </button>
                </div>
            </article>
        </section>
    </section>
</main>
</body>
</html>