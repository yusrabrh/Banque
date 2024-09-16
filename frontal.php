<?php
require_once('controleur.php');
  if((isset($_POST['envoyer']))){
    try{
      $username = $_POST['username'];
      $password = $_POST['password'];
      CtlConnection($username,$password);
    }
    catch(Exception $e){
      $msg = $e->getMessage() ;
      afficherErreurConnexion($msg);
    }
  }
  //GESTION synthese
  else if((isset($_POST['synthese']))){
     afficherZoneSynthese();
  }
  elseif(isset($_POST['btnsynthese'])){
    try{
      $id_client=$_POST['id_client'];
      ctlSynthese($id_client);
    }
    catch(Exception $e){
      $msg = $e->getMessage() ;
      afficherErreurId($msg);
    }
    
  }
  //GESTION TROUVER ID
  else if(isset($_POST['rechercherId'])){
    afficherRechercheId();
}
else if(isset($_POST['ValiderRecher'])){
    try{
        $nomDuclient=$_POST['NomDuClient'];
        $dateDeNaissance=$_POST['date'];
        ctlRechercheId($nomDuclient,$dateDeNaissance);
    }
    catch(Exception $e){
        $msg=$e->getMessage();
        afficherErreurRechercheId($msg);
    }
}
else if(isset($_POST['precision'])){
    $numeroTel=$_POST['numeroTel'];
    ctlAfficherIdDuClient($numeroTel);
}













  else{
    afficherAcceuil();
  }






//   elseif (isset($_POST['getId'])){
//     $name=$_POST['nom'];
//     $date=$_POST['date'];
//      TrouverClient($name,$date);
//   }
//   }
// catch(Exception $e){
//   $msg = $e->getMessage() ;
//   CtlErreur($msg);
// }
    

 
