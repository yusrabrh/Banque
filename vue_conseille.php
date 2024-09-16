<?php
//Inscription d'un nouveau client 
function afficherErreurInscription($msg){
	echo '<p><strong>Erreur de création de compte :</strong></p>';
	echo '<p>'.$msg . '</p>';
}	
function afficherZoneInscription(){
	$msg='';
	require_once('gabaritInscriptionClient.php'); 
}
function afficherErreurVente($msg){
	echo '<p><strong>Erreur de création de compte :</strong></p>';
	echo '<p>'.$msg . '</p>';
}
function afficherZoneVente(){
	$msg='';
	require_once('gabarit_vente_contrat.php');
}
function afficherErreurCompte($msg){
	echo '<p><strong>Erreur de création de compte :</strong></p>';
	echo '<p>'.$msg . '</p>';
}
function afficherOuvrirCompte(){
	$msg='';
	require_once('gabarit_compte.php');
}
function deconnexion(){
	$msg='';
	require_once('login_gabarit.php');
}
function afficherErreursupprimerCompte($msg){
	echo '<p><strong>Erreur de création de compte :</strong></p>';
	echo '<p>'.$msg . '</p>';
}
function affichersupprimercompte(){
	$msg='';
	require_once('gabarit_supprimer_compte.php');
}
function affichersupcontrat(){
	$msg='';
	require_once('gabarit_supprimer_contrat.php');
}
function afficherErreursupprimercontrat($msg){
	echo '<p><strong>Erreur de création de compte :</strong></p>';
	echo '<p>'.$msg . '</p>';
}
function afficherModifdecouvert(){
	$msg='';
	require_once('gabarit_modifier_decouvert.php');
}
function afficherErreurModifDecouvert($msg){
	echo '<p><strong>Erreur de création de compte :</strong></p>';
	echo '<p>'.$msg . '</p>';
}
function afficherPlanning(){
	require_once('planning.php');
}
function succes (){
	require_once('message_succes.php');
}