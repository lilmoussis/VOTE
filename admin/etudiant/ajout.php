<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Admin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<a class="btn btn-danger mt-3" style="margin-left:10px" href="../home.php" role="button">Retour</a>
    <a class="btn btn-dark mt-3" style="margin-left:83%" href="../../conf/logout.php">Déconnexion</a>
    
    <section class=" " style="margin-left:550px; margin-top:100px">
        <form action="" method="post">
            <div class="form-group w-25 mb-4">
                <label for="nom">Nom</label>
                  <input type="text" class="form-control" name="nom" id="nom"  placeholder="" required>
            </div>
            <div class="form-group w-25 mb-4">
                <label class="" for="Prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="" required>
            </div>
            <div class="form-group w-25 mb-4">
                <label for="Mail">Adresse mail</label>
                <input type="mail" class="form-control" name="mail" id="mail" placeholder="" required>
            </div>
            <div class="mb-4"></div>
            <button class="btn btn-success" name="submit" type="submit">Enrégistrer</button>
        </form>
    </section>
</body>
</html>

<?php 
include_once "../../conf/conf.php";

if (isset($_POST["submit"])) {
    if (isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['mail'])) {
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $mail=htmlspecialchars($_POST['mail']);
            $sql="INSERT INTO `user` (`nom`, `prenom`,`mail`, `role`) VALUES ( :nom, :prenom, :mail, 'user')";
            $prepare=$conn->prepare($sql);
            $prepare->execute(array(
                'nom'=>$nom,
                'prenom'=>$prenom,
                'mail'=>$mail,
            ));
            header("Location:liste.php");
    }
}