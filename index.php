<?php
    session_start();
    require 'connect.php';
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/accueil.css">
	<title>Annuaire_nws / Visuel</title>
    <link rel="icon" href="images/nws_logo.png">
</head>
<body>
  
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">

            <?php if(isset($_SESSION['message'])) : ?>
                        <h5 class="alert alter-success"><?= $_SESSION['message'];?></h5>
            <?php 
                 unset( $_SESSION['message']); 
                 endif;
            ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Details des contacts
                            <a href="creation.php" class="btn btn-primary float-end">Ajouter un nouveau contact</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Genre</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>age</th>
                                    <th>ville</th>
                                    <th>code postal</th>
                                    <th>Email</th>
                                    <th>numero de telephone</th>
                                    <th>Niveau scolaire</th>
                                    <th>Specialité choisi</th>
                                    <th>Année souhaiter</th>
                                    <th>Modif</th>
                                    <th>Supprimer</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM annuaire";
                                    $statement = $db->prepare($query);
                                    $statement->execute();

                                    $result = $statement->fetchAll(PDO::FETCH_OBJ);
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                        <tr>
                                            <td><?=$row->an_id; ?></td>
                                            <td><?=$row->an_sexe; ?></td>
                                            <td><?=$row->an_nom; ?></td>
                                            <td><?=$row->an_prenom; ?></td>
                                            <td><?=$row->an_age; ?></td>
                                            <td><?=$row->an_ville; ?></td>
                                            <td><?=$row->an_postal; ?></td>
                                            <td><?=$row->an_email; ?></td>
                                            <td><?=$row->an_phone; ?></td>
                                            <td><?=$row->an_niveau; ?></td>
                                            <td><?=$row->an_spe; ?></td>
                                            <td><?=$row->an_cycle; ?></td>
                                            <td><a href="edit.php?id<?=$row->an_id; ?>" class="btn btn-primary">Modif</a></td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <button type="submit" name="supprimer" value="<?=$row->an_id; ?>" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </td>

                                        </tr>
                                            <?php

                                        }
                                    }

                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="12">Aucun registre</td>
                                        </tr>
                                        <?php

                                    }

                                ?>
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>