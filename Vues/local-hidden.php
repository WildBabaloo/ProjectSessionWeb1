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
<body class="bg-local">
    <nav class="nav navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
        <a href="#" style="text-indent: 10px;" class="navbar-brand">Rosemont Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                <?php
                  if(ISSET($_COOKIE["username"])){
                  if ($_COOKIE["username"] == "root"){
                    echo "<li class='nav-item'>";
                        echo "<a href='root.php' class='nav-link'>Admin options</a>";
                    echo "</li>";
                  }
                  }
                    ?>
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
    <p class="text-center" style="color:white; font-size: 40px;"><b>Notre emplacement</b></p>
    <!-- <a href="#" style="float:left;text-align:left;"><img src="./image/bkpolen.gif" alt="GIF Ad 1" width="300" height="500"/> </a> -->
    <!-- <a href="#" style="float:right;text-align:right;"><img src="./image/bkpolen.gif" alt="Ad 3" width="300" height="500"/> </a> -->
    <p class="text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22345.769754652192!2d-73.58190069999999!3d45.5659898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91eace22b9bcf%3A0x18799aed17aa23d9!2sColl%C3%A8ge%20de%20Rosemont!5e0!3m2!1sfr!2sca!4v1644327000697!5m2!1sfr!2sca" width="750" height="750" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
    <br> <br>
</body>