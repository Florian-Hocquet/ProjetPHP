<?php
include "../model/utils.inc.php";
include "../model/link.inc.php";
include '../model/dtb.inc.php';

//Demarrage de la page
start_page($myprofile, $logincss, $background4);


//Demarrage de la session
session_start();



if ($step == 'ERROR_mdp') {
    echo 'La confirmation de mot de passe est incorrecte'.'<br/>';
} else if ($step == 'ERROR_incomplet') {
    echo 'Merci de bien remplir tous les champs du formulaire'.'<br/>';
}

require $myprofilemodel;

//Affichage de la page
require $myprofileview;

end_page();
