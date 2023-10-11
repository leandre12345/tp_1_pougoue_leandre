<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'index.php'; 
    $motDePasse = $_POST['motDePasse'] ?? '';

    $resultat = validerMotDePasse($motDePasse);

    echo "<p>{$resultat['message']}</p>";
 
} else {
    echo "Erreur : Accès non autorisé.";
}
?>
