<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title>Formulaire Panne</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/images">


    <style>
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .bg-panne {
            height: auto;
            width: 60vw;
            background: -moz-linear-gradient(80deg, rgba(39,41,87,0.8) 0%, rgba(19,15,37,1) 100%); /* ff3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(19,15,37,1)), color-stop(100%, rgba(39,41,87,0.8))); /* safari4+,chrome */
            background: -webkit-linear-gradient(80deg, rgba(39,41,87,0.8) 0%, rgba(19,15,37,1) 100%); /* safari5.1+,chrome10+ */
            background: -o-linear-gradient(80deg, rgba(39,41,87,0.8) 0%, rgba(19,15,37,1) 100%); /* opera 11.10+ */
            background: -ms-linear-gradient(80deg, rgba(39,41,87,0.8) 0%, rgba(19,15,37,1) 100%); /* ie10+ */
            background: linear-gradient(10deg, rgba(39,41,87,0.8) 0%, rgba(19,15,37,1) 100%); /* w3c */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#130F25', endColorstr='#272957',GradientType=0 ); /* ie6-9 */

            border-radius: 15px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            padding:20px;


        }
        .bg-panne h2, .bg-panne h6 {
            text-align: center;
            margin-bottom: 15px;
        }

        .title {
            display: block;
            color: #fff;
            text-align: center;
        }
        .question {
            display: block;
            color: #fff;
            text-align: center;
        }

        #text__image {
            position: relative;
            background: url("../assets/images/esthetique.jpg");
            width: 25vw;
            height: auto;
            border-radius: 5px;
        }
        #text__image-1 {
            position: relative;
            background: url("../assets/images/mecanique.jpg");
            width: 25vw;
            height: auto;
            border-radius: 5px;
        }
        button {
            background: none;
            border:none
        }

        .container-input {
            position: relative;
            text-align: center;
            color: #000;
            width: 40%;
            margin:10px;
        }

        .container-input img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .container-input label {
            color: white;
            font-family: "Bebas Neue";
            font-size: 2em;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .blackbg {
            width: 100%;
            height:100%;
            background-color: rgba(0,0,0,0.5);
            position: absolute;
            top:0;
            left: 0;
            border-radius: 5px;
        }
        .chargebar{
            border-color: ;
        }

    </style>
</head>
<body>

<!-- <main class="container-fluid">
    <div class="bg-panne">
        <h2 class="title">DECLAREZ VOTRE PANNE</h2>

        <p class="question">S'agit-il d'un problème esthétique ou mécanique ?</p>

        <div class="d-flex justify-content-center align-items-center">
            <img src="../assets/images/esthetique.jpg" alt="" width="" style="margin: 10px;">

            <img src="../assets/images/mecanique.jpg" alt="" style="margin: 10px;">
        </div>

    </div>
</main>-->

<!--<main class="container-fluid">
    <div id="form-mecano" class="bg-panne">
        <div class="" style="color:white;">
            <h2 class="">DECLAREZ VOTRE PANNE</h2>
            <p>S'agit-il d'un problème esthétique ou mécanique ?</p>
        </div>
        <div class="choice-form">
            <a href="#">Mécanicien</a>
            <a href="form-client.php">Client</a>
        </div>
        <form class="">
            <div class="first-part">
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp">
                </div>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp">
                </div>
            </div>
            <div class="last-part">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox">
                    <label class="form-check-label" for="checkbox">J’accepte les Conditions Générales</label>
                </div>
            </div>
            <button type="submit" class="btn">Enregistrer</button>
        </form>
    </div>
</main>-->

<!--<form class="bg-panne">
    <h2>DECLAREZ VOTRE PANNE</h2>

    <div>
        <label for="">S'agit-il d'un problème esthétique ou mécanique ?</label>
        <input class="img" type="image" type="image" src="../assets/images/esthetique.jpg">
    </div>
</form>-->

<!--<form action="/action_page.php">
    <select name="cars" multiple>
        <option value="volvo"><input class="img" type="image" src="../assets/images/esthetique.jpg">Esthetique</option>
        <option value="saab"><input class="img" type="image" src="../assets/images/mecanique.jpg">Mecano</option>

    </select>
    <input type="submit">
</form>-->

<form action="" class="bg-panne">
    <h2>DÉCLAREZ VOTRE PANNE</h2>
    <div class="question" id="q-step1">
        <h6>S'agit-il d'un problème ésthétique ou mécanique ?</h6>
    </div>

    <div class="d-flex flex-row justify-content-center">
        <button class="container-input">
            <img src="../assets/images/esthetic.jpg" alt="#">
            <!--<div class="blackbg"></div>-->
            <label for="contactChoice1" class="centered">Estetique</label>
        </button>
        <button class="container-input">
            <img src="../assets/images/mecanic.jpg" alt="#">
            <label for="contactChoice1" class="centered">Mécanique</label>
        </button>

    </div>
    <div>
        <hr class="chargebar">
    </div>
        <!--<div class="container-input">
            <input  type="image" id="contactChoice1"
                    name="contact" value="email">
            <img  src="../assets/images/esthetic.jpg" alt="">
            <label for="contactChoice1" class="centered">Estetique</label>
        </div>-->
</form>

</body>
</html>
