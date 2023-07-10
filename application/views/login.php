<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="<?php echo base_url('crud_controller/lien_inscription'); ?>">Inscription</a></h1>
    <!-- Formulaire de connexion -->
<form id="user_login_form" method="POST" action="<?php echo base_url('crud_controller/user_login'); ?>">
    <label for="mail">E-mail :</label>
    <input type="email" id="mail" name="mail" required><br>

    <label for="mdp">Mot de passe :</label>
    <input type="password" id="mdp" name="mdp" required><br>

    <input type="submit" value="Se connecter">
</form>

</body>
</html>