<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accueil régime alimentaire et sportif</title>
<link rel="stylesheet" href="<?= base_url('assets/assets/js_view/Parsley.js-2.9.2/src/parsley.css') ?>">
<script src="<?= base_url('assets/assets/js_view/Parsley.js-2.9.2/src/parsley.js') ?>"></script>
<script src="<?= base_url('assets/assets/cdnjs/jquery.min.js') ?>"></script>


</head>
<body>

<h1>Accueil voalohany</h1>

<form id="insert_user_form" method="post" action = "<?php echo base_url('crud_controller/insert_user'); ?>">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br>

    <label for="mail">E-mail :</label>
    <input type="email" id="mail" name="mail" required><br>

    <label for="genre">Genre :</label>
    <select id="genre" name="genre" required>
        <option value="">Sélectionnez votre genre</option>
        <option value="masculin">Masculin</option>
        <option value="féminin">Féminin</option>
    </select><br>

    <label for="taille">Taille :</label>
    <input type="texte" id="taille" name="taille" data-parsley-type="number" data-parsley-required="true" data-parsley-min="0" required><br>

    <label for="poids">Votre poids :</label>
    <input type="texte" id="poids" name="poids" data-parsley-type="number" data-parsley-required="true" data-parsley-min="0" required><br>

    <label for="objectif">Objectif :</label>
    <select id="objectif" name="objectif" required>

        <option value="">Sélectionnez un objectif</option>
        <?php foreach ($objectif as $objectifs) { ?>
            <option value="<?php echo $objectifs->id_objectif; ?>"><?php echo $objectifs->nom_objectif; ?></option>
        <?php } ?>

    </select><br>

    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" required><br>

    <label for="mdp_confirmation">Confirmer le mot de passe :</label>
    <input type="password" id="mdp_confirmation" name="mdp_confirmation" required><br>

    <input type="submit" id="add" value="Enregistrer">
</form>

</body>
</html>
