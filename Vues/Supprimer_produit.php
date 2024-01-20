
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
    <p> Supprimer un produit </p>
<br> <br> <br>
    <form method="get"> 
    <div class="col-6"> <p class="pb-1 username">Code</p> <input type="number" class="form-control mb-4" name="code" required id="code" placeholder="Saisir le code"> </div>
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
    if(ISSET($_GET['code'])) {
        $unProduit=ProduitDAO::chercher($_GET['code']);
        if ($unProduit != null) {
            $test=ProduitDAO::supprimer($unProduit);
            echo "<ul><li>Insertion #1".($test?" a réussie":" a échouée")."</li></ul>";
        }
    }

?>
</p>

<br> <br> <br> 

    <a href="root.php"> Retour </a> 
</body>
</html>