<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <a class="btn btn-danger mt-3" style="margin-left:10px" href="home.php" role="button">Retour</a>
    <a class="btn btn-dark mt-3" style="margin-left:83%" href="../conf/logout.php">Déconnexion</a>
    <section class="" style="">
        <div class="mt-4">
            <h3 style="text-align: center;">Liste des administrateurs</h3>
        </div>
        <table class="table my-4 table-dark table-borderless" style="text-align: center;">
            <thead>
                <tr>
                <th class="fw-bold fs-5">#</th>
                <th class="fw-bold">Nom</th>
                <th class="fw-bold">Prénom</th>
                <th class="fw-bold">Mail</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once '../conf/conf.php';
                    $prepare=$conn->prepare('SELECT nom, prenom, mail, role from user where role="admin"');
                    $prepare->execute();
                    $result = $prepare ->fetchAll();
                    $i=0;
                    foreach ($result as $donnee):
                        $i++;
                ?>
                    <tr class="text_dark">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $donnee['nom'];?></td>
                        <td><?php echo $donnee['prenom'];?></td>
                        <td><?php echo $donnee['mail'];?></td>
                    </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
    </section>
</body>
</html>