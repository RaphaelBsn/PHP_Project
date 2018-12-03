<?php
    
    
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '');
         // Vérification des champs (s'ils sont vide ou non)
    if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mail2']) && isset($_POST['mdp']) && isset($_POST['mdp2'])) {
        
         // Vérification du champs "mail" dans la table partenaires
        $vmail = $bdd->query("SELECT * FROM membres WHERE mail = '".$_POST['mail']."'");
//        $count = $vmail->rowCount();
        
        
//        if ($count == 0) { //Si la table ne compte aucun mail identique alors on ajoute à la BDD
                // insertion des données dans les champs de la table
            $req = $bdd->prepare("INSERT INTO membres(nom, prenom, mail, mail2, mdp, mdp2) VALUES(:nom, :prenom, :mail, :mail2, :mdp, :mdp2)");
    
                // Affectation des variables
            
            $req->execute(array(
	           ':nom' => $_POST['nom'],
               ':prenom' => $_POST['prenom'],
	           ':mail' => $_POST['mail'],
	           ':mail2' => $_POST['mail2'],
	           ':mdp' => $_POST['mdp'],
               ':mdp2' => $_POST['mdp2'],
	   ));
            header('Location: Inscription2.php');
            
//        }
        
//        else {
//        
//        header('Location: error_inscription_jeunes.php');
//    
//        }  
//        
//    }
    }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}   
?>