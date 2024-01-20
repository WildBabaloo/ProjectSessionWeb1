<?php
	if (defined("DOSSIER_BASE_INCLUDE") == false) {
		define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."my-app/projet-session-andrew/");
	}
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/UtilisateurDAO.class.php");

  session_start();
	
	// Si un formulaire post a été soumis
	if(ISSET($_POST['nom_utilisateur']) AND ISSET($_POST['mot_passe'])) {
		// On récupère l'utilisateur à partir du DAO
		$unUtilisateur=UtilisateurDAO::chercher($_POST['nom_utilisateur']);
		// Si l'utilisateur existe et que le mot de passe est bon
		if ($unUtilisateur != null) {
			if ($unUtilisateur->verifierMotPasse($_POST['mot_passe'])){
        $username=$_POST['nom_utilisateur'];
        setcookie("username", $username, time() + 3600);
				// on créer la variable de session utilisateurConnecte
				$_SESSION['utilisateurConnecte']=$_POST['nom_utilisateur'];
				// On redirige vers la page privee, puisqu'on est maintenant connecté
        if ($unUtilisateur == "root"){
          header ("Location: root.php");
        }
        else {
          header ("Location: index-hidden.php");
        }
			}
		}
	}
	// Sinon, si la session est active, on redirige aussi vers la page privée
	elseif(ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: index-hidden.php");
	} 
    else {}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Rosemont Tech</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style-projet.css" />
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
      <br> 
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
                alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" id="container1">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">S'inscrire avec</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1" onclick="window.location.href='https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&flowName=GlifWebSignIn&flowEntry=ServiceLogin';">
                    <img src="https://webstockreview.net/images/google-logo-white-png-12.png" alt="google logo" width="20" height="20"/>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1" onclick="window.location.href='https://facebook.com';">
                    <img src="https://i0.wp.com/www.vectorico.com/wp-content/uploads/2018/02/Facebook-Logo-Dark.png?resize=300%2C300" alt="facebook logo" width="20" height="20"/>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1" onclick="window.location.href='https://www.linkedin.com/login/';"> 
                    <img src="https://www.vectorico.com/wp-content/uploads/2018/02/LinkedIn-Icon-Squircle-Dark.png" alt="linkedin logo" width="20" height="20"/>
                  </button>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Ou</p>
                </div>
      
                <!-- Email input -->
              <form action = "" method="post">
                <div class="form-outline mb-4">
                  <input type="text" id="nom_utilisateur" class="form-control form-control-lg"
                    placeholder="Entrez votre nom d'utilisateur" name="nom_utilisateur" required/>
                  <h6><label class="form-label" for="nom_utilisateur">Nom d'utilisateur</label></h6>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="text" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Entrez votre mot de passe" name="mot_passe" required />
                  <h6><label class="form-label" for="mot_passe">Mot de passe</label></h6>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <h6><label class="form-check-label" for="form2Example3">
                      Souvenez de moi
                    </label> </h6>
                  </div>
                </div>

                <?php
                	if(ISSET($_POST['nom_utilisateur']) AND ISSET($_POST['mot_passe'])) {
                    // On récupère l'utilisateur à partir du DAO
                    $unUtilisateur=UtilisateurDAO::chercher($_POST['nom_utilisateur']);
                    // Si l'utilisateur existe et que le mot de passe est bon
                  if ($unUtilisateur != null) {
                  if ($unUtilisateur->verifierMotPasse($_POST['mot_passe'])){
                  }
                  else {
                    echo "<br />";
                    echo "<p style='color:red'> Info mauvaise </p>";
                  }
                }
                else {
                  echo "<br />";
                  echo "<p style='color:red'> Info mauvaise </p>";
                }
              }
                ?>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Pas de compte? <a href="inscription.php"
                      class="link-danger">S'inscrire</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <br> <br> <br> <br>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2022. Tous droits réservés.
          </div>
        </div>
      </section>

</body>
</html>