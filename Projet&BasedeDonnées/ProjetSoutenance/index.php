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
<section>
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
                    
                    <div class="d-none d-lg-block">
                        <a href="index.php" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-connexion"></i>
                            <span>Se connecter</span>
                        </a>
                    </div>
                    <div class="d-none d-lg-block">
                        <a href="connexion.php" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-déconnexion"></i>
                            <span>Se déconnecter</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>    
</section>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>