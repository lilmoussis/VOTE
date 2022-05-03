<?php include '../conf/conf.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Vote - Président</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<a class="btn btn-danger mt-3" style="margin-left:10px" href="../home.php" role="button">Retour</a>
    <a class="btn btn-dark mt-3" style="margin-left:83%" href="../conf/logout.php">Déconnexion</a>
    <div class="" style="margin-top: 100px; text-align: center ; padding:10px">
        <h3>Sélectionner votre candidat</h3>
        <div class="mt-4">
        <form action="" method="post">
            <div class="mb-4" style="width: 300px; margin-left: 530px;">
              <select class="form-select" name="candidat" id="">
                <?php include_once '../conf/conf.php';
                $prepare=$conn->prepare("SELECT nom_vote from vote where role_vote= 'president' ");
                $prepare->execute();
                $result=$prepare->fetchAll();
                foreach ($result as $donnee) : ?>
                 <option class=""><?php echo $donnee['nom_vote'];?></option>
                 <?php endforeach; ?>
              </select>
              <br>
              <button class="btn btn-success" name="submit" type="submit">Voter</button>
            </div>
        </form>   
        </div>
    </div>
</body>
</html>