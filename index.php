<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");

$_COOKIE['langue']="fr";
if($_COOKIE['langue'] == "fr") //Si le cookie nommé "langue" a pour valeur "fr"
{
    include('lang/fr.php');
}
elseif($_COOKIE['langue'] == "en")
{
    include('lang/en.php');
}



include("vues/v_entete.php") ;
session_start();




$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 
	}
}
include("vues/v_pied.php") ;
?>

