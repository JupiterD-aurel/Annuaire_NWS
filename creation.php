<?php
session_start();
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/conncte.css">
	<title>Annuaire_nws</title>
    <link rel="icon" href="images/nws_logo.png">
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouter ici!
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                             <div class="mb-3">
                                <label>Genre</label>
                                <select  name="sexe">
                                <option value="">--Quel est votre genre--</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                    <option value="nonbi">Non binaire</option>
                                </select>
                             </div>
                            <div class="mb-3">
                                <label>Nom</label>
                                <input type="text" name="nom" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Prenom</label>
                                <input type="text" name="prenom" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="text" name="age" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ville</label>
                                <input type="text" name="ville" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Code postal</label>
                                <input type="text" name="postal" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Niveau scolaire</label>
                                <select name="cycle">
                                    <option value="">--Quel est votre niveau--</option>
                                    <option value="Seconde">Seconde</option>
                                    <option value="Premiere">Premiere</option>
                                    <option value="Terminal">Terminal</option>
                                    <option value="Bac + 1">Bac + 1</option>
                                    <option value="Bac + 2">Bac + 2</option>
                                    <option value="Bac + 3">Bac + 3</option>
                                    <option value="Bts/But/Dut">Bts/But/Dut</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Telephone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Specialité choisi</label>
                                <select name="spe">
                                <option value="">--choix--</option>
                                    <option value="Developpement">Developpement</option>
                                    <option value="com-graphique">marketing</option>
                                    <option value="smm">Com_graphique</option>
                                    <option value="comm">Com_management</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Année souhaiter</label>
                                <select  name="niveau">
                                <option value="">--Année --</option>
                                    <option value="Année 1">Annee 1</option>
                                    <option value="Année 2">Annee 2</option>
                                    <option value="Année 3">Annee 3</option>
                                    <option value="Master">Master</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Envoyer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
