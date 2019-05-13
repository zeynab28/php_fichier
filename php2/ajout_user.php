<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="auth.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>page administrateur</title>
</head>
<style>
body{
    background-image:url(j.jpg);
    background-repeat:no-repeat;
    text-align:center;}
    </style>
<body>
<h1 style=font-family:fantasy >Ajouter des utilisateurs</h1>
<form action="ajout_user.php" method="POST" style=margin-left:300px>
<div class="form-group row">
    <label for="inputnom3" class="col-sm-2 col-form-label"><strong>Nom:</strong></label> 
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom3" name="nom" placeholder="entrer le nom" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>login:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="login" placeholder="entrer le login" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Mot de passe</strong></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="mdp" placeholder="entrer le mot de passe" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Profil:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="profil" placeholder="entrer le profil" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Adresse:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="add" placeholder="entrer l'addresse" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Téléphone</strong></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" name="tel" placeholder="entrer le téléphone" style=width:50%>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Statut:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="statut" placeholder="son statut" style=width:50%>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
    </div>
  </div>
</form>
<?php

$fichier=fopen("BDD.txt","a+");
     //if(!empty($_POST['nom']) && !empty($_POST['login']) && !empty($_POST['mdp']) && !empty($_POST['profil']) && !empty($_POST['add'] && !empty($_POST['tel']) && !empty($_POST['statut'])){
     if(isset($_POST['ajout'])){
      $chaine="\n".$_POST['nom'].",".$_POST['login'].",".$_POST['mdp'].",".$_POST['profil'].",".$_POST['add'].",".$_POST['tel'].",".$_POST['statut'];
      fwrite($fichier,$chaine);
       fclose($fichier);
     }r
?>
</body>
</html>