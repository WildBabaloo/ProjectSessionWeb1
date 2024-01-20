<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosemont Tech</title>
    <style> body {background-color: #D3D3D3 } </style>
</head>
<body>
<?php
	if (defined("DOSSIER_BASE_INCLUDE") == false) {
		define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."my-app/projet-session-andrew/");
	}
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/UtilisateurDAO.class.php");
	
	// on récupère la session ou on en crée une nouvelle
	session_start();

    if(ISSET($_POST['nom_utilisateur']) AND ISSET($_POST['mot_passe'])) {
        $unUtilisateur = new Utilisateur($_POST['nom_utilisateur'], $_POST['mot_passe']);
        $test = UtilisateurDAO::inserer($unUtilisateur);
        echo "<h1> Compte Crée </h1>";
        echo "<h2> <a href='compte.php'> Login </a> </h2>";
    } else {
        echo "<h1> ERREUR! Retry inscription </h1>";
        echo "<h2> <a href='inscription.php> Retour </a> </h2>"
    }


?>
</body>
</html>