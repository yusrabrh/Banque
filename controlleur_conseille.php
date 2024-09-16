<?php
require_once('ma_partie_model.php');
require_once('vue_conseille.php');

function ctrInscriptionClient($idclient , $nom,$prenom,$adresse,$numtel,$dateNaissance,$profession,$situation_familial,$mail, $id_employer,$date_inscription){
	
	if (empty($idclient) || empty($nom) || empty($prenom) || empty($adresse) || empty($numtel) || empty($dateNaissance) || empty($profession) || empty($situation_familial) ||empty($mail) ||empty($id_employer)|| empty($date_inscription)){
		throw new Exception("L'un des champs est vide ");
	}
	else{
		
		inscrireClient ($idclient ,$nom,$prenom,$adresse,$numtel,$dateNaissance,$profession,$situation_familial,$mail, $id_employer,$date_inscription);
		succes ();
	}
}
function ctrVendreContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription){
	if (empty($id_client)||empty($nom_contrat)||empty($tarif_mensuel)||empty($date_de_souscription)){
		throw new Exception("L'un des champs est vide ");
	}
	else{	
		vendreContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription);
		
	}
}
function ctrOuvertureCompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert){
	
	if (empty($id_client)||empty($nom_compte)||empty($date_ouverture)||empty($solde_actuel)||empty($montant_decouvert)){
		throw new Exception("L'un des champs est vide ");
	}
	else{	
		ouvrirCompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert);
		succes ();
	}
}
function ctrdeconnexion(){
	deconnexion();
}
function ctrSupprimerCompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert){
	if (empty($id_client)||empty($nom_compte)||empty($date_ouverture)||empty($solde_actuel)||empty($montant_decouvert)){
		throw new Exception("L'un des champs est vide ");
	}
	else{
		supprimercompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert);
		succes ();
	}
}
function ctrsupprimerContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription){
	if (empty($id_client)||empty($nom_contrat)||empty($tarif_mensuel)||empty($date_de_souscription)){
		throw new Exception("L'un des champs est vide ");
	}
	else{	
		supprimerContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription);
		succes ();
	}
}
function ctrmodifierDecouvert($id_client,$montant_de_decouvert){
	if (empty($id_client)||empty($montant_de_decouvert)){
		throw new Exception("L'un des champs est vide ");
	}
	else{	
		nouveauDecouvert($id_client,$montant_de_decouvert);
		succes ();
	}
}