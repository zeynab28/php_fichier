<!DOCTYPE html>
<html>
<head>
<title>authentification</title>
<meta charget="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
<style>
  body{
    background-image:url(j.jpg);
    background-repeat:no-repeat;
    text-align:center;
    background-image:100%;
  }
  
 
</style>
</head>
<body>
  
<center><h1 style=font-family:fantasy>page d'authentification</h1></center>
<p>bienvenue sur notre plateforme de vente de produits de maquillages!!</p> 
<div id="form1"  style=margin-left:300px>
<form action="authen.php" method="POST">

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" id="email" ><strong>Login:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"  name="login" placeholder="" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label" id="pass"><strong>Mot de passe:</strong></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="mdp" placeholder="" style=width:50%>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn" name="valider">connexion</button>
    </div>
  </div>
</form>
</div>
<?php
$reussi=false;
$mdp=$_POST['mdp'];
$login=$_POST['login'];
$fichier=fopen("BDD.txt","r");
if(isset($_POST["valider"])){
  while(!feof($fichier)){
    $ligne=trim(fgets($fichier));
    $user=explode(",",$ligne);
    if($login==$user[1] && $mdp==$user[2] && $user[3]=="admin"){
      header('location:acceuil2.php');
    }
  if($login==$user[1] && $mdp==$user[2] && $user[3]=="user_simple"){
    header('location:acceuil1.php');
  }
}
  fclose($fichier);
}

/*if($_POST["mdp"]=="" && $_POST["login"]==""){
  header('location:authen.php');
   
}else{
  header('location:acceuil1.php');
}*/
  
   
      
?>
</body>
</html>