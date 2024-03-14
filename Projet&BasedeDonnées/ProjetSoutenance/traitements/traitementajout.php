<?php
// Afficher dès qu'il y aura une erreur
error_reporting(E_ALL);
ini_set("display_errors", 1);

// CONNEXION A LA BASE DE DONNEES
$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $bdd = new PDO("mysql:host=$servername;dbname=projetsoutenance", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'ERREUR :'.$e->getMessage();
}

if (isset($_POST['titredumemoire'])) {
    $titredumemoire = ($_POST['titredumemoire']);
    $resumer = ($_POST['resumer']);
    $motcles = ($_POST['motcles']);
    $datedesoutenance = ($_POST['datedesoutenance']);
    $nomauteur = ($_POST['nomauteur']);
    $numeroetudiant = ($_POST['numeroetudiant']);
    $faculter = ($_POST['faculter']);
    $filiere = ($_POST['filiere']);
    $anneesoutenance = ($_POST['anneesoutenance']);  
    $languememoire = ($_POST['languememoire']);
    $fichierNom = $_FILES['fichier'];

    if (isset($titredumemoire, $resumer, $motcles, $datedesoutenance, $nomauteur, $numeroetudiant, $faculter, $filiere, $anneesoutenance, $languememoire, $fichier) && 
        !empty($_POST['titredumemoire']) && !empty($_POST['resumer']) && !empty ($_POST['motcles']) && !empty($_POST['datedesoutenance']) && !empty($_POST['nomauteur']) && 
        !empty($_POST['numeroetudiant']) && !empty($_POST['faculter']) && !empty($_POST['filiere']) && !empty($_POST['anneesoutenance']) && !empty($_POST['languememoire']) && 
        !empty($_FILES['fichier']['name'])) {

        // VERIFIONS SI L'ARTICLE EXISTE DEJA
        $reqSelect = $bdd->prepare('SELECT count(*) as count FROM memoires WHERE titredumemoire = ?');
        $reqSelect->execute(array($titredumemoire));
        $resultat = $reqSelect->fetch();

        if ($resultat['count'] > 0) {
            echo "Mémoire ajouté existe déjà.";
        } else {
            if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
                // vérifion la taille du fichier à 2Mo
                if ($_FILES['fichier']['size'] <= 2000000) {
                    $fichierNom = $_FILES['fichier']['name'];
                    $extension = pathinfo($fichierNom, PATHINFO_EXTENSION);
                    $extensionsAutorisees = array('pdf');
                    if (in_array($extension, $extensionsAutorisees)) {
                        // on ajoute le fichier dans le dossier 
                        move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($fichierNom));
                        $filename = 'uploads/' . basename($fichierNom);

                        $sql = "INSERT INTO memoires(titredumemoire, resumer, motcles, datedesoutenance, nomauteur, numeroetudiant, faculter, filiere, anneesoutenance, languememoire, fichiermemoire) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                        $req = $bdd->prepare($sql);
                        $req->execute(array($titredumemoire, $resumer, $motcles, $datedesoutenance, $nomauteur, $numeroetudiant, $faculter, $filiere, $anneesoutenance, $languememoire, $fichierNom));
                        echo ' Mémoire publié !';
                    } else {
                        echo 'Le fichier n\'est pas de type PDF.';
                    }
                } else {
                    echo 'Le fichier ne doit pas dépasser 2Mo.';
                }
            } else {
                echo 'Impossible d\'ajouter le fichier.';
            }
        }
    } else {
        echo "Remplissez tout les champs.";
    }
}
?>
