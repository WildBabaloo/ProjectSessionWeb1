<?php
	if (defined("DOSSIER_BASE_INCLUDE") == false) {
		define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."my-app/projet-session-andrew/");
	}
include (DOSSIER_BASE_INCLUDE.'modele/DAO/UtilisateurDAO.class.php');

// on récupère la session ou on en crée une nouvelle
session_start();

// Si un formulaire post a été soumis
if(ISSET($_POST['nom_utilisateur']) AND ISSET($_POST['mot_passe'])) {
  // On récupère l'utilisateur à partir du DAO
  $unUtilisateur=UtilisateurDAO::chercher($_POST['nom_utilisateur']);
  // Si l'utilisateur existe et que le mot de passe est bon
  if ($unUtilisateur != null) {
    if ($unUtilisateur->verifierMotPasse($_POST['mot_passe'])){
      // on créer la variable de session utilisateurConnecte
      $_SESSION['utilisateurConnecte']=$_POST['nom_utilisateur'];
      // On redirige vers la page privee, puisqu'on est maintenant connecté
      header ("Location: ./Vues/index-hidden.php");
    }
  }
}
// Sinon, si la session est active, on redirige aussi vers la page privée
elseif(ISSET($_SESSION['utilisateurConnecte'])){
  header ("Location: ./Vues/index-hidden.php");
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
  <link rel="stylesheet" href="css/style-projet.css" />
</head>
<body class="bg-index">
    <nav class="nav navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
        <a href="#" style="text-indent: 10px;" class="navbar-brand">Rosemont Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./Vues/produits.php" class="nav-link">Nos Produits</a>
                    </li>
                    <li class="nav-item">
                        <a href="./Vues/local.php" class="nav-link">Nos Emplacements</a>
                    </li>
                    <li class="nav-item">
                        <a href="./Vues/contact.php" class="nav-link">Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                        <a href="./Vues/presentation.php" class="nav-link">À propos de nous</a>
                    </li>
                    <li class="nav-item">
                      <a href="./Vues/compte.php" class="nav-link">Login</a>
                  </li>
                  
                </ul>
            </div>
        </div>
        <br> <br> <br> 
    </nav>
    <br> <br>
    <h1 class="text-white text-center">Nouveaux produits </h1>
    <h5 class="text-center" style="color: white;">(Les buttons de la carousel sont bogués. Un jour il marche et un autre jour elle ne marche pas <br> sans aucune modification. J'espère que les boutons marchent pour vous :D)</h5>
      <section class="">
        <div class="container my-5">
      <!-- Carousel Start -->
      <div id="carouselBasicExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <!-- Buttons -->
        <div class="d-flex justify-content-center mb-4">
          <button class="carousel-control-prev position-relative bg-primary" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next position-relative bg-primary" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="carousel-inner py-4">
          <!-- Page 1 -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <img src="./image/1HU-024C-00005-S07.jpg" width="400" height="400" class="card-img-top" alt="Super Flower Leadex III 850"/>
                    <div class="card-body">
                      <h5 class="card-title">Super Flower Leadex III 850W</h5>
                      <p class="card-text" style="text-align: center;">
                        $189.99
                      </p>
                      <a href="https://www.newegg.ca/super-flower-leadex-iii-sf-850f14hg-850w/p/1HU-024C-00005?Item=9SIAU16DEM6644&cm_sp=Homepage_SS-_-P0_9SIAU16DEM6644-_-02052022" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img src="./image/5a7bf7a46d638a3d46427eef-1-large.jpg" width="400" height="400" class="card-img-top" alt="Lumière de toilette à capteur de mouvement humain 12 couleurs"/>
                    <div class="card-body">
                      <h5 class="card-title">Lumière de toilette à capteur <br> de mouvement humain 12 couleurs</h5>
                      <p class="card-text" style="text-align: center;">
                        $3.20 <s>$4</s>
                      </p>
                      <a href="https://www.wish.com/feed/tabbed_feed_latest/product/5a7bf7a46d638a3d46427eef?hide_login_modal=true&source=tabbed_feed_latest&position=62&share=web" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                         src="./image/5bf3779ab1e61b6235daea71-large.jpg" width="400" height="400"
                         class="card-img-top"
                         alt="Smart Watch"
                         />
                    <div class="card-body">
                      <h5 class="card-title">Smart Watch</h5>
                      <p class="card-text" style="text-align: center;">
                        $8.89
                      </p>
                      <a href="https://www.wish.com/feed/tabbed_feed_latest/product/5bf3779ab1e61b6235daea71?source=tabbed_feed_latest&position=55&share=web" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Page 2 -->
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12">
                  <div class="card">
                    <img
                         src="./image/5f8d594699fdc2246b38d842-large.jpg" width="400" height="400"
                         class="card-img-top"
                         alt="..."
                         />
                    <div class="card-body">
                      <h5 class="card-title">Puissant pointeur laser RBG</h5>
                      <p class="card-text" style="text-align: center;">
                        $1
                      </p>
                      <a href="https://www.wish.com/feed/tabbed_feed_latest/product/5f8d594699fdc2246b38d842?source=tabbed_feed_latest&position=1&hide_login_modal=true&share=web" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                         src="./image/11-146-317-V01.jpg" width="400" height="400"
                         class="card-img-top"
                         alt="..."
                         />
                    <div class="card-body">
                      <h5 class="card-title">NZXT H510 ATX Mid-Tower <br> Boîtier de jeu pour PC</h5>
                      <p class="card-text" style="text-align: center;">
                        $99.99 <s>$129.99</s>
                      </p>
                      <a href="https://www.newegg.ca/p/pl?N=100007582%20600545969&cm_sp=Tab_Components_4-_-visnav-_-Mid-ATX_3" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                         src="./image/20-147-743-V01.jpg" width="400" height="400"
                         class="card-img-top"
                         alt="..."
                         />
                    <div class="card-body">
                      <h5 class="card-title">SAMSUNG 970 EVO PLUS M.2 2280 1TB PCIe</h5>
                      <p class="card-text" style="text-align: center;">
                        $159.99
                      </p>
                      <a href="https://www.newegg.ca/samsung-970-evo-plus-1tb/p/N82E16820147743?Item=N82E16820147743&cm_sp=Homepage_dailydeals-_-P0_20-147-743-_-02052022" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Page 3 -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <div class="card">
                    <img
                         src="./image/22-179-010-V02.jpg" width="400" height="400"
                         class="card-img-top"
                         alt="..."
                         />
                    <div class="card-body">
                      <h5 class="card-title">Seagate BarraCuda ST1000DM010 1TB</h5>
                      <p class="card-text" style="text-align: center;">
                        $54.99
                      </p>
                      <a href="https://www.newegg.ca/seagate-barracuda-st1000dm010-1tb/p/N82E16822179010?Item=N82E16822179010" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card">
                    <img
                         src=".image/60bdc4660968670c43384d05-1-large.jpg" width="400" height="400"
                         class="card-img-top"
                         alt="..."
                         />
                    <div class="card-body">
                      <h5 class="card-title">Casque de jeu professionnel G9000Pro</h5>
                      <p class="card-text" style="text-align: center;">
                        $37 <s>$364</s>
                      </p>
                      <a href="https://www.wish.com/search/computer/product/60bdc4660968670c43384d05?source=search&position=46&share=web" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card">
                    <img
                         src="./image/61af0ad5a872b363054e2c82-large.jpg" width="400" height="400"
                         class="card-img-top"
                         alt="..."
                         />
                    <div class="card-body">
                      <h5 class="card-title">Lampe de poche à lumière forte <br> rechargeable par USB</h5>
                      <p class="card-text" style="text-align: center;">
                        $8
                      </p>
                      <a href="https://www.wish.com/feed/tabbed_feed_latest/product/5fbc68d2d68ab7afc1b406a5?hide_login_modal=true&source=tabbed_feed_latest&position=20&share=web" class="btn btn-primary">Voir l'article</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
  </section>
</body>
</html>