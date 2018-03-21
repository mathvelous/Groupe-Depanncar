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
</head>
<body>
<div>
    <?php include 'header-client.html'?>
</div>
<main class="p-0 d-flex">
    <aside class="col-sm-2 p-4 d-flex flex-column align-items-center">
        <div class="profil-pic d-flex flex-column  align-items-center">
        </div>
        <article class="info-profil d-flex flex-column  align-items-center">
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

            $save = $bdd->query("SELECT * FROM client WHERE email LIKE '" . $_COOKIE['user'] . "'");

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
                    echo $data['email'];
                    ?>
                </p>
                <?php
            }
            ?>
        </article>
        <p class="save-car"> VEHICULES ENREGISTRES </p>
        <div class="card" style="width: 12rem;">
            <div class="img-car"></div>
            <div class="card-body">
                <div class=" car-brand d-flex justify-content-between align-items-center">
                    <strong class="brand" >MINI COOPER</strong>
                    <p class="license-plate"> 936-BZY-57 </p>
                </div>
                <p class="km">555 000km</p>
            </div>
        </div>
        <button class="add-car d-flex align-items-center"> AJOUTER UN VEHICULE <span> + </span></button>
    </aside>
    <section class="col-10 p-4">
        <div class="w-100 d-flex justify-content-between">
            <h3>Ma panne</h3>
            <a id="disconnect" href="#">
                <h3>Déconnexion</h3>
            </a>
        </div>
    </section>

    <script src="../assets/js/cookie.js"></script>
    <script>
        $('#disconnect').on("click", function () {
            setCookie('user',"",0)
            this.setAttribute('href', 'map-client.php')
            this.click()
        })
    </script>
</body>
</html>