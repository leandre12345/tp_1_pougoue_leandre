<?php
function validerMotDePasse($motDePasse) {
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    // Définir le salt
    $salt = "ABC1234@";

    // Concaténer le salt au mot de passe
    $motDePasseConcatene = $motDePasse . $salt;

    // Chiffrer le mot de passe
    $motDePasseChiffre = password_hash($motDePasseConcatene, PASSWORD_DEFAULT);

    // Retourner le résultat avec le salt et le mot de passe chiffré
    return [
        'message' => "Salt : $salt, Mot de passe chiffré : $motDePasseChiffre",
        'salt' => $salt,
        'motDePasseChiffre' => $motDePasseChiffre
    ];
}
?>
