<?php
require('inc/header.php');
require('inc/fonctions.php');
?>
<main>
   <!-- message ok create-->
<?php if (!empty($_SESSION['msgFormCreateOk'])):?>
    <div class="alert alert-success" role="alert">
        <?= $_SESSION['msgFormCreateOk']?>
        <?php $_SESSION['msgFormCreateOk']=''?>
    </div>
    <?php endif ?>

  <!--message formulaire incomplet-->
  <?php if (!empty($_SESSION['msgFormCreateNoOk'])):?>
    <div class="alert alert-danger" role="alert">
        <?= $_SESSION['msgFormCreateNoOk']?>
        <?php $_SESSION['msgFormCreateNoOk']=''?>
    </div>
    <?php endif ?>
    </div>
    
    <!--formulaire d'ajout de categorie-->
<form action="create_categorie.php" method="POST" class="container">
  <h1>Ajouter une catégorie</h1>
<!--titre de la catégorie-->
<div class="mb-3">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" name="titre" class="form-control" id="titreCategorie" aria-describedby="titreCategorie">
    
  <!--mots clés -->
  <div class="mb-3">
    <label for="motscle" class="form-label">Mots clés</label>
    <input type="text" name="motscles" class="form-control" id="motsCle">
  </div>
  
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</main>