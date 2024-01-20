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
    <p> Ajouter un produit </p>
<br> <br> <br>
    <form method="get"> 
    <div class="col-6"> <p class="pb-1 username">Code</p> <input type="number" class="form-control mb-4" name="code" required id="code" placeholder="Saisir le code"> </div>
    <div class="col-6"> <p class="pb-1 username">Description</p> <input type="text" class="form-control mb-4" name="description" required id="description" placeholder="Saisir la description"> </div>
    <div class="col-6"> <p class="pb-1 username">Marque</p> <input type="text" class="form-control mb-4" name="marque" required id="marque" placeholder="Saisir la marque"> </div>
    <div class="col-6"> <p class="pb-1 username">Prix</p> <input type="text" class="form-control mb-4" name="prix" required id="prix" placeholder="Saisir le prix"> </div>
    <div class="col-6"> <p class="pb-1 username">Url Photo</p> <input type="text" class="form-control mb-4" name="url_photo" required id="url_photo" placeholder="Saisir l'URL"> </div>
    <br> <br>
    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
    </form>
    <br> <br> <br> 
    <p>
    <?php
    	if (defined("DOSSIER_BASE_INCLUDE") == false) {
            define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."my-app/projet-session-andrew/");
        }
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/ProduitDAO.class.php");
    if(ISSET($_GET['code']) and ISSET($_GET['description']) and ISSET($_GET['marque']) and ISSET($_GET['prix']) and ISSET($_GET['url_photo'])) {
            $unProduit = new Produit ($_GET['code'], $_GET['description'], $_GET['marque'], $_GET['url_photo'], $_GET['prix'], 0);
            $test=ProduitDAO::inserer($unProduit);
            echo "<ul><li>Insertion #1".($test?" a réussie":" a échouée")."</li></ul>";
        }

?>
</p>


    <a href="root.php"> Retour </a> 
</body>
</html>