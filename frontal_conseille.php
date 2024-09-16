<?php
require_once('controlleur_conseille.php');

//inscription d'un nouveau client
if ((isset($_POST['btninscrire']))){
	afficherZoneInscription();
}
else if ((isset($_POST['Enregistrer']))){
	try {
		$idclient=$_POST['pseudo'];
		$nom=$_POST['lastname'];
		$prenom=$_POST['firstname'];
		$adresse=$_POST['adresse'];
		$numtel=$_POST['NumTel'];
		$dateNaissance=$_POST['naissance'];
		$profession=$_POST['profession'];
		$situation_familial=$_POST['situation_familial'];
		$mail =$_POST['mail'];
		$id_employer=$_POST['id'];
		$date_inscription=$_POST['date_inscription'];	
	    ctrInscriptionClient($idclient , $nom,$prenom,$adresse,$numtel,$dateNaissance,$profession,$situation_familial,$mail, $id_employer,$date_inscription);
	}
	catch (Exception $e) {
        $msg = $e->getMessage();
        afficherErreurInscription($msg);
    }
}
//Vente des contrats
else if ((isset($_POST['boutonVente']))){
	afficherZoneVente();
}
else if ((isset($_POST['btnVente']))){
	try{
		$id_client= $_POST['pseudo'];
		$nom_contrat= $_POST['contrat'];
		$tarif_mensuel= $_POST['tarif'];
		$date_de_souscription=$_POST['date_inscription'];
		ctrVendreContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription);
	}
	catch(Exception $e) {
        $msg = $e->getMessage();
        afficherErreurVente($msg);
    }
}
// Ouvrir un compte

else if ((isset($_POST['boutonOuvrirCompte']))){
	afficherOuvrirCompte();
}
else if ((isset($_POST['btncompte']))){
	try{
		$id_client=$_POST['pseudo'];
		$nom_compte=$_POST['compte'];
		$date_ouverture=$_POST['date_ouverture'];
		$solde_actuel=$_POST['solde'];
		$montant_decouvert=$_POST['decouvert'];
	    ctrOuvertureCompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert);
	}
	catch(Exception $e) {
        $msg = $e->getMessage();
        afficherErreurCompte($msg);
    }
}
//deconnexion

else if ((isset($_POST['BoutonDeconnexionconseille']))){
	deconnexion();
}
//Résilier un compte 

else if ((isset($_POST['btnResilierCompte']))){
	affichersupprimercompte();
}
else if ((isset($_POST['btnsupcompte']))){
	try{
		$id_client=$_POST['pseudo'];
		$nom_compte=$_POST['compte'];
		$date_ouverture=$_POST['date_ouverture'];
		$solde_actuel=$_POST['solde'];
		$montant_decouvert=$_POST['decouvert'];
		ctrSupprimerCompte($id_client,$nom_compte,$date_ouverture,$solde_actuel,$montant_decouvert);
	}
	catch(Exception $e) {
        $msg = $e->getMessage();
        afficherErreursupprimerCompte($msg);
    }
}
//Résilier un contrat

else if ((isset($_POST['btnResilierContrat']))){
	affichersupcontrat();
}	
else if ((isset($_POST['btnsupcontr']))){
	try{
		$id_client= $_POST['pseudo'];
		$nom_contrat= $_POST['contrat'];
		$tarif_mensuel= $_POST['tarif'];
		$date_de_souscription=$_POST['date_inscription'];
		 ctrsupprimerContrat( $id_client, $nom_contrat , $tarif_mensuel, $date_de_souscription);
	}
	catch(Exception $e) {
        $msg = $e->getMessage();
        afficherErreursupprimercontrat($msg);
    }
}
// Modifier le montant de decouvert 

else if ((isset($_POST['boutonMofifierDecouvert']))){
	afficherModifdecouvert();
}	
else if ((isset($_POST['btnmodif']))){
	try{
		$id_client= $_POST['pseudo'];
		$montant_de_decouvert=$_POST['decouvert'];
		ctrmodifierDecouvert($id_client,$montant_de_decouvert);
	}
	catch(Exception $e) {
        $msg = $e->getMessage();
        afficherErreurModifDecouvert($msg);
    }
}
//Planning

else if ((isset($_POST['boutonPlaning']))){
	afficherPlanning();
}
