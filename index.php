
<?php
require 'Fonction.php';

if (!empty($_POST)) {
    if ($_POST['prenom'] == "") {
        $errors[] = '<p class="errors"> Merci de saisir un prénom</p>';
    }
    if ($_POST['nom'] == "") {
        $errors[] = '<p class="errors"> Merci de saisir un nom</p>';
    }
    if ($_POST['pwd1'] == "") {
        $errors[] = '<p class="errors"> Merci de saisir un mot de passe</p>';
    }
    if (!isset($_POST['civ'])) {
        $errors[] = '<p class="errors"> Veuillez choisir une civilité</p>';
    }
    if ($_POST['contrat'] == "") {
        $errors[] = '<p class="errors"> Veuillez sélectionner un type de contrat </p>';
    }
    if ($_POST['motivation'] == "") {
        $errors[] = '<p class="errors"> Merci de saisir une motivation</p>';
    }
    if ($_FILES['cv']['error'] != UPLOAD_ERR_OK) {
        $errors[] = '<p class="errors"> Une erreur cest produite lors du téléchargemet du CV';
    }
    if ($_POST['pwd1'] != $_POST['pwd2']) {
        $errors[] = '<p class="errors"> Les mots de passe doivent être identiques</p>';
    }
    if (strlen($_POST['pwd1']) < 6) {
        $errors[] = '<p class="errors"> Mot de passe trop court, 6 caractères minimum</p>';
    }
}


if (!empty($_POST) && !isset($errors)) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip = str_replace('.', '_', $ip);
    $file = 'stockage/' . $ip . '/reponse.txt';
    if (!is_dir('stockage/' . $ip)) {
        mkdir('stockage');
        mkdir('stockage/' . $ip);
    }
    file_put_contents($file, $_POST, LOCK_EX);
    $tmp_name = $_FILES['cv']['tmp_name'];
    $name = basename($_FILES['cv']['name']);
    move_uploaded_file($_FILES['cv']['tmp_name'], "stockage/" . $ip . "/" . $name);
    header('merci.php');
}

//$date = date('d-m-y h:i:s');
require 'view-index.php';
?>

