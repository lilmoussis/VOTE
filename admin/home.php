<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <a class="btn btn-dark mt-3" style="margin-left:83%" href="../conf/logout.php">Déconnexion</a>
    <div class="" style="margin-top: 100px; text-align: center ; padding:10px">
        <h3>Que voulez-vous faire?</h3>
    </div>
    <div class="d-flex m-2" style="">
        <div class="etudiant" style="margin-left:350px">
            <h4 style="text-align: center;">ETUDIANT</h4>
            <a name="" id="" class="btn btn-secondary" href="etudiant/ajout.php" role="button">Ajouter un Etudiant</a>
            <a name="" id="" class="btn btn-primary" href="etudiant/liste.php" role="button">Liste des Etudiant</a>
        </div>
        <div class="vote" style="margin-left: 50px;">
            <h4 style="text-align:center;">TYPE DE VOTE</h4>
            <a name="" id="" class="btn btn-success" href="vote/home.php" role="button">Ajout candidat</a>
            <a name="" id="" class="btn btn-danger" href="resultat/home.php" role="button">Resultats</a>
        </div>
    </div>
</body>
</html>