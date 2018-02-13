<!doctype html>
<html lang="fr">
<head>
<<<<<<< HEAD
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
        <div class="bgform">
            <form class="text-center p30">
                <h1 class="mb20">Déclarez votre panne</h1>
                <h2>S’agit-il d’un problème esthétique ou mécanique ?</h2>
                <div id="step1">
                    <input id="radio1" type="radio" name="step1">
                    <label class="label-radio step1-a" for="radio1" data-step="aesthetic"><img class="checked" src="../assets/images/aesthetic.jpg" alt=""></label>

                    <input id="radio2" type="radio" name="step1">
                    <label class="label-radio step1-b" for="radio2" data-step="mecanic"><img src="../assets/images/bg-home.jpg" alt=""></label>
                </div>
            </form>
        </div>
        <div id="steps" class="bg-gradient">

        </div>
    </div>

    <script>
    $(document).ready(function () {

        $('.label-radio').on('click', function () {
            if($(this).attr('data-step') == 'aesthetic'){
                $('#step1').fadeOut(500, function () {
                    $('form').append("<div id=\"step2\">\n" +
                        "                    <input id=\"radio1\" type=\"radio\" name=\"step2\">\n" +
                        "                    <label class=\"label-radio step1-a\" for=\"radio1\" data-step=\"autobody\"><img class=\"checked\" src=\"../assets/images/bg-home.jpg\" alt=\"\"></label>\n" +
                        "\n" +
                        "                    <input id=\"radio2\" type=\"radio\" name=\"step2\">\n" +
                        "                    <label class=\"label-radio step1-b\" for=\"radio2\" data-step=\"other\"><img src=\"../assets/images/bg-home.jpg\" alt=\"\"></label>\n" +
                        "                </div>")
                })
            }else{
                $('#step1').fadeOut(500, function () {
                    $('form').append("<div id=\"step2\">\n" +
                        "                    <input id=\"radio1\" type=\"radio\" name=\"step2\">\n" +
                        "                    <label class=\"label-radio step1-a\" for=\"radio1\" data-step=\"autobody\"><img class=\"checked\" src=\"../assets/images/bg-home.jpg\" alt=\"\"></label>\n" +
                        "\n" +
                        "                    <input id=\"radio2\" type=\"radio\" name=\"step2\">\n" +
                        "                    <label class=\"label-radio step1-b\" for=\"radio2\" data-step=\"other\"><img src=\"../assets/images/bg-home.jpg\" alt=\"\"></label>\n" +
                        "                </div>")
                })
            }
        })

       /* $('.step1-a').on('click',function () {
            $('#step1').fadeOut(500, function () {
                $('form').append("" +
                    "<div id=\"step2\">\n" +
                    "<input id=\"checkBox\" type=\"radio\" name=\"step2\">\n" +
                    "<label class=\"label-radio step2-a\" for=\"checkBox\"><img class=\"checked\" src=\"../assets/images/bg-home.jpg\" alt=\"\"></label>\n" +
                    "\n" +
                    "<input id=\"checkBox\" type=\"radio\" name=\"step2\">\n" +
                    "<label class=\"label-radio step2-b\" for=\"checkBox\"><img src=\"../assets/images/bg-home.jpg\" alt=\"\"></label>\n" +
                    "</div>")
            })
        })*/
    }) 
    </script>
</body>
</html>