<?php
require_once("connect.php");
function getConnect(){
    $connexion=new PDO('mysql:host='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->query('SET NAMES UTF8');
    return $connexion;
}
function ConnectEmploye($login,$mdp){
    $connexion=getConnect();
    $requete="select categorie from employe where login='$login' and mot_de_passe='$mdp'";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $personnel=$resultat->fetch();
    return $personnel;
}


function getInfoClient($idClient){
    $connexion=getConnect();
    $requete=" select *FROM client where id_client='$idClient'";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $information=$resultat->fetch();
    return $information;
}
function getCompteClient($idClient){
    $connexion=getConnect();
    $requete="select*FROM possede where id_client='$idClient'";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $listeCompte=$resultat->fetchAll();
    return  $listeCompte;
}

function getContratClient($idClient){
    $connexion=getConnect();
    $requete="select*FROM affecte_a where id_client='$idClient'";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    $listeContrat=$resultat->fetchALL();
    return  $listeContrat;
}


function RechercherIdAvecNumeroTel($num){
    $connexion=getConnect();
    $requete="SELECT id_client FROM client where numTel='$num'";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    // $information=$resultat->fetch();

    return   $resultat;
}
function get_id_Client($nom,$date_naissance){
    $connexion=getConnect();
    $requete="Select*From client where nom='$nom' and dateNaissance='$date_naissance' ";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    // $idClient=$resultat->fetch(); 
    return  $resultat; 
}
function RechercherId($nomDuclient,$dateDeNaissance){
    $connexion=getConnect();
    $requete="SELECT id_client FROM client where nom='$nomDuclient' and dateNaissance='$dateDeNaissance'";
    $resultat=$connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_OBJ);
    // $information=$resultat->fetch();

    return   $resultat;
}
// function getSynthese($idClient){
//     $connexion = getConnect();
//     $requete = "
//         SELECT 
//             client.id_client, client.nom, client.prenom, client.adresse, client.numTel, client.dateNaissance, client.profession, client.situation_familial, client.mail,
//             possede.nom_compte, possede.date_d_ouverture, possede.solde_actuel, possede.montant_de_decouvert,
//             contratclient.date_de_souscription, contratclient.tarif_mensuel, contratclient.nom_contrat,
//             employe.Nom AS nom_conseiller 
//         FROM 
//             client 
//         LEFT JOIN 
//             possede ON client.id_client = possede.id_client 
//         LEFT JOIN 
//             contratclient ON client.id_client = contratclient.id_client 
//         LEFT JOIN 
//             employe ON client.id_employe = employe.id_employe 
//         WHERE 
//             client.id_client = '$idClient'";
    
//     $resultat = $connexion->query($requete);
//     $synthese = $resultat->fetchAll(PDO::FETCH_OBJ);
//     $resultat->closeCursor();
//     return $synthese;
// }



// function getSolde_Actuel_desComptes($idClient){
//     $connexion=getConnect();
//     $requete="select nom_compte,solde_actuel from possede where id_client=$idClient ";
//     $resultat=$connexion->query($requete);
//     $resultat->setFetchMode(PDO::FETCH_OBJ);
//     $Comptes=$resultat->fetchall(); 
//     $resultat->closeCursor();
//     return $Comptes;
// }
// function updateSolde_apresOperation_desComptes($idClient,$compte,$montant,$typeOperation){
//     $connexion=getConnect();
//     if($typeOperation=='depot'){
//         $requete="update possede set solde_actuel=solde_actuel + $montant where id_client=$idClient and nom_compte=$compte";
//     }
//     elseif($typeOperation=='retrait'){
//         $requete="update possede set solde_actuel=solde_actuel - $montant where id_client=$idClient and nom_compte=$compte";
//     }
//     else{
//         return false;
//     }
//     $resultat=$connexion->query($requete);
//     $resultat->setFetchMode(PDO::FETCH_OBJ);
//     $Comptes_apres_operation=$resultat->fetchall(); 
//     $resultat->closeCursor();
//     return $Comptes_apres_operation;
// }