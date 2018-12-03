
<?php
require('FonctionUtil.php');

/*$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$Fonction=$_POST['fonction'];
$Nom_Struc=$_POST['nom_Struc'];
$Prenom_Struc=$_POST['prenom_Struc'];
$adresse=$_POST['adresse'];
$codePostal=$_POST['codePostal'];
$ville=$_POST['ville'];
$Telephone=$_POST['telephone'];
$Email=$_POST['email']; //$_POST['descriptifDeLaFormation'];*/

print_r($_POST['nom']);print_r("  ");
print_r($_POST['prenom']);print_r("  ");
print_r($_POST['fonction']);print_r("  ");
print_r($_POST['nom_Struc']);print_r("  ");
print_r($_POST['prenom_Struc']);print_r("  ");
print_r($_POST['adresse']);print_r("  ");
print_r($_POST['codePostal']);print_r("  ");
print_r($_POST['ville']);print_r("  ");
print_r($_POST['telephone']);print_r("  ");
print_r($_POST['email']);print_r("  ");

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fonction']) && isset($_POST['nom_Struc']) && isset($_POST['prenom_Struc']) && isset($_POST['adresse']) && isset($_POST['codePostal']) && isset($_POST['ville']) && isset($_POST['telephone']) && isset($_POST['email']))
{


//print_r($_POST);

    if (inscriptionPartenaire($_POST['nom'], $_POST['prenom'], $_POST['fonction'], $_POST['nom_Struc'], $_POST['prenom_Struc'], $_POST['adresse'], $_POST['codePostal'], $_POST['ville'], $_POST['telephone'], $_POST['email'])) {
        header("Location:index3.html");
    }
}
else
    print_r("error 404");
//else 
// header("Location : index.php?message='erreur'");

?>