<?php

var_dump($_POST);

if (empty($_POST)) {
    // exit termine le script en cours en affichant un message à l'écran
    //exit("Merci de remplir le formulaire de contact");

    // Redirection : on envoie une en-tête HTTP de redirection au client
    // Il faut qu'aucun contenu HTML ou texte brut n'ait été envoyé avant
    header('Location: index.php');
    die();
}

// Traitement du formulaire
 var_dump($_POST);

// Traitement du fichier
if (array_key_exists('userfile', $_FILES)) {
    $tmp_name = $_FILES['userfile']['tmp_name'];
    $filename = $_FILES['userfiles']['name'];
    $upload_folder = $_SERVER['DOCUMENT_ROOT'] . '\www\exo_upload_fichier';

    // $_SERVER ['DOCUMENT_ROOT']
     if (is_uploaded_file($tmp_name) &&
        move_uploaded_file(
             $tmp_name,
             $upload_folder . $filename)) {
     }
}

