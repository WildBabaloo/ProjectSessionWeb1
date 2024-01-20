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
    <p> Chercher des produits </p>
    <br>
    <form method="get"> 
    <div class="col-6"> <p class="pb-1 username">Entrez la description</p> <input type="text" class="form-control mb-4" name="description" required id="description" placeholder="Saisir la description"> </div>
    <br> <br>
    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
    </form>
    <br> <br> OU <br> <br> 
    <form method="get"> 
    <div class="col-6"> <p class="pb-1 username">Entrez la marque</p> <input type="text" class="form-control mb-4" name="marque" required id="marque" placeholder="Saisir la marque"> </div>
    <br> <br>
    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
    </form>
    <p>
        <br> <br>
    <?php
    	if (defined("DOSSIER_BASE_INCLUDE") == false) {
            define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."my-app/projet-session-andrew/");
        }
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/ProduitDAO.class.php");
    if(ISSET($_GET['description'])) {
        echo "<p> Résultat de la recherche : </p>";
        $tabProduits=ProduitDAO::chercherAvecFiltre("WHERE description LIKE '%".$_GET['description']."%'");
        if ($tabProduits!=null){
        foreach ($tabProduits as $unProduit) {
            echo "<li>$unProduit</li>";
        }
    }
    else {
        echo "Pas d'item ayant cette description";
    }
    }
    elseif(ISSET($_GET['marque'])) {
        echo "<p> Résultat de la recherche : </p>";
        $tabProduits=ProduitDAO::chercherAvecFiltre("WHERE marque LIKE '%".$_GET['marque']."%'");
        if ($tabProduits!=null){
        foreach ($tabProduits as $unProduit) {
            echo "<li>$unProduit</li>";
        }
        }
        else {
            echo "Pas d'item ayant cette marque";
        }
    }

?>
</p>

<br> <br> <br> 

    <a href="root.php"> Retour </a> 
</body>
</html>