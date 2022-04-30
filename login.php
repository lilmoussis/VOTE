<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="" style="text-align: center; margin-top:250px">
        <div class="mb-3">
            <h2>BIENVENUE</h2>
        </div>
        <form action="" method="post" >
            <div class="mb-3" style="margin-left:450px" >
                <input type="mail" class="form-control w-50" name="mail" id="mail" placeholder="Entrer votre adresse mail" required>
            </div>
            <div class="mb-4">
                <input type="checkbox" name="remember_me" checked="checked" id="remember_me" class="form-check-input">
                <label for="remember_me" class="form-check-label">Se souvenir</label>
            </div>
            <button type="submit" name="connecter" class="btn btn-success">Se connecter</button>
        </form>
    </div>
</body>
</html>

<?php 
if
?>