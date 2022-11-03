<?php
    session_start();
    require 'connect.php';


//partie supprimer
if(isset($_POST['supprimer']))
{
    $ann_id = $_POST['supprimer'];

    try {
        
        $query= "DELETE FROM annuaire WHERE an_id=:modif_id";
        $statement = $db->prepare($query);
        $data = [':modif_id' => $ann_id ];
        $query_execute = $statement->execute($data);

    if($query_execute)
    {
        $_SESSION['message'] = "Contact supprimer";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Contact non supprimer";
        header("Location: index.php");
        exit(0);
    }


    } catch(PDOException $e){
            echo $e->getMessage();
}

}

//partie Modification

if(isset($_POST['modif_contact']))
    {
       	$ann_id = $_POST['ann_id'];
       	$nom = $_POST['nom'];
	    $prenom = $_POST['prenom'];
	    $sexe = $_POST['sexe'];
	    $age = $_POST['age'];
	    $ville = $_POST['ville'];
	    $postal = $_POST['postal'];
	    $email = $_POST['email'];
	    $phone = $_POST['phone'];
	    $niveau = $_POST['niveau'];
	    $cycle = $_POST['cycle'];
	    $spe = $_POST['spe']; 
    }

    try{

        $query = "UPDATE `annuaire` SET `an_id`='mod_id',`an_nom`=':nom',`an_prenom`=':prenom',`an_sexe`=' :sexe',`an_age`=':age',`an_ville`=':ville',`an_postal`=':postal',`an_email`=':email',`an_phone`=':phone',`an_niveau`=':niveau',`an_cycle`=':cycle',`an_spe`=':spe' WHERE ann_id=:modif_id LIMIT 1";
        $statement = $db->prepare($query);

    $data = [

    ':nom' => $nom,
    ':prenom' => $prenom,
    ':sexe' => $sexe,
    ':age' => $age,
    ':ville' => $ville,
    ':postal' => $postal,
    ':email' => $email,
    ':phone' => $phone,
    ':niveau' => $niveau,
    ':cycle' => $cycle,
    ':spe' => $spe,
    ':modif_id' => $ann_id,
];
$query_execute = $statement->execute($data);

    if($query_execute)
    {
        $_SESSION['message'] = "Contact modifier";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Contact non modifier";
        header("Location: index.php");
        exit(0);
    }


    }catch(PDOException $e){
        echo $e->getMessage();
}


//Partie ajout

if(isset($_POST['save_student']))
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$sexe = $_POST['sexe'];
	$age = $_POST['age'];
	$ville = $_POST['ville'];
	$postal = $_POST['postal'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$niveau = $_POST['niveau'];
	$cycle = $_POST['cycle'];
	$spe = $_POST['spe'];

$query = "INSERT INTO `annuaire` (`an_nom`, `an_prenom`, `an_sexe`, `an_age`, `an_ville`, `an_postal`, `an_email`, `an_phone`, `an_niveau`, `an_cycle`, `an_spe`) 
    VALUES ( :nom, :prenom, :sexe, :age, :ville, :postal, :email, :phone, :niveau, :cycle, :spe)";

$query_run = $db->prepare($query);

    $data = [

    ':nom' => $nom,
    ':prenom' => $prenom,
    ':sexe' => $sexe,
    ':age' => $age,
    ':ville' => $ville,
    ':postal' => $postal,
    ':email' => $email,
    ':phone' => $phone,
    ':niveau' => $niveau,
    ':cycle' => $cycle,
    ':spe' => $spe,
];
    $query_execute = $query_run->execute($data);


    if($query_execute)
    {
        $_SESSION['message'] = "Contact ajouter";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Contact non creer";
        header("Location: index.php");
        exit(0);
    }
}

?>