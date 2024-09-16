<?php
// GESTION CONNEXION
function  afficherAcceuil(){
	$msg ='';
	require_once('login_gabarit.php');
}
function afficherErreurConnexion($msg){
	echo '<p><strong>Erreur de création de compte :</strong></p>';
	echo '<p>'.$msg . '</p>';
}
function afficherConseille(){
 require_once('gabarit_conseille.php');
}

function  afficherDirecteur(){
 require_once('gabarit_directeur.php');
}
function afficherAgent(){
 require_once('gabarit_acceuil_agent.php');
}

// GESTION synthese

function afficherZoneSynthese(){
	$contenue1="";
    $contenue2="";
    $contenue10='';
    $contenue0='';
	$erreur='';
	require_once('gabaritSynthese.php');
}
function afficherSyntheseAvecCompteContrat($comptes,$contrats,$information){
    $contenue1="";
    $erreur='';
    $contenue2="";
    $contenue10='';
    $contenue0='';
    $contenue3='<table class="tab3"><tr><th colspan="4">liste des contrats du
     client</th></tr><tr><th></th><th>nom du contrat</th><th>Mensualite</th>
     <th>Date douverture</th></tr>';
    $contenue4='<table class="tab2"><tr><th colspan="5">liste des comptes du
     client </th></tr><tr><th></th><th>nom du compte</th>
     <th>Decouvert autoriser</th><th>solde</th><th>Date d\'ouverture</th></tr>';
    $contenue1='<table><tr><th colspan="11">Information du client</th><tr><th
    >Id du client</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th>
    <th>Numero de telephone</th><th>Email</th><th>Profession</th><th>Situation
    familiale</th><th>Charger client</th><th>Date d\'inscription</th></tr>
    <tr><td> '.$information->id_client .'</td> <td> '.$information->nom .'</td>  
    <td> '.$information->prenom .'</td> <td> '.$information->dateNaissance .'</td> 
    <td> '.$information->adresse .'</td> <td> '.$information->numTel .'</td> 
    <td> '.$information->mail .'</td> <td> '.$information->profession .'</td> 
    <td> '.$information->situation_familial .'</td>  <td> '.$information->id_employer 
    .'</td>  <td> '.$information->dateInscription.'</td> </table>';
    foreach($contrats as $ligne){
        $contenue2.='<tr><td></td><td>'.$ligne->nom_contrat.'</td>
        <td>'.$ligne-> tarif_mensuel.'</td><td>'.$ligne-> date_de_souscription.'</td></tr>';
    }
    $contenue3.=$contenue2.'</table>';

    foreach($comptes as $ligne){
        $contenue0.='<tr><td></td><td>'.$ligne->nom_compte.'</td>
        <td>'.$ligne->montant_de_decouvert.'</td><td>'.$ligne->solde_actuel.'</td><td>'.$ligne->date_d_ouverture.'</tr>';
    }
    $contenue4.=$contenue0.'</table>';
    $contenue10='<form><fieldset><legend>Synthese du Client</legend>'.$contenue1.'<p>
    </p>'.$contenue3.'<p></p>'.$contenue4.'</fieldset></form>';
    require_once('gabaritSynthese.php');
}
function afficherErreurId($msg){
	$contenue1="";
    $contenue2="";
    $contenue10='';
    $contenue0='';
	$erreur='<p>'.$msg.'</p>';
	require_once('gabaritSynthese.php');
}
function afficherSyntheseSansCompteContrat($information){
	$contenue1="";
    $erreur='';
    $contenue2="";
    $contenue10='';
    $contenue0='';
    $contenue5='<table><tr><th colspan="11">Information du client</th><tr><th>Id du client
    </th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th>
    <th>Numero de telephone</th><th>Email</th><th>Profession</th><th>Situation familiale
    </th><th>Charger client</th><th>Date d\'inscription</th></tr>
    <tr><td> '.$information->id_client .'</td> <td> '.$information->nom .'</td>  
    <td> '.$information->prenom .'</td> <td> '.$information->dateNaissance .'</td> 
    <td> '.$information->adresse .'</td> <td> '.$information->numTel .'</td> 
    <td> '.$information->mail .'</td> <td> '.$information->profession .'</td> 
    <td> '.$information->situation_familial .'</td>  <td> '.$information->id_employer 
    .'</td>  <td> '.$information->dateInscription.'</td> </table>';

    $contenue6='<table class="tab4"><tr><th>Liste des contrats du client</th></tr><tr><th>
    Ce client n\'a pas encore de contrats</th></tr></table>';
    $contenue7='<table class="tab4"><tr><th>Liste des comptes du client</th></tr><tr><th>
    Ce client n\'a pas encore de comptes</th></tr></table>';
    $contenue10='<form><fieldset><legend>Synthese du Client</legend>'.$contenue5.
    '<p></p>'.$contenue6.'<p></p>'.$contenue7.'</fieldset></form>';

    require_once('gabaritSynthese.php');
}
function afficherSyntheseSansContrat($comptes,$information){
	$contenue1="";
    $erreur='';
    $contenue2="";
    $contenue10='';
    $contenue0='';
     $contenue4='<table class="tab2"><tr><th colspan="5">liste des comptes du 
     client </th></tr><tr><th></th><th>nom du compte</th><th>Decouvert 
     autoriser</th><th>solde</th><th>Date d\'ouverture</th></tr>';
    $contenue5='<table><tr><th colspan="11">Information du client</th><tr><th>Id 
    du client</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th>
    <th>Numero de telephone</th><th>Email</th><th>Profession</th><th>Situation 
    familiale</th><th>Charger client</th><th>Date d\'inscription</th></tr>
    <tr><td> '.$information->id_client .'</td> <td> '.$information->nom .'</td>  
    <td> '.$information->prenom .'</td> <td> '.$information->dateNaissance .'</td> 
    <td> '.$information->adresse .'</td> <td> '.$information->numTel .'</td> 
    <td> '.$information->mail .'</td> <td> '.$information->profession .'</td> 
    <td> '.$information->situation_familial .'</td>  <td> '.$information->id_employer 
    .'</td>  <td> '.$information->dateInscription.'</td> </table>';
    $contenue6='<table class="tab4"><tr><th>Liste des contrats du client</th></tr><tr><th>
    Ce client n\'a pas encore de contrats</th></tr></table>';
	foreach($comptes as $ligne){
        $contenue0.='<tr><td></td><td>'.$ligne->nom_compte.'</td>
        <td>'.$ligne->montant_de_decouvert.'</td><td>'.$ligne->solde_actuel.'</td><td>'.$ligne->date_d_ouverture.'</tr>';
    }
    $contenue4.=$contenue0.'</table>';
    $contenue10='<form><fieldset><legend>Synthese du Client</legend>'.$contenue5.'<p>
    </p>'.$contenue6.'<p></p>'.$contenue4.'</fieldset></form>';
    require_once('gabaritSynthese.php');
}
function afficherSyntheseSansCompte($contrats,$information){
	$contenue1="";
    $erreur='';
    $contenue2="";
    $contenue10='';
    $contenue0='';
    $contenue3='<table class="tab3"><tr><th colspan="4">liste des contrats du client</th>
    </tr><tr><th></th><th>nom du contrat</th><th>Mensualite</th><th>Date douverture</th></tr>';
    $contenue10='';
     $contenue4='<table class="tab2"><tr><th colspan="5">liste des comptes du client </th>
     </tr><tr><th></th><th>nom du compte</th><th>Decouvert autoriser</th><th>solde</th><th>Date d\'ouverture</th></tr>';

    $contenue5='<table><tr><th colspan="11">Information du client</th><tr>
    <th>Id du client</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Adresse</th>
    <th>Numero de telephone</th><th>Email</th><th>Profession</th><th>Situation
     familiale</th><th>Charger client</th><th>Date d\'inscription</th></tr>
    <tr><td> '.$information->id_client .'</td> <td> '.$information->nom .'</td>  
    <td> '.$information->prenom .'</td> <td> '.$information->dateNaissance .'</td> 
    <td> '.$information->adresse .'</td> <td> '.$information->numTel .'</td> 
    <td> '.$information->mail .'</td> <td> '.$information->profession .'</td> 
    <td> '.$information->situation_familial .'</td>  <td> '.$information->id_employer 
    .'</td>  <td> '.$information->dateInscription.'</td> </table>';
    $contenue6='<table class="tab4"><tr><th>Liste des contrats du client</th></tr><tr><th>
    Ce client n\'a pas encore de comptes</th></tr></table>';
    foreach($contrats as $ligne){
        $contenue2.='<tr><td></td><td>'.$ligne->nom_contrat.'</td>
        <td>'.$ligne->tarif_mensuel.'</td><td>'.$ligne->date_de_souscription.'</td></tr>';
    }
    $contenue3.=$contenue2.'</table>';
    $contenue10='<form><fieldset><legend>Synthese du Client</legend>'.$contenue5.'<p>
    </p>'.$contenue3.'<p></p>'.$contenue6.'</fieldset></form>';
    require_once('gabaritSynthese.php');
}
function afficherRechercheId(){
	$erreur='' ;
	$contenu='';
	$contenu1='';
	$contenu2='';
	require_once('gabarit_tr_id.php');
}
function  afficherErreurRechercheId($msg){
    $contenu='';
    $contenu1='';
    $contenu2='';
    $erreur='<p>'.$msg.'</p>';
    require_once('gabarit_tr_id.php');
}
function afficherZoneDePrecision(){
    $erreur='';
    $contenu1='';
    $contenu2='';
    $contenu='<form action="frontal.php" method="post"><p class="messageAlerte">En raison de 
    plusieurs client  ayant le meme nom et la  meme date de naissance ,</br>
     Veuillez entrer le numero de telephone  du client Pour plus de precision !</p> 
     <p><input type="text" name="numeroTel"></p>
     <p><input type="submit" name="precision" value="rechercher"></p></form>';
     require_once('gabarit_tr_id.php');
}
function afficherId($id){
    $contenu='';
    $erreur='';
    $contenu2='';
    $contenu1='<label>Id du client rechercher :</label><input class="id" type="text" value="'.$id->id_client.'" readonly>';
    require_once('gabarit_tr_id.php');

}
function afficherIdx($id,$num){
    $erreur='';
    $contenu='';
    $contenu1='';
    $contenu2='<p>Numero de telephone entrer : <input class="zN" type="text" name="numeroTel" value="'.$num.'" readonly>
    </p><label>Id du client rechercher :</label><input class="id" type="text" value="'.$id->id_client.'" readonly>';
	require_once('gabarit_tr_id.php');
}








// function afficherSynthese($Synthese){
// 	$contenu='';
// 	foreach ($Synthese as $ligne){
// 		$contenu.= '<p>'.$ligne->nom.' </br> '.$ligne->prenom.'</br>'. $ligne->adresse. '</br>'. $ligne->numTel.'</br>'. $ligne->dateNaissance.'</br>'. $ligne->profession.'</br>'. $ligne->situation_familial.'</br>'. $ligne-> mail.'</br>'.$ligne->nom_conseiller.'</br>'
// 		.$ligne->nom_compte.'</br>'.$ligne->date_d_ouverture.'</br>'.$ligne-> solde_actuel.'</br>'.$ligne-> montant_de_decouvert.'</br>'
//             .$ligne->date_de_souscription.'</br>'.$ligne->tarif_mensuel.'</br>'.$ligne->nom_contrat.'</p>';

//     }
//     echo $contenu;
//  require_once('vue/gabarit_agent.php');
	
// }