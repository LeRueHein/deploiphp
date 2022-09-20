<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Inscrivez vous sur Twitter</h1>

    <?php
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo '<p>', $error, '</p>';
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="prenom" class="lbl">Prénom :</label>
            <input id="prenom" name="prenom" type="text" <?php restoreTexte('prenom') ?> />
        </div>
        <div>
            <label for="nom" class="lbl">Nom :</label>
            <input id="nom" name="nom" type="text" <?php restoreTexte('nom') ?> />
        </div>
        <div>
            <label for="pwd1" class="lbl">Mot de passe :</label>
            <input id="pwd1" name='pwd1' type="Password" />
        </div>
        <div>
            <label for="pwd2" class="lbl">Confirmation :</label>
            <input id="pwd2" name='pwd2' type="Password" />
        </div>
        <div>
            <span class="lbl">Civilité :</span>
            <input id="civ_h" type="radio" name="civ" value="1" <?php restoreCheck('civ', 1) ?> />
            <label for="civ_h">Homme</label>
            <input id="civ_f" type="radio" name="civ" value="2" <?php restoreCheck('civ', 2) ?> />
            <label for="civ_f">Femme</label>
        </div>
        <div>
            <label for="contrat" class="lbl">Type de contrat</label>
            <select id="contrat" name="contrat">
                <option value="" <?php restoreListeDeroulante('contrat', "") ?>>Sélectionner</option>
                <option value="1" <?php restoreListeDeroulante('contrat', 1) ?>>CDD</option>
                <option value="2" <?php restoreListeDeroulante('contrat', 2) ?>>CDI</option>
                <option value="3" <?php restoreListeDeroulante('contrat', 3) ?>>Alternance</option>
                <option value="4" <?php restoreListeDeroulante('contrat', 4) ?>>Stage</option>
            </select>
        </div>
        <div>
            <span class="lbl">Compétences :</span>
            <input id="cpt_dev" type="checkbox" name="dev" value="1" <?php restoreCheck('dev', 1) ?> />
            <label for="cpt_dev" value="developpement">Développement</label>

            <input id="cpt_man" type="checkbox" name="man" value="2" <?php restoreCheck('man', 2) ?> />
            <label for="cpt_man" value="management">Management</label>

            <input id="cpt_pj" type="checkbox" name="pj" value="3" <?php restoreCheck('pj', 3) ?> />
            <label for="cpt_pj" value="gestion">Gestion de projet</label>

            <input id="cpt_sec" type="checkbox" name="sec" value="4" <?php restoreCheck('sec', 4) ?> />
            <label for="cpt_sec" value="securite">Sécurité</label>

            <input id="cpt_sys" type="checkbox" name="sys" value="5" <?php restoreCheck('sys', 5) ?> />
            <label for="cpt_sys" value="systeme">Système</label>
        </div>
        <div>
            <label for="cv" class="lbl">CV :</label>
            <input id="cv" type="file" name="cv">
        </div>
        <div>
            <label for="mot" class="lbl">Motivation :</label>
            <textarea id="mot" name="motivation" <?php restoreTexteArea('motivation') ?>></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer ma candidature">
        </div>
    </form>
</body>

</html>