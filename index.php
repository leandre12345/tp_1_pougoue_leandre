<?php
function validerMotDePasse($motDePasse) {
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }
    $salt = "LEA10#";
    $motDePasseAdd = $motDePasse . $salt;

    // Chiffrer le mot de passe
    $motDePasseEncryptage = password_hash($motDePasseAdd, PASSWORD_DEFAULT);

    // Retourner le résultat avec le salt et le mot de passe chiffré
    return [
        'message' => "Salt : $salt, Mot de passe chiffré : $motDePasseEncryptage",
        'salt' => $salt,
        'motDePasseEncryptage' => $motDePasseEncryptage
    ];
}
?>
