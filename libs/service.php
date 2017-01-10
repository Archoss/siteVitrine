<?php
include_once('../inc/connexion.inc.php');
include_once('../inc/functions.inc.php');

// on vérifie que l'on a bien une action passée en GET
if(isset($_GET['action']) && $_GET['action']!=""){
	switch($_GET['action']){
		case "reserver":
			reserver();
		break;
		
		default:
			header('Location: ../index.php');
		break;
	}
} else {
	header('Location: ../index.php');
}



function reserver(){
	global $connexion;

	if(!empty(trim($_POST['nom'])) && !empty(trim($_POST['prenom'])) !empty(trim($_POST['place']))){
		$sql = "INSERT INTO eleves (res_name, res_firstname, res_place) VALUES (:name, :firstname , :place)";
		$req = $connexion->prepare($sql);
		$datas = array('name'=> $_POST['nom'], 'firstname'=>$_POST['prenom']  'place' =>$_POST['place']);
		$req->execute($datas);
	}
	  	
	header('Location: ../index.php');
}





}