
<?php
require('FonctionUtil.php');

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$filiere=$_POST['filiere'];
$annee=$_POST['annee'];
$login=$_POST['login'];
$email=$_POST['email'];
$password=$_POST['password']; 
$cpassword=$_POST['cpassword'];//$_POST['descriptifDeLaFormation'];

  print_r($_POST);

if (InscriptionJeune($nom, $prenom, $filiere, $annee, $login, $email, $password ,$cpassword)) {
    echo(InscriptionJeune($$nom, $prenom, $filiere, $annee, $login, $email, $password ,$cpassword));
   /* header("Location:index2.html");*/
}
//else 
   // header("Location : index.php?message='erreur'");

?>



