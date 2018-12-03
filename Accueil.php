<html><head>
        <title>Geoloc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/basic.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="imagesPhp/entreprise2.jpg" style="width: 200px; height: 170px;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="partenaires animated fadeInRight" style="opacity: 1;">
                        <h1 id="part">PARTENAIRES</h1>
                        <br>
                        <form action="php/ConnexionPartenaires.php" method="post">
                            <p>Login : <br>
                                <input style="width : 250px;" type="text" name="login" placeholder="Entrer votre login">
                            </p>

                            <p>Mot de passe : 
                                <br>
                                <input style="width : 250px;" type="password" name="password" placeholder="Entrer votre mot de passe"> 
                                <br>
                            </p>
                            <br>
                            <br>
                            <p>
                                <input type="submit" value="Connexion" id="butpart">
                                <br>
                                <a href="php/InscriptionPartenaire.php">Devenir partenaire</a>
                            </p>

                        </form>
                    </div>

                </div>
                <div class="col">
                    <div class="jeunes animated fadeInRight" style="opacity: 1;">
                        <h1 id="idjeun">JEUNES</h1>
                        <br>
                        <form action="php/ConnexionJeunes.php" method="post">
                            <p>Login : <br>
                                <input style="width : 250px;" type="text" name="login" placeholder="Entrer votre login">
                            </p>

                            <p>Mot de passe :<br>
                                <input style="width : 250px;" type="password" name="password" placeholder="Entrer votre mot de passe">
                                <br>
                            </p>
                            <br>
                            <br>
                            <p>
                                <input type="submit" value="Connexion" id="butjeun">
                                <br>
                                <a href="php/InscriptionJeune.php">S'inscrire</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <br><br>
            </div>
          
        </div>
   
    
</body></html>