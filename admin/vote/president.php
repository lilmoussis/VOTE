<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Président</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<a class="btn btn-danger mt-3" style="margin-left:10px" href="home.php" role="button">Retour</a>
    <a class="btn btn-dark mt-3" style="margin-left:83%" href="../../conf/logout.php">Déconnexion</a>
    
    <section class=" " style="margin-left:550px; margin-top:100px">
        <form action="" method="post">
            <div class="form-group w-25 mb-4">
                <label for="nom" style="margin-left: 10px;">Nom du président</label>
                  <input type="text" class="form-control mt-4"  name="nom" id="nom"  placeholder="" required>
            </div>
            <button class="btn btn-success" style="margin-left: 40px;" name="submit" type="submit">Enrégistrer</button>
        </form>
    </section>
</body>
</html>

<?php 
include_once "../../conf/conf.php";

if (isset($_POST["submit"])) {
    if (isset($_POST['nom'])) {
        $nom=htmlspecialchars($_POST['nom']);
            $sql="INSERT INTO `vote` (`nom_vote, role_vote) VALUES ( :nom, 'president')";
            $prepare=$conn->prepare($sql);
            $prepare->execute(['nom'=>$nom]);
            header("Location:home.php");
    }
}