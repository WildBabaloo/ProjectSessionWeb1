<?php
	// on récupère la session, ou on en crée un nouvelle
	session_start();
	// Si l'ulisateurConnecte n'exsite pas, alors on redirige vers la page de connexion
	if(!ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: demo5E03_connexion.php");
	} 
	
?>


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
        if(ISSET($_COOKIE["username"])){
            echo "<h1> Bienvenue ".$_COOKIE["username"]."</h1> <br />";
        }
    ?>
	<h3><a href="deconnexion.php">Déconnexion</a></h3>
	<h3><a href="root.php"> Retour </a></h3>
</body>
</html>