<?php
function validerMotDePasse($motDePasse) {
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }
    $salt = "ABC1234@";

    $motDePasseAdd = $motDePasse . $salt;

    $motDePassecrypté = password_hash($motDePasseAdd, PASSWORD_DEFAULT);

   
    return [
        'message' => " Acces validé youpii  Votre Salt est: $salt, Mot de passe crypté est : $motDePassecrypté",
        'salt' => $salt,
        'motDePasseChiffre' => $motDePassecrypté
    ];
}
?>
