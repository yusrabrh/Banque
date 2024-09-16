<?php
require_once('connect.php');
function getConnect(){
    $connexion=new PDO('mysql:host='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->query('SET NAMES UTF8');
    return $connexion;
}


// inscrire un nouveaau client 

function inscrireClient ($idclient,$nom,$prenom,$adresse,$numtel,$dateNaissance,$profession,$situation_familial,$mail, $id_employer,$date_inscription){
	$connexion=getConnect();
	$requete= "insert INTO client (id_client,nom,prenom,adresse,numTel,dateNaissance,profession,situation_familial,mail,id_employer,dateInscription) VALUES ('$idclient' , '$nom','$prenom','$adresse','$numtel','$dateNaissance','$profession','$situation_familial','$mail',' $id_employer','$date_inscription')"; 
	$resultat=$connexion-> exec($requete);
}
function vendreContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription){
	$connexion=getConnect();
	$requeteVerif = "SELECT COUNT(*) as count_contrats FROM contrat WHERE nom_contrat = '$nom_contrat'";
	$resultatVerif = $connexion->query($requeteVerif);
	$row = $resultatVerif->fetch(PDO::FETCH_ASSOC);
	if ($row['count_contrats'] == 0) {
		 echo "Le contrat spécifié n'existe pas. Veuillez choisir un contrat valide.";
	}
	else{
		$requete= "insert INTO affecte_a ( id_client, nom_contrat , tarif_mensuel, date_de_souscription)VALUES ( '$id_client', '$nom_contrat' , '$tarif_mensuel', '$date_de_souscription')";  
		$resultat=$connexion-> exec($requete);
		succes ();
	}
}
function ouvrirCompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert){
	$connexion=getConnect();
	$requeteVerif = "SELECT COUNT(*) as count_comptes FROM compte WHERE nom_compte = '$nom_compte'";
	$resultatVerif = $connexion->query($requeteVerif);
	$row = $resultatVerif->fetch(PDO::FETCH_ASSOC);
	if ($row['count_comptes'] == 0) {
		 echo "Le compte spécifié n'existe pas. Veuillez choisir un compte valide.";
	}
	else{
	$requete= "insert INTO possede ( id_client, nom_compte ,date_d_ouverture,solde_actuel, montant_de_decouvert)VALUES ('$id_client' ,'$nom_compte' , '$date_ouverture','$solde_actuel','$montant_decouvert')";  
	$resultat=$connexion-> exec($requete);
	}
}
function supprimercompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert){
	$connexion=getConnect();
	$requeteVerif = "SELECT COUNT(*) as count_comptes FROM possede WHERE id_client='$id_client' AND nom_compte ='$nom_compte' AND date_d_ouverture= '$date_ouverture' AND solde_actuel='$solde_actuel' AND montant_de_decouvert='$montant_decouvert'";
	$resultatVerif = $connexion->query($requeteVerif);
	$row = $resultatVerif->fetch(PDO::FETCH_ASSOC);
	if ($row['count_comptes'] == 0) {
		 echo "Le compte spécifié n'existe pas ou les informations sont incorrectes.";
	}
	else{
	$requete="DELETE from possede WHERE id_client='$id_client' AND nom_compte ='$nom_compte' AND date_d_ouverture= '$date_ouverture' AND solde_actuel='$solde_actuel' AND montant_de_decouvert='$montant_decouvert'";
	$resultat=$connexion-> exec($requete);
	}
}
function supprimerContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription){
	$connexion=getConnect();
	$requeteVerif = "SELECT COUNT(*) as count_contrats FROM affecte_a WHERE id_client='$id_client' AND nom_contrat='$nom_contrat' AND tarif_mensuel='$tarif_mensuel' AND date_de_souscription='$date_de_souscription'";
	$resultatVerif = $connexion->query($requeteVerif);
	$row = $resultatVerif->fetch(PDO::FETCH_ASSOC);	
	if ($row['count_contrats'] == 0) {
		echo "Le contrat spécifié n'existe pas ou les informations sont incorrectes.";
	} 
	else {
	$requete= "DELETE FROM  affecte_a WHERE id_client='$id_client' AND  nom_contrat='$nom_contrat' AND tarif_mensuel='$tarif_mensuel' AND date_de_souscription='$date_de_souscription'";  
	$resultat=$connexion-> exec($requete);
	}
}

function  nouveauDecouvert($id_client,$montant_de_decouvert){
    $connexion=getConnect();
    $requete="UPDATE possede set montant_de_decouvert='$montant_de_decouvert' WHERE id_client='$id_client'";
    $resultat=$connexion->query($requete);
    $resultat->closeCursor();
}
