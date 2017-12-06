<?php
include("template/header.php");

?>




<div class="img1">
   <div class="text">
       <span class="border">
     Library
       </span>
   </div>
</div>

<section class="section Firstsection" id="ouvrage">
  <h2>Ouvrages</h2>

  <div class="formu col-12 col-md-8 col-lg-6 sort">
   <form action="index.php" method="post">
      <div class="form-group">
  <select class="custom-select" name="category">
    <option selected>Trier par genre</option>
    <option value="roman">roman</option>
    <option value="fantastique">fantastique</option>
    <option value="bd">bd</option>
    <option value="humour satirique">Humour Satirique</option>
  </select>
 </div>
 <a href="index.php" class="btn btn-secondary mb-4">Tout les Ouvrages</a>
 <input type="submit" class="btn btn-secondary mb-4" name="search" value="Rechercher">
</form>
 </div>

<div class="container">
 <div class="row">
   <?php foreach ($ShowBook as $info) {
       ?>

<div class="col-lg-4 col-md-4 col-sm-12 mb-4">
  <div class="card  " >
  <div class="card-block">
    <h3 class="card-title"><?php echo $info->getTitle(); ?></h3>
    <p class="card-text">Auteur : <?php echo $info->getAuthor(); ?></p>
    <p class="card-text">Genre : <?php echo $info->getCategory(); ?></p>
    <p class="card-text">Disponible : <?php echo $info->getAvailable(); ?></p>
    <a href="#description" class="btn btn-primary">Détail de l'oeuvre</a>
  </div>
 </div>
</div>

<?php
  }
 ?>
 </div>
</div>
</section>

<div class="img2">
   <div class="text">
       <span class="border trans">

       </span>
   </div>
</div>

<section class="section Secondsection" id="ajout">
  <h2>Ajouter un Ouvrage</h2>

<form class="" action="../controllers/index.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
  <label for="exampleInputEmail1">Titre de l'ouvrage</label>
  <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Titre">
  <small id="emailHelp" class="form-text text-muted">Veuillez indiquer le titre de l'ouvrage</small>
</div>



<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Auteur</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="author" placeholder="Auteur de l'oeuvre">
    <small id="emailHelp" class="form-text text-muted">Veuillez indiqer l'auteur de l'ouvrage.</small>
  </div>

  <form class="" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Genre</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="category" placeholder="Genre de l'oeuvre">
      <small id="emailHelp" class="form-text text-muted">Veuillez indiquer le genre de l'oeuvre.</small>
    </div>

    <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Résumé</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="summary" placeholder="Résumé de l'oeuvre">
        <small id="emailHelp" class="form-text text-muted">Entrer un court résumé de l'oeuvre.</small>
      </div>


    <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Souhaitez-vous l'emprunter</label><br>
        <input class="with-gap" name="available" type="radio" value="NON" id="test1" />
           <label for="test1">OUI</label>
           <input class="with-gap" name="available" type="radio" value="OUI" id="test1" />
              <label for="test1">NON</label>
      </div>


    <button type="submit" name="send" class="btn btn-primary">Envoyer</button>
  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
</section>

<div class="img3">
   <div class="text">
       <span class="border trans">

       </span>
   </div>
</div>

<section class="section Thirdsection" id="description">
  <h2>Description</h2>

  <div class="container">
   <div class="row">
     <?php foreach ($ShowBook as $info) {
         ?>

  <div class="col-lg-4 mb-4">
    <div class="card ">
    <div class="card-block">
      <h3 class="card-title"><?php echo $info->getSummary(); ?></h3>
    </div>
   </div>
  </div>

  <?php
    }
   ?>
   </div>
  </div>
</section>

<div class="img4">
   <div class="text">
       <span class="border trans">

       </span>
   </div>
</div>

<section class="section Fourthsection" id="rendre">
  <h2>Emprunter/Rendre</h2>
  <div class="form-group ">
  <label for="exampleInputEmail1">Titre de l'ouvrage</label>
  <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Titre">
  <small id="emailHelp" class="form-text text-muted">Veuillez indiquer le titre de l'ouvrage</small>
</div>



<form class="" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Genre</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="firstName" placeholder="Genre de l'oeuvre">
    <small id="emailHelp" class="form-text text-muted">Veuillez indiqer le genre de l'ouvrage.</small>
  </div>

  <form class="" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1">Résumé</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="amount" placeholder="Résumé de l'oeuvre">
      <small id="emailHelp" class="form-text text-muted">Veuillez insérer un court résumé.</small>
    </div>



    <button type="submit" name="send" class="btn btn-primary">Emprunter</button>
    <button type="submit" name="send" class="btn btn-primary">Rendre</button>
  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
</section>

<div class="img5">
   <div class="text">
       <span class="border trans">

       </span>
   </div>
</div>

<section class="section Fifthsection" id="utilisateur">
  <h2>Utilisateurs</h2>
  <div class="container">
   <div class="row">
     <?php foreach ($ShowUser as $info) {
         ?>
    <div  class="col-lg-4 mb-4">
    <div class="card">
    <div class="card-block">
      <p class="card-text">Nom : <?php echo $info->getName(); ?></p>
      <p class="card-text">Prénom : <?php echo $info->getFirstName(); ?></p>
      <p class="card-text">Ville: <?php echo $info->getCity(); ?></p>
      <p class="card-text">Identifiant : <?php echo $info->getIdnumber(); ?></p>
    </div>
   </div>
  </div>

  <?php
    }
   ?>
   </div>
  </div>
</section>

<div class="img6">
   <div class="text">
       <span class="border trans">

       </span>
   </div>
</div>

<!-- <section class="section Sixthsection" id="tri">
  <h2>Tri</h2> -->
  <!-- start div class sort -->
 <!-- <div class="formu col-12 col-md-8 col-lg-6 sort">
  <form action="../controllers/index.php" method="post">
     <div class="form-group">
 <select class="custom-select" name="category">
   <option selected>Open this select menu</option>
   <option value="roman">roman</option>
   <option value="fantastique">fantastique</option>
   <option value="bd">bd</option>
   <option value="action">action</option>
 </select>
</div>
<input type="submit" name="search" value="search">
</form>
</div>

<div class="container">
 <div class="row">
   <?php foreach ($ShowBook as $info) {
       ?>

<div class="col-lg-4">
  <div class="card " style="width: 20rem;">
  <div class="card-block">
    <h3 class="card-title"><?php echo $info->getTitle(); ?></h3>
    <p class="card-text">Auteur : <?php echo $info->getAuthor(); ?></p>
    <p class="card-text">Genre : <?php echo $info->getCategory(); ?></p>
    <p class="card-text">Disponible : <?php echo $info->getAvailable(); ?></p>
    <a href="#description" class="btn btn-primary">Détail de l'oeuvre</a>
  </div>
 </div>
</div>

<?php
  }
 ?>
 </div>
</div> -->
<!-- end div class sort
</section>
