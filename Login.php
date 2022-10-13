<?php 
if (isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "Ubinaire";
        $mdp_par_defaut = "Ubiboard";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: index.php');
}else{
        echo "Votre mot de passe ou nom utilisateur est incorrect";
}
}else{
        echo "Veuillez complèter tous les champs...";
}
}
 ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connect/css/link.css">
    <title>Formulaire</title>
</head>


<body>
    <div class="container">

        <nav>
            <a href="#" class="logo">Ubinateur</a>


         <div class="btn" id="displayForm"></div>


        </nav>
        <section>
            <div class="sec_container">
                <div class="form_wrapper">
                    <div class="card">
                        <div class="card_header">
                            <div id="forLogin" class="form_header active">Se connecter</div>
                            <div id="forRegister" class="form_header">S'inscrire</div>
                        </div>
                        <div class="card_body" id="formContainer">
                            <form method="post" action="" id="loginForm">
                                <input type="text" name="pseudo" class="form_control" placeholder="@utilissateur" />
                                <input type="password" name="mdp" class="form_control" placeholder="@Mot de passe" />
                                <button type="submit" name="valider" class="formButton">Connexion</button>
                            </form>
                            <form action="inscription.php" method="post" action="" id="registerForm" class="toggleForm">
                                <input type="text" name="pseudo" class="form_control" placeholder="@utilissateur" />
                                <input type="password" name="mdp" class="form_control" placeholder="@Mot de passe" />
                                <input type="password" name="mdp" class="form_control" placeholder="@Confimer mot de passe" />
                                <button type="submit" name="valider" class="formButton">Inscription</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </section>

    </div>

    <script src="connect/js/Script.js"></script>

</body>


</html>