<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Depanncar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/chat.css">

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
    include 'header-client.html';
?>
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
    if(isset($_POST['submit'])){
        if(!empty($_POST['message'])){

            $message = $_POST['message'];
            $insertion = $bdd->prepare('INSERT INTO chat VALUES("", :message)');
            $insertion->execute(array(
                'message' => $message
            ));
        }
    }

if(!empty($_GET['id'])){ // on vérifie que l'id est bien présent et pas vide

    $id = (int) $_GET['id']; // on s'assure que c'est un nombre entier

    // on récupère les messages ayant un id plus grand que celui donné

    $requete = $bdd->prepare('SELECT * FROM messages WHERE id > :id ORDER BY id DESC');

    $requete->execute(array("id" => $id));

    $messages = null;

    // on inscrit tous les nouveaux messages dans une variable

    while($donnees = $requete->fetch()){

        $messages .= "<p id=\"" . $donnees['id'] . "\">" . $donnees['pseudo'] . " dit : " . $donnees['message'] . "</p>";

    }
    echo $messages; // enfin, on retourne les messages à notre script JS


}
?>

<main class="container-fluid p-0 d-flex">
    <section class="contacts col-sm-2 p-0">
        <div class="text-white d-flex justify-content-center m-3">
            <h5>Mes contacts</h5>
        </div>
        <a href="#" class="tchat">
            <div class="pp"><img src="../assets/images/mecano-profil.jpg" alt=""></div>
            <div>
                <h6>
                    Patrick Alvarez
                </h6>
                <p>Saint-Germain-En-Laye</p>
            </div>
        </a>
        <a href="#" class="tchat">
            <div class="pp"><img src="../assets/images/mecano-profil.jpg" alt=""></div>
            <div>
                <h6>Pierre Molineux</h6>
                <p>Plaisir</p>
            </div>
        </a>
        <a href="#" class="tchat">
            <div class="pp"><img src="../assets/images/mecano-profil.jpg" alt=""></div>
            <div>
                <h6>François Petitjean</h6>
                <p>Versailles</p>
            </div>
        </a>
    </section>

    <section class="col-sm-10">
        <div class="chat-box">
            <div class="chat-result">
                <div class="meca-message">
                    <div class="col-sm-6 d-flex flex-row">
                        <div class="d-flex justify-content-end align-items-center picture">
                            <div class="pp"><img src="../assets/images/mecano-profil.jpg" alt="profil du mécancien"></div>
                        </div>
                        <div class="text">
                            <p>Bonjour, j'accepte votre demande</p>
                        </div>
                    </div>
                </div>
                <div class="client-message ">
                    <?php
                        $servername = "mysql-mathvelous.alwaysdata.net";
                        $username = "155185_depanncar";
                        $password = "totolola42";
                        $dbname = "mathvelous_depanncar";
                        try {
                            $bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
                        } catch(Exception $e) {
                            die("Error: ". $e);
                        }

                        $requete = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 0,5');
                            while($data = $requete->fetch()){
                        ?>
                        <div class="col-sm-6 d-flex flex-row">
                        <div class="text">
                            <p>
                                <?php
                                    echo $data['message'] . '<br>';
                                ?>
                            </p>
                        </div>
                        </div>
                        <?php
                            }
                        ?>
                </div>

            </div>
            <!---- form chat ----->
            <form id="formChat" method="POST" action="chat-client.php">
                <div class="message p-3">
                    <textarea name="message" id="message" placeholder="tapez votre message"></textarea>
                </div>
                <input type="submit" name="submit" value="Envoyez votre message !" id="envoi" />
            </form>
        </div>
    </section>
</main>

<script src="../assets/js/cookie.js"></script>
<script>
    $(document).ready(function () {

        //Envoi form chat
        $('#envoi').click(function(e){

            e.preventDefault()

            var message = $('#message').val()

            if($('#message').val() != ""){ // on vérifie que les variables ne sont pas vides
                $.ajax({
                    type : "POST",
                    url : "chat-client.php", // on donne l'URL du fichier de traitement
                    data : message, // et on envoie nos données
                    success: function(){

                    }
                });
            }
        }

        //Charger les messages
        function charger(){

            setTimeout( function(){

                var premierID = $('#messages p:first').attr('id'); // on récupère l'id le plus récent

                $.ajax({
                    url : "chat-client.php?id=" + premierID, // on passe l'id le plus récent au fichier de chargement
                    type : GET,
                    success : function(html){
                        $('#messages').prepend(html);
                    }
                });

                charger();

            }, 5000);

        }
        charger();

        //Modal
        var form = $('#form-modal');

        form.submit(function(e){
            e.preventDefault()

            var data = $(this).serialize();
            $.ajax({
                method : 'POST',
                url : 'bddConnC.php',
                data : data, /*{name = valeur}*/
                success: function(data){

                    if(data != ""){
                        setCookie('user', data, 10)

                    }
                }
            })
        })


        //Link Profil
        $('#linkProfil').on("click", function () {
            if(getCookie("user") != ""){
                this.setAttribute('href', 'client-profil.php')
                this.click()
            }else {
                $('#buttonConn2').click()
            }
        })

        //Link chat
        $('#linkChat').on("click",function () {
            if(getCookie("user") != ""){
                this.setAttribute('href', 'chat-c lient.php')
                this.click()
            }else {
                $('#buttonConn2').click()
            }
        })



    })
</script>
</body>
</html>