<?php
	// On démarre la session, ou on la récupère
	session_start();
    // nom par défaut
	$nomUtilisateur = "";

	// Si l'utilisateur n'était pas connecté, on le redirige versla page de connexion
	if(!ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: compte.php");
	} 
	
	// Sinon, on récupère le nom d'utilisateur et on supprime le variable de 
	// session qui indique que l'utilisateur est connecté
	$nomUtilisateur = $_SESSION['utilisateurConnecte'];
	unset($_SESSION['utilisateurConnecte']);
    header("Location : compte.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Rosemont Tech</title>
<style> body {background-color: #D3D3D3 } </style>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/style-projet.css" />
</head>
<body >
    Actualiser la page SVP 

    Merci
</body>
</html>