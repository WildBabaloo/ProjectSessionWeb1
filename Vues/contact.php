<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Rosemont Tech</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles-contact.css" />
</head>
<body style="background: url(https://img.freepik.com/free-photo/technology-network-background_34629-304.jpg?size=626&ext=jpg)">
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
      <div class="contact">
        <div class="overlay">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9">
                    <div class="contact-us text-center">
                        <h3>Nous Contacter</h3>
                        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-5 text-center px-3">
                                    <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"><img src="data:image/png;base64,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" alt="adresse" width="30" height="30"/></i></span>
                                        <div class="address text-left">
                                            <p>6400 16e Avenue, Montréal, QC H1X 2S9</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm8305yTjzmvVPZGymjZnKb2jiCy7qdxvJfw&usqp=CAU" alt="telephone" width="30" height="30" /></i></span>
                                        <div class="address text-left">
                                            <p>(514) 376-1620</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"><img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-email-512.png" alt="email" width="30" height="30" /></i></span>
                                        <div class="address text-left">
                                            <p>registrariat@crosemont.qc.ca</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center px-1">
                                    <div class="forms p-4 py-5">
                                        <h5>Envoyer un message</h5>
                                        <form action="index.html">
                                        <div class="mt-4 inputs"> <input type="text" class="form-control" placeholder="Nom" required> <input type="text" class="form-control" placeholder="Email" required> <textarea class="form-control" placeholder="Votre message..." required></textarea> </div>
                                        <div class="button mt-4 text-left"> <button class="btn btn-primary" type="submit">Envoyer</button> </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
