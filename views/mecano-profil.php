<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Depanncar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
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
            $servername = "mysql-mathvelous.alwaysdata.net";
            $username = "155185_depanncar";
            $password = "totolola42";
            $dbname = "mathvelous_depanncar";

            try {
                //for windows
                //$db = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, '');
                //for mac
                $bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
            } catch(Exception $e) {
                die("Error: ". $e);
            }

            $save = $bdd->query("SELECT * FROM mecano WHERE email LIKE '" . $_COOKIE['mecano'] . "'");

            while ($data = $save->fetch()){
                ?>
                <div class="row justify-content-center">
                    <p class="mr-2">
                        <?php
                            echo $data['firstname'];
                        ?>
                    </p>
                    <p>
                        <?php
                        echo $data['lastname'];
                        ?>
                    </p>
                </div>
                <p>
                    <?php
                    echo $data['phone'];
                    ?>
                </p>
                <p>
                    <?php
                    echo $data['email'];
                    ?>
                </p>
                <?php
            }
            ?>
        </article>
        <a href="mecano-profil-projet.php" class="text-white">Mes projets</a>
    </aside>
    <section class="col-10 p-4">
        <div class="w-100 mydemandes">
            <div class="d-flex justify-content-between">
                <h3>Mes demandes</h3>
                <a id="disconnect" href="#">
                    <h3>Déconnexion</h3>
            </div>
            </a>
            <article class="card-demande">
                <div class="card-demande__thumb">
                    <img src="../assets/images/car-pic.jpg" alt="Photo card mini couper rouge" >
                </div>
                <div class="card-demande_chat">
                    <a href="chat-client.php"><img src="../assets/images/icon_chat.svg" alt="chat icon"></a>
                </div>
                <div class="card-demande__body">
                    <h2 class="card-demande__title"><a href="#">NOM DU CLIENT</a></h2>
                    <p class="card-demande__subtitle-1">LIEU</p>
                    <p class="card-demande__subtitle">Info Voiture</p>
                    <h3 class="card-demande__title m-t">DESCRIPTION DE LA PANNE</h3>
                    <p class="card-demande__description">Description de la panne. Gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit.</p>
                </div>
                <footer class="card-demande__footer">
                    <button>ACCEPTER</button>
                    <button>REFUSER</button>
                </footer>
            </article>
        </div>
    </section>
</main>

<script src="../assets/js/cookie.js"></script>
<script>
    $('#disconnect').on("click", function () {
        setCookie('mecano',"",0)
        this.setAttribute('href', '../index.php')
        this.click()
    })
</script>
</body>
</html>