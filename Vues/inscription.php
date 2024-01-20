<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Rosemont Tech</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles-inscription.css" />
</head>
<body style="background-color: black">
    <nav class="nav navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
          <a href="#" style="text-indent: 10px;" class="navbar-brand">Rosemont Tech</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navmenu">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a href="../index.php" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item">
                          <a href="produits.php" class="nav-link">Nos Produits</a>
                      </li>
                      <li class="nav-item">
                          <a href="local.php" class="nav-link">Nos Emplacements</a>
                      </li>
                      <li class="nav-item">
                          <a href="contact.php" class="nav-link">Nous Contacter</a>
                      </li>
                      <li class="nav-item">
                          <a href="presentation.php" class="nav-link">À propos de nous</a>
                      </li>
                      <li class="nav-item">
                        <a href="compte.php" class="nav-link">Login</a>
                    </li>
                  </ul>
              </div>
          </div>
          <br> <br> <br> 
      </nav>
      <br> <br> <br> <br>
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
              alt="Sample image">
          </div>
      <div class="container pt-4 pb-5" id="container1">
        <form action="compte-cree.php" method="post">
            <div class="text-center pt-3">
                <p class="display-7 fw-bold text-center"><span class="ps-1"> Inscription</span></p> 
                <div class="d-flex align-items-center justify-content-center mb-3" style="font-size: small;">
                    <span class="text-muted">Vous avez déjà un compte?</span>
                    <div class="btn btn-primary"><a href="compte.php">S'identifier</a></div>
                </div>
            </div>
            <div class="row px-md-4 px-1 m-0">
                <div class="col-12">
                    <div>
                        <p class="pb-1 username">Nom d'utilisateur</p> <input type="text" id="nom_utilisateur" class=" name form-control mb-4" name="nom_utilisateur" required placeholder="Entrez votre nom d'utilisateur">
                    </div>
                </div>
                <div class="col-6"> <p class="pb-1 username">Prénom</p> <input type="text" class="form-control mb-4" name="name" required id="name" placeholder="Prénom"> </div>
                <div class="col-6"> <p class="pb-1 username">Nom de famille</p> <input type="text" class="form-control mb-4" required placeholder="Nom de famille"> </div>
                <div class="col-12"> <p class="pb-1 username">Mot de passe</p> <input type="password" class="form-control mb-4" name="mot_passe" id="mot_passe" required placeholder="Mot de passe">  </div>
                <div class="col-12 create">
                    <button class="btn btn-primary py-3 " type="submit">
                        <span class="d-flex align-items-center justify-content-between">
                            <span>Créer votre compte</span> <span class="fas fa-arrow-right "></span>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
        </div>
      </div>
      <br> <br> <br>
      <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
        <!-- Copyright -->
        <div class="text-white mb-3 mb-md-0">
          Copyright © 2022. Tous droits réservés.
        </div>
      </div>
</body>
</html>  