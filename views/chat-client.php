<?php
session_start();
?>
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
                    <div class="col-sm-6 d-flex flex-row-reverse">
                        <div class="d-flex justify-content-end align-items-center picture">
                            <div class="pp"><img src="../assets/images/client-profil.jpg" alt="profil du client"></div>
                        </div>
                        <div class="text">
                            <p>Bonjour, merci. Rdv au chalet à 8h</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="message p-3">
                <textarea name="message" id="message"placeholder="tapez votre message"></textarea>
            </div>
        </div>
    </section>
</main>
</body>
</html>