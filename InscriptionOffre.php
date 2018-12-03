
<?php
require('FonctionUtil.php');

$societe=$_POST['societe'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$fonction=$_POST['fonction'];
$adresse=$_POST['adresse'];
$codePostal=$_POST['codePostal'];
$ville=$_POST['ville'];
$formation=$_POST['formation'];
$nombreApprentis=$_POST['nombreApprentis'];
$dureeFormation=$_POST['dureeFormation'];
$Description=$_POST['Description']; //$_POST['descriptifDeLaFormation'];

print_r($_POST);

if (inscriptionOffre($societe, $nom, $prenom, $telephone, $fax, $email, $fonction, $adresse,$codePostal,$ville,$formation,$nombreApprentis,$dureeFormation,$Description)) {
    header("Location:index.html");
}
//else 
   // header("Location : index.php?message='erreur'");

?>

