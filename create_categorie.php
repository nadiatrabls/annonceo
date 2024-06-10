<?php
session_start();
require('inc/fonctions.php');

//var_dump($_POST);
//exit;
if($_POST){

    $titre=strip_tags($_POST['titre']);
    $motsCles=strip_tags($_POST['motsCles']);


    if(
        !empty($_POST['titre'])&& isset($_POST['titre'])&&
        !empty($_POST['motsCles'])&& isset($_POST['motsCles'])
    ){
        //activation de la bdd
        require_once('inc/bdd.php');
        //requete sql
        $sql="INSERT INTO categorie (titre,motscles) VALUES (:titre,:motsCles)";
        //prepare la requete
        $query=$bdd->prepare($sql);
        //bind les valeurs qui vont etre inserées dans la bdd
        $query->bindValue(':titre',$titre,PDO::PARAM_STR);
        $query->bindValue(':motsCles',$motsCles,PDO::PARAM_STR);
        //executer la requete
        $result=$query->execute();
        //fermeture de la base de données
        require_once('inc/bdd_closed.php');
       //message produit enregistré 
$_SESSION['msgFormCreateOk']='la catégorie'.$titre.' a bien été ajouté !';
        
    
    }else{
        // message erreur
        $_SESSION['msgFormCreateNoOk']='Veuillez renseigner tous les champs du formulaire !';
        $_SESSION['titre']=$titre;
        $_SESSION['motsCles']=$motsCles; 
    }
}
header('location:insert_categorie.php');