<!DOCTYPE html>
<html>
<head>
<title>Ajout produits</title>
<meta charget="UTF-8">
<link rel="stylesheet" href="auth.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
        .rouge{
            background-color:red;
        }
        .entete{background-color:pink;}
            body{background-image:url(j.jpg);
  background-repeat:no-repeat;
  text-align:center;}
        
    </style>
<body>
<center><h1  style=font-family:fantasy>Ajouter un produit</h1></center>
<form action="ajout.php" method="POST" style=margin-left:300px>
<div class="form-group row">
    <label for="inputnom3" class="col-sm-2 col-form-label"><strong>Nom produit:</strong></label> 
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nom3" name="nom" placeholder="entrer le nom" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Quantité du produit:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="quanti" placeholder="entrer la quantité" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Prix produit:</strong></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="prix" placeholder="entrer le prix" style=width:50%>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
    </div>
  </div>
</form>
<?php
echo"<table border='2' width='100%'class='table table-striped table-pink'>";
echo" <thead class='entete'>
<th>nom</th>
<th>quantité</th>
<th>prix</th>
<th>montant</th>
</thead>";
$fichier=fopen("dfgh.txt","a+");
     if(!empty($_POST['nom']) && !empty($_POST['quanti']) && !empty($_POST['prix'])){
     if(isset($_POST['ajout'])){
      $chaine="\n".$_POST['nom'].",".$_POST['quanti'].",".$_POST['prix'].",";
      fwrite($fichier,$chaine);
       fclose($fichier);

      $fichier=fopen("dfgh.txt","a+");
     while(!feof($fichier))
     {
         $ligne=fgets($fichier);
         $element=explode(",",$ligne);

         if($element[1]<10){
          echo "<tr class='rouge'>";
         echo "<td>$element[0]</td>";
         echo "<td>$element[1]</td>";
         echo  "<td>$element[2]</td>";
         echo "<td>".$element[1]*$element[2]."</td>";
      echo "</tr>";}
      else{
        echo "<tr>";
         echo "<td>$element[0]</td>";
         echo "<td>$element[1]</td>";
         echo  "<td>$element[2]</td>";
         echo "<td>".$element[1]*$element[2]."</td>";
      echo "</tr>";
      }
          }
          fclose($fichier);
         }
        } 

   
          
          echo "</table>";
   
    
?>
</table>
</body>
</html>