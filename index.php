<?php
include("./config/database.php");

$connexion = connecterBD();

// Etape 2 : Préparer la requête SQL
$sql = "SELECT * FROM   contacts";

// Etape 3 : Exécuter la requête
$resultat = mysqli_query($connexion, $sql);

//var_dump($resultat);

// Etape 4 : initialiser le tableau de contacts
$contacts = mysqli_fetch_all($resultat, 1);

// Etape 5 : 

$sql1 = "SELECT * FROM   adresses";
$resultat = mysqli_query($connexion, $sql1);
$adresses = mysqli_fetch_all($resultat, 1);
//var_dump($resultat);

$sql2 = "SELECT * FROM   telephones";
$resultat = mysqli_query($connexion, $sql2);
$telephones = mysqli_fetch_all($resultat, 1);

?>


<?php require('./Partials/header.php') ?>

<div>
  <a class="btn btn-primary" href="./Pages/create.php"> Créer un contact</a>
</div>
    <div class="container mt-5">
<table class="table table-secondary table table-striped" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Date de Création</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach ($contacts as $personne) : ?>
    <tr>
      <th scope="row"><?= $personne['id'] ?></th>
      <td><?= $personne['nom'] ?></td>
      <td><?= $personne['prenom'] ?></td>
      <td><?= $personne['email'] ?></td>
      <td><?= $personne['date_creation'] ?></td>
    </tr>

    <?php endforeach ?>
    
  </tbody>
</table>

<table class="table table-secondary table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Contact_id</th>
      <th scope="col">Rue</th>
      <th scope="col">Ville</th>
      <th scope="col">Code_postal</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach ($adresses as $adresse) : ?>
    <tr>
      <th scope="row"><?= $adresse['id'] ?></th>
      <td><?= $adresse['contact_id'] ?></td>
      <td><?= $adresse['rue'] ?></td>
      <td><?= $adresse['ville'] ?></td>
      <td><?= $adresse['code_postal'] ?></td>
      <td><?= $adresse['type'] ?></td>
    </tr>

    <?php endforeach ?>
    
  </tbody>
</table>


<table class="table table-secondary table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Contact_id</th>
      <th scope="col">Numero</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach ($telephones as $telephone) : ?>
    <tr>
      <th scope="row"><?= $telephone['id'] ?></th>
      <td><?= $telephone['contact_id'] ?></td>
      <td><?= $telephone['numero'] ?></td>
      <td><?= $telephone['type'] ?></td>
    </tr>

    <?php endforeach ?>
    
  </tbody>
</table>
</div>


<?php require('./Partials/footer.php') ?>
