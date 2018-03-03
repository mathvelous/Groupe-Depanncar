$(document).ready(function () {

    $('#form-panne.js h2').html("S’agit-il d’un problème esthétique ou mécanique ?") // first question

    var textStep4 = function () {
        $('#form-panne.js h2').html("Avez vous quelque chose à rajouter ?")
    } // Text for the step3 of the form

    // function for append the step4
    var appendStep4 = function () {
        $('form').append("<div id=\"step4\">\n" +
            "                        <textarea name=\"more\" id=\"\" cols=\"30\" rows=\"10\"></textarea>\n" +
            "                        <div class=\"row justify-content-between\">\n" +
            "                            <div>\n" +
            "                                <label for=\"car\">Type de voiture</label>\n" +
            "                                <input type=\"text\" name=\"car\" id=\"car\">\n" +
            "                            </div>\n" +
            "                            <div>\n" +
            "                                <label for=\"year\">Année de mise en circulation</label>\n" +
            "                                <input type=\"number\" name=\"year\" id=\"year\">\n" +
            "                            </div>\n" +
            "                            <div>\n" +
            "                                <label for=\"carImage\">Ajouter une photo</label>\n" +
            "                                <input type=\"file\" name=\"carImage\" id=\"carImage\">\n" +
            "                            </div>\n" +
            "                        </div>\n" +
            "                        <div class=\"d-flex justify-content-center\">\n" +
            "                            <label for=\"submit\">Validez votre panne</label>\n" +
            "                            <input type=\"submit\" id=\"submit\">\n" +
            "                        </div>\n" +
            "                    </div>")
    }


    // function for the form
    $('.label-radio').on('click', function () { // aesthetic part
        if ($(this).attr('data-step') == 'aesthetic') {
            $('#step1').fadeOut(500, function () {
                $('#form-panne.js h2').html("S’agit-il d’un problème de carosserie ou d’autre chose ?")
                $('form').append("<div id=\"step2\">\n" +
                    "                        <input id=\"radio1\" type=\"radio\" name=\"step2\" value=\"sur la corosserie\">\n" +
                    "                        <label class=\"label-radio\" for=\"radio1\" data-step=\"autobody\">\n" +
                    "                            <p class=\"text-form\">Carosserie</p>\n" +
                    "                            <img src=\"../assets/images/autobody.jpg\" alt=\"\">\n" +
                    "                        </label>\n" +
                    "\n" +
                    "                        <input id=\"radio2\" type=\"radio\" name=\"step2\" value=\"pas sur la corosserie\">\n" +
                    "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"other1\">\n" +
                    "                            <p class=\"text-form\">Autre</p>\n" +
                    "                            <img src=\"../assets/images/other1.jpg\" alt=\"\">\n" +
                    "                        </label>\n" +
                    "                    </div>")


                $('.label-radio').on('click', function () {
                    if ($(this).attr('data-step') == 'autobody') {
                        $('#step2').fadeOut(500, function () {
                            $('#form-panne.js h2').html('Est ce que c’est une grosse ou petite rayure/choque ?')
                            $('form').append("<div id=\"step3\">\n" +
                                "                        <input id=\"radio1\" type=\"radio\" name=\"step3\" value=\"Grosse rayure ou dégat\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio1\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Grosse</p>\n" +
                                "                            <img src=\"../assets/images/big.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "\n" +
                                "                        <input id=\"radio2\" type=\"radio\" name=\"step3\" value=\"Petite rayure ou dégat\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Petite</p>\n" +
                                "                            <img src=\"../assets/images/small.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "                    </div>")

                            $('.label-radio').on('click', function () {
                                $('#step3').fadeOut(500, function () {
                                    textStep4()
                                    appendStep4()
                                })
                            })

                        })
                    }
                })

                $('.label-radio').on('click', function () {
                    if ($(this).attr('data-step') == 'other1') {
                        $('#step2').fadeOut(500, function () {
                            $('#form-panne.js h2').html('Quelle partie de votre voiture est concernée ?')
                            $('form').append("<div id=\"step3\" class=\"column\">\n" +
                                "                    <div class=\"form-section\">\n" +
                                "                        <input id=\"radio1\" type=\"radio\" name=\"step3\" value=\"Prolème de roues\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio1\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Roues</p>\n" +
                                "                            <img src=\"../assets/images/wheel.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "\n" +
                                "                        <input id=\"radio2\" type=\"radio\" name=\"step3\" value=\"Prolème de vitres\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Vitres</p>\n" +
                                "                            <img src=\"../assets/images/window.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "                        </div>\n" +
                                "\n" +
                                "                        <div class=\"form-section\">\n" +
                                "                        <input id=\"radio3\" type=\"radio\" name=\"step3\" value=\"Prolème de rétroviseurs\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Rétroviseurs</p>\n" +
                                "                            <img src=\"../assets/images/mirror.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "\n" +
                                "                        <input id=\"radio4\" type=\"radio\" name=\"step3\" value=\"Prolème de phares\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Phares</p>\n" +
                                "                            <img src=\"../assets/images/headlight.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "                        </div>\n" +
                                "             </div>")


                            $('.label-radio').on('click', function () {
                                $('#step3').fadeOut(500, function () {
                                    textStep4()
                                    appendStep4()
                                })
                            })

                        })
                    }
                })

            })
        } else if ($(this).attr('data-step') == 'mecanic') { // mecanic part
            $('#step1').fadeOut(500, function () {
                $('#form-panne.js h2').html("S’agit-il du moteur ?")
                $('form').append("<div id=\"step2\">\n" +
                    "                        <input id=\"radio1\" type=\"radio\" name=\"step2\" value=\"sur le moteur\">\n" +
                    "                        <label class=\"label-radio\" for=\"radio1\" data-step=\"engine\">\n" +
                    "                            <p class=\"text-form\">Moteur</p>\n" +
                    "                            <img src=\"../assets/images/engine.jpg\" alt=\"\">\n" +
                    "                        </label>\n" +
                    "\n" +
                    "                        <input id=\"radio2\" type=\"radio\" name=\"step2\" value=\"pas sur le moteur\">\n" +
                    "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"other2\">\n" +
                    "                            <p class=\"text-form\">Autre</p>\n" +
                    "                            <img src=\"../assets/images/other2.jpg\" alt=\"\">\n" +
                    "                        </label>\n" +
                    "                    </div>")

                $('.label-radio').on('click', function () {
                    if ($(this).attr('data-step') == 'engine') {
                        $('#step2').fadeOut(500, function () {
                            $('#form-panne.js h2').html('La voiture démare t-elle ?')
                            $('form').append("<div id=\"step3\">\n" +
                                "                        <input id=\"radio1\" type=\"radio\" name=\"step3\" value=\"Le moteur démare\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio1\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Oui</p>\n" +
                                "                            <img src=\"../assets/images/yes.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "\n" +
                                "                        <input id=\"radio2\" type=\"radio\" name=\"step3\" value=\"Le moteur démare pas\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Non</p>\n" +
                                "                            <img src=\"../assets/images/no.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "                    </div>")

                            $('.label-radio').on('click', function () {
                                $('#step3').fadeOut(500, function () {
                                    textStep4()
                                    appendStep4()
                                })
                            })

                        })
                    }
                })

                $('.label-radio').on('click', function () {
                    if ($(this).attr('data-step') == 'other2') {
                        $('#step2').fadeOut(500, function () {
                            $('#form-panne.js h2').html("S’agit-il d’un problème de carosserie ou d’autre chose ?")
                            $('form').append("<div id=\"step3\" class=\"column\">\n" +
                                "                        <div class=\"form-section\">\n" +
                                "                        <input id=\"radio1\" type=\"radio\" name=\"step3\" value=\"Prolème d'électronique\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio1\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">L'électronique</p>\n" +
                                "                            <img src=\"../assets/images/electronic.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "\n" +
                                "                        <input id=\"radio2\" type=\"radio\" name=\"step3\" value=\"Prolème de boite de vitesse\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Boite de vitesse</p>\n" +
                                "                            <img src=\"../assets/images/gearbox.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "                        </div>\n" +
                                "\n" +
                                "                        <div class=\"form-section\">\n" +
                                "                        <input id=\"radio3\" type=\"radio\" name=\"step3\" value=\"Prolème d'amortisseurs\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Amortisseurs</p>\n" +
                                "                            <img src=\"../assets/images/damper.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "\n" +
                                "                        <input id=\"radio4\" type=\"radio\" name=\"step3\" value=\"Prolème de freins\">\n" +
                                "                        <label class=\"label-radio\" for=\"radio2\" data-step=\"step3\">\n" +
                                "                            <p class=\"text-form\">Freins</p>\n" +
                                "                            <img src=\"../assets/images/brake.jpg\" alt=\"\">\n" +
                                "                        </label>\n" +
                                "                        </div>\n" +
                                "                    </div>")

                            $('.label-radio').on('click', function () {
                                $('#step3').fadeOut(500, function () {
                                    textStep4()
                                    appendStep4()
                                })
                            })

                        })
                    }
                })
            })
        }
    })

})