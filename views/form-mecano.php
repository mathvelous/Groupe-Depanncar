<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Depanncar</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/headers.css">

    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
    <?php
         include 'header-conn.html';
    ?>
    <main class="container-fluid map">
        <?php
            include 'map.html';
        ?>

    </main>

    <script>
        var form = $('#formMecano');
        //au submit je lance une fonction
        form.submit(function(e){
            e.preventDefault() //je ne lance pas la fonction par défaut (la page ne se recharge pas)
            console.log($(this))
            //ajax relie back et front sans recharger la page
            //je lance une méthode ajax
            var data = $(this).serialize();
            $.ajax({
                method : 'POST',
                url : 'bddMecano.php',
                data : data, /*{name = valeur}*/
                dataType :"json",
                success: function(msg){

                }
            })
        })
    </script>

</body>
</html>