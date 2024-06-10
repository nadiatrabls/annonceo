<?php
require('inc/header.php');
require_once('inc/bdd.php');

if ($_GET['id']){
    //requete sql
    $sql="SELECT * FROM categorie WHERE id_categorie=".$_GET['id'];
   //prepare l'execution de la requete
   $reqCategorie=$bdd->prepare($sql);
   //executer la requete
   $reqCategorie->execute();
   //stocker et attraper les categories dans ma variable readCategorie
   $readCategorie=$reqCategorie->fetchAll(PDO::FETCH_ASSOC);
   require_once('inc/bdd_closed.php');




}
?>
<main>
  
<div class="card mx-auto" style="width: 18rem;">
  
    <h5 class="card-title"><?=$readCategorie['titre']?></h5>
    <p class="card-text"><?=$readCategorie['motscles']?></p>
   
    
  
</div>

</main>

