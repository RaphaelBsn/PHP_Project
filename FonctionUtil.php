<?php

function connexionBase() {

    try {
        $connexion = new PDO('mysql:host=localhost;dbname=ppe1', 'root', '');
    } catch(PDOexception $e) {
        echo 'Echec lors de la connexion: ' . $e->getMessage();
    }

    return $connexion;
}

function inscriptionOffre($societe, $nom, $prenom, $telephone, $fax, $email, $fonction, $adresse, $codePostal, $ville, $formation, $nombreApprentis, $dureeFormation, $Description)
{ 
    try {
        $requete = "INSERT INTO offre (Societe, Nom, Prenom, Telephone, Fax, Email, Fonction, Adresse, CodePostal, Ville, Formation, NombreApprentis, DureeFormation, Description) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = connexionBase()->prepare($requete);
        $result= $stmt->execute(array($societe, $nom, $prenom,$telephone, $fax, $email, $fonction, $adresse ,$codePostal, $ville, $formation, $nombreApprentis, $dureeFormation, $Description));
        return "BIENVENUE";
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
    return $result;
}



function inscriptionJeune($nom, $prenom, $filiere, $annee, $login, $email, $password ,$cpassword)

{
    try {


        $requete = "INSERT INTO jeune(Nom, Prenom, Filiere, Annee, Login, Email, Password ,Cpassword) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = connexionBase()->prepare($requete);
        $result= $stmt->execute(array($nom, $prenom, $filiere, $annee, $login, $email, $password ,$cpassword));
        return "BIENVENUE";
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
    return $result;
}

function inscriptionPartenaire($nom, $prenon, $fonction, $nom_Struc, $prenom_Struc, $adresse, $codePostal, $ville, $telephone, $email)

{

    try {

        $requete = "INSERT INTO partenaires(Nom, Prenom, Fonction, Nom_Struc, Prenom_Struc, Adresse, CodePostale, Ville, Telephone, Email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
        $stmt = connexionBase()->prepare($requete);        
        $result= $stmt->execute(array($nom, $prenon, $fonction, $nom_Struc, $prenom_Struc, $adresse, $codePostal, $ville, $telephone, $email));
        return $result;
    }
    catch (PDOException $e){
        //echo $e->getMessage();
        return $result;
    }
}
?>