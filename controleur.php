<?php
require_once('modele.php') ;
require_once('vue.php') ;
function CtlConnection($username,$password){
  if(empty($username) || empty($password)){
    throw new Exception("l'un des champs est vide ");
  }
  else if(ConnectEmploye($username, $password)==NULL){
    throw new Exception("Identifiant incorrect");
  }
  else if (ConnectEmploye($username, $password)->categorie=='conseille'){
    afficherConseille();
  }
  else if (ConnectEmploye($username, $password)->categorie=='Directeur'){
    afficherDirecteur();
  }
  else if (ConnectEmploye($username, $password)->categorie=='Agent_accueil'){
    afficherAgent();
  }
}



function ctlSynthese($id_client){
   $infoClient=getInfoClient($id_client);
    $compteClient=getCompteClient($id_client);
    $contratClient=getContratClient($id_client);
  if(empty($id_client)){
    throw new Exception (" champs invalide");
  }
  else if($infoClient==NULL){
    throw new Exception ("cet id ne correspond a aucun client");
  }
  else if($compteClient==NULL && $contratClient!=NULL ){
    afficherSyntheseSansCompte($contratClient, $infoClient);
  }

  else if($compteClient!=NULL && $contratClient==NULL ){
    afficherSyntheseSansContrat($compteClient,$infoClient);
  }
  else if($compteClient==NULL && $contratClient==NULL ){
    afficherSyntheseSansCompteContrat($infoClient);
  }
  else if($compteClient!=NULL && $contratClient!=NULL ){
    afficherSyntheseAvecCompteContrat($compteClient,$contratClient,$infoClient);
  }
}

function ctlRechercheId($nomDuclient,$dateDeNaissance){
  if(empty($dateDeNaissance) || empty($nomDuclient)){
      throw new exception("L'un des champs est vide ! ");
  }
  else if (RechercherId($nomDuclient,$dateDeNaissance)->fetch()==NULL){
      throw new exception("Client innexistant !");
  }
  else if(RechercherId($nomDuclient,$dateDeNaissance)->rowCount()>1){
      afficherZoneDePrecision();
  }
  else{
      $retour=RechercherId($nomDuclient,$dateDeNaissance);
      afficherId($retour->fetch());
  }
}
function ctlAfficherIdDuClient($numeroTel){
  $id=RechercherIdAvecNumeroTel($numeroTel);
  afficherIdx($id->fetch(),$numeroTel);
}






// function TrouverClient($nom,$date_naissance){
//   if((!empty($nom) && !empty($date_naissance))){
//   $id_client=get_id_Client($nom,$date_naissance);
//   AfficherId($id_client);
//   }
//   else { 
//     throw new Exception ("champs invalide");}
// }

// function CtlErreur($erreur){
//   afficherErreur($erreur) ;
// }
