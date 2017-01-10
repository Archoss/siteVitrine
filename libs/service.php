<?php
include_once('../inc/connexion.php');


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

	if(!empty(trim($_POST['nom'])) && !empty(trim($_POST['prenom'])) && !empty(trim($_POST['place']))){
		$sql = 
		"INSERT INTO `reservation` (`res_place`, `res_jour`, `res_heure`, `res_nom`, `res_prenom`) VALUES (:place, :jour, :heure, :nom, :prenom);";

		$req = $connexion->prepare($sql);
		$datas = array(	'place' =>$_POST['place'],
						'jour'=>$_POST['jour'],
						'heure'=>$_POST['heure'],
						'nom'=> $_POST['nom'],
		 			   'prenom'=>$_POST['prenom'] ,
		 			   );
		               
		$req->execute($datas);
	
	
}
	
	  	
	header('Location: ../index.php');
}





