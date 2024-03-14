<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="ins">
    <div>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="">
                        <i class="navbar-brand-icon bi-etu faaba me-2"></i>
                        <span>ETU FAABA</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php">ACCUEIL</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="infos.php">ARTICLES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="ajout.php">MÉMOIRES</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <br><br><br>
        <h3>CONNEXION</h3>
        <div>
            <form action="traitements/traiteme" method="post" style="width: 500px; margin:auto;" class="text-center">
                <div>
                    <label for="email" style="margin-right: 500px;">Email</label><br>
                    <input class="form-control" type="text" id="email" name="email">
                </div><br>
                <div>
                    <label for="passworde" style="margin-right: 400px;">Mot de passe</label><br>
                    <input class="form-control" type="text" id="passworde" name="passworde">
                </div><br>
                <div class="enregistrer">
                  <a href="index.php" class="btn btn-secondary" style="background-color: gray; color:black; border-radius:9px">Se connecter</a>
                </div>
                </form>
        </div><br>
        
    </section>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>