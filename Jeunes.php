<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <title>Document</title>
    </head>
    <body>
        <div class="row">
            <div class="col">
                <div class="offres" style="opacity: 1;">
                    <h1 id="entre">OFFRES</h1>
                    <br>
                    <br>
                    <br>
                    <button type="button">
                        <a href="consulter_offre.php">Consulter offres</a>
                    </button>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col">
                <div class="jeunes animated fadeInRight" style="opacity: 1;">
                    <h1 id="idjeun">JEUNES</h1>
                    <br>
                    <div class="row">
                        <div class="col">
                            <button id="btn">Modifier le profil</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="button" onclick="window.location.href='disconnect.php';" value="Deconnexion">
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col">
                <div class="admin animated fadeInRight" style="opacity: 1;">
                    <h1>ADMINISTRATION</h1>
                    <br>
                    <div class="row">

                        <div class="col">
                            <br>
                            <button id="butentre">
                                <a href="espace_perso.php">Consulter ses documents
                                </a>
                            </button>
                        </div>
                        <br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <br><br>
        </div>
        <div id="cont1" class="container d-none">
            <div class="row" style="margin-top : -30%;">
                <div class="col">
                    <div class="jeunes animated fadeInUp" style="opacity: 1;">
                        <h1>Modification Profil</h1>
                        <form action="../php/modif_jeunes.php" method="post">
                            <div class="row">
                                <p class="col">Nom : <br>
                                    <input style="width : 200px;" type="text" name="nom" value="Bassignani" required="" <="" p="">
                                </p><p class="col">Prénom : <br>
                                <input style="width : 200px;" type="text" name="prenom" value="Raphael" required="" <="" p="">


                                </p></div>
                            <div class="row">
                                <p class="col">Filière : <br>
                                    <select style="width : 200px;" name="filiere" required="">
                                        <option value="BTS SIO" selected="">BTS SIO  - actuel</option>
                                        <option value="BTS SIO">BTS SIO</option>
                                        <option value="BTS NDRC">BTS NDRC</option>
                                        <option value="BTS PIM">BTS PIM</option>
                                        <option value="BTS CG">BTS CG</option>
                                        <option value="BTS GPME">BTS GPME</option>
                                        <option value="BTS MUC">BTS MUC</option>
                                    </select> 
                                </p>
                                <p class="col">Année : <br>
                                    <select style="width : 200px;" name="annee" required="">
                                        <option value="">Première Année  - actuel</option>
                                        <option value="Première Année">Première Année</option>
                                        <option value="Deuxième Année">Deuxième Année</option>
                                    </select> 
                                </p>                                
                            </div>
                            <div class="row">
                                <p class="col">Adresse Mail : <br>
                                    <input style="width : 200px;" type="text" name="mail" value="raphael.pigeon@gmail.com" required="">
                                </p>
                                <p class="col">Mot de passe :<br>
                                    <input style="width : 200px;" type="password" name="passw" value="azertyuiop123" required="">
                                </p>
                            </div>
                            <div class="row">
                                <p class="col">
                                    <input type="submit" value="Modifier le profil" style="width : 200px;">
                                </p>
                            </div>
                        </form>
                        <p class="col">
                            <button id="btn2">Fermer</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row footer" style="margin-top: 0%;">
            <br>
        </div>


        <script>
            function One() {
                $('body').css('background-image','url(../img/etudiants-en-formation-26-1920x1080.jpg)');
            }

            function Two() {
                $('body').css('background-image','url(../img/etudiants-diplomes-14-1920x1080.jpg)');
            }

            function Three() {
                $('body').css('background-image','url(../img/etudiants-en-design-66-1920x1080.jpg)');
            }

            function Four() {
                $('body').css('background-image','url(../img/etudiant1.jpg)');
            }

            document.getElementById("btn").onclick = function() {
                Panel()
            };
            document.getElementById("btn2").onclick = function() {
                Panel2()
            };

            function Panel() {
                document.getElementById("cont1").classList.toggle("d-none");
                //                document.getElementById("cont1").className = "fadeOutUp";

            }
            function Panel2() {
                document.getElementById("cont1").classList.toggle("d-none");



            }

            $(document).ready( function () {
                $(".footer").css({
                    "margin-top": "0%"
                }) 
                $(".partenaires").css({
                    "opacity": "1"
                })
                $(".jeunes").css({
                    "opacity": "1"
                })
                $(".offres").css({
                    "opacity": "1"
                })
                $(".admin").css({
                    "opacity": "1"
                })


            });
        </script>

        <form method="post" action="Index.php" id ="form1">


            <div class="formContainer ">
            </div>
        </form>

    </body>



</html>
