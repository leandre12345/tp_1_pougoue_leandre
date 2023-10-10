<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'index.php'; // Inclure le fichier avec la fonction

    // Récupérer le mot de passe depuis le formulaire HTML
    $motDePasse = $_POST['motDePasse'] ?? '';

    // Appeler la fonction avec le mot de passe fourni
    $resultat = validerMotDePasse($motDePasse);

    // Afficher le résultat de la validation
    echo "<p>{$resultat['message']}</p>";

    // Vous pouvez utiliser $resultat['salt'] et $resultat['motDePasseChiffre'] comme vous le souhaitez
} else {
    // Redirection vers le formulaire si la page est accédée directement
    header('Location: index.html');
    exit();
}
?>
