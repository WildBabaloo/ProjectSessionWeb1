<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Rosemont Tech</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style-projet.css" />
  <style> body {background-color: #D3D3D3 } </style>
</head>
<body class="">
    <nav class="nav navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
        <a href="#" style="text-indent: 10px;" class="navbar-brand">Rosemont Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index-hidden.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="produits-hidden.php" class="nav-link">Nos Produits</a>
                    </li>
                    <li class="nav-item">
                        <a href="local-hidden.php" class="nav-link">Nos Emplacements</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact-hidden.php" class="nav-link">Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                        <a href="presentation-hidden.php" class="nav-link">À propos de nous</a>
                    </li>
                    <li class="nav-item">
                      <a href="faire-deconnexion.php" class="nav-link">Déconnexion</a>
                  </li>
                </ul>
            </div>
        </div>
        <br> <br> <br> 
    </nav>
    <br> <br>
    <div class=container>
    <?php
        if(ISSET($_COOKIE["username"])){
            echo "<h1> Welcome ".$_COOKIE["username"]."</h1> <br />";
        }
    ?>
    <h1>
    <p> Les options admin : </p>

    <p> <a href="Chercher_produit.php">Chercher un produit spécifique</a></p>

    <p> <a href="Chercher_Des_Produits.php">Chercher des produits ayant le même code</a></p>

    <p> <a href="Ajouter_produit.php">Ajouter un produit</a></p>

    <p> <a href="Supprimer_produit.php">Supprimer un produit</a></p>
    </h1>

    </div>

</body>