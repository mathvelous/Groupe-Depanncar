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
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/headers.css">

    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
        <header>
            <nav>
                <div class="logo">
                    <a href="index.php"><img src="assets/images/logo.png" alt="Logo Depanncar"></a>
                </div>
            </nav>
            <button id="buttonConn" type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">
                Connexion
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form id="form-modal" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Connectez vous</h5>
                        </div>
                        <div class="modal-body">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulé</button>
                            <button type="submit" class="btn btn-secondary">Connexion</button>
                        </div>
                    </div>
                </form>
            </div>
        </header>
        <main class="container-fluid bg-home">
            <section id="choiceHome">
                <div class="row align-items-center d-flex main-home">
                    <div class="bg-white-home text-center">
                        <h1 class="py-3">profitez de notre réseau unique de mécaniciens et de clients.
                            <br />dite nous qui vous êtes</h1>
                        <div class="choice-home">
                            <a href="views/map-client.php">
                                <p class="text-form">Client</p>
                                <img src="assets/images/client.jpg" alt="">
                            </a>
                            <div class="vertical-line"></div>
                            <a id="aMecano" href="#">
                                <p class="text-form">Mécanicien</p>
                                <img src="assets/images/mecano.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="col-6"></div>
                <div class="form-div">
                    <form id="formMecano" class="bgform3 col-6 center">
                        <div class="prev">
                            <img src="assets/images/prev.png" alt="Retour">
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="firstname">Prénom</label>
                                <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Nom</label>
                                <input name="lastname"  type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input name="password" type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input name="phone" type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-check">
                                <input name="checkbox" type="checkbox" class="form-check-input" id="checkbox">
                                <label class="form-check-label" for="checkbox">J’accepte les Conditions Générales</label>
                            </div>
                            <button type="submit" class="btn">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <script src="assets/js/cookie.js"></script>
    <script>
        $(document).ready(function () {

            function aPage() {
                var a = document.createElement('a')
                a.setAttribute('href', 'views/mecano-profil.php')
                a.click();
            }

            $('#buttonConn').on("click",function () {
                if(data != ""){
                    setCookie('mecano', data, 10)
                    aPage()
                }
            })

            var form = $('#form-modal');

            form.submit(function(e){
                e.preventDefault()

                var data = $(this).serialize();
                $.ajax({
                    method : 'POST',
                    url : 'views/bddConnM.php',
                    data : data, /*{name = valeur}*/
                    success: function(data){
                        if(data != ""){
                            setCookie('mecano', data, 10)
                            aPage()
                        }
                    }
                })
            })

            $('#aMecano').on('click',function () {
                $('#choiceHome').fadeOut(500)
                $('.bgform3').animate({right:'0vw'})
                $('#buttonConn').animate({right:'2vw'})
            })
            $('.prev').on('click',function () {
                $('#choiceHome').fadeIn(500)
                $('.bgform3').animate({right:'-100%'})
                $('#buttonConn').animate({right:'-100%'})
            })

            var form = $('#formMecano');

            form.submit(function(e){
                e.preventDefault()

                var data = $(this).serialize();
                $.ajax({
                    method : 'POST',
                    url : 'views/bddMecano.php',
                    data : data, /*{name = valeur}*/
                    success: function(){
                        var a = document.createElement('a')
                        a.setAttribute('href', 'views/mecano-profil.php')
                        a.click();
                    }
                })
            })

        })
    </script>
</body>
</html>