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
    <div class="map">
        <?php
            include 'map.html';
        ?>
        <button class="declare">Déclarez votre panne</button>
        <div class="col-5">
        </div>
            <div class="bgform2 col-7">
                <form id="form-panne" class="text-center m-3">
                    <div class="cross">
                        <img src="../assets/images/cross.png" alt="cross">
                    </div>
                    <h1 class="mb20">Déclarez votre panne</h1>
                    <h2></h2>
                    <div id="step1">
                        <input id="radio1" type="radio" name="step1" value="Problème esthétique">
                        <label class="label-radio" for="radio1" data-step="aesthetic">
                            <p class="text-form">Esthétique</p>
                            <img src="../assets/images/aesthetic.jpg" alt="image formulaire Depanncar">
                        </label>

                        <input id="radio2" type="radio" name="step1" value="Problème mécanique">
                        <label class="label-radio" for="radio2" data-step="mecanic">
                            <p class="text-form">Mécanique</p>
                            <img src="../assets/images/mecanic.jpg" alt="image formulaire Depanncar">
                        </label>
                    </div>
                </form>
            </div>
            <div id="steps" class="bg-gradient">
                <div id="circle1">
                    <p>1</p>
                </div>
                <div class="steps-line"></div>
                <div id="circle2">
                    <p>2</p>
                </div>
                <div class="steps-line"></div>
                <div id="circle3">
                    <p>3</p>
                </div>
                <div class="steps-line"></div>
                <div id="circle4">
                    <p>4</p>
                </div>
            </div>

        <button type="button" class="btn btn-primary"  >
            Launch demo modal
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../assets/js/cookie.js"></script>
    <script src="../assets/js/form-panne.js"></script>
    <script>
        $(document).ready(function () {
            // slide to the left function
            $('.declare').on('click',function () {
                $('.bgform2').animate({right:'5vw'}, 700)
                $('#steps').animate({right:'0'},900, function () {
                    $('#circle1').addClass('circle-border')
                })
                $(this).fadeOut(500)
            })


           $('.cross').on('click',function () {
               $('.bgform2').animate({right:'-100%'},700)
               $('#steps').animate({right:'-5vw'},700)
               $('.declare').fadeIn(500)
               $('#step2').remove()
               $('#step3').remove()
               $('#step4').remove()
               $('#step1').fadeIn(500, function () {
                   $('#form-panne h2').html("S’agit-il d’un problème esthétique ou mécanique ?")
                   $('#circle2').removeClass('circle-border')
                   $('#circle3').removeClass('circle-border')
                   $('#circle4').removeClass('circle-border')
               })

           })


            // Ajax form panne bdd
            function formPanne() {
                var data = $('#form-panne').serialize();
                    $.ajax({
                        method : 'POST',
                        url : 'bddPanne.php',
                        data : data, /*{name = valeur}*/
                        success: function(){
                            var a = document.createElement('a')
                            a.setAttribute('href', 'client-profil.php')
                            a.click();

                        }
                    })
            }

            //Modal
            var form = $('#form-modal');

            form.submit(function(e){
                e.preventDefault()

                var data = $(this).serialize();
                $.ajax({
                    method : 'POST',
                    url : 'bddConn.php',
                    data : data, /*{name = valeur}*/
                    success: function(data){
                        console.log(data)
                        if(data != ""){
                            setCookie('user', data, 10)
                            formPanne()
                        }
                    }
                })
            })

        })
    </script>
</body>
</html>