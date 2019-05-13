<!DOCTYPE html>
<html>
    <head>
        <title>sonatel academy make up</title>
        <meta charget="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">
        <style>
         body{background-image:url(j.jpg);
  background-repeat:no-repeat;
  text-align:center;}
        .rouge{
            background-color:red;
        }
        .entete{
          background-color:pink;
        }
        
    </style>
    </head>
    <body>
      <center><h1 style=font-family:fantasy>Rechercher un produit</h1></center>  
    <form class="form-inline" action=recherche.php method="POST">
    <div class="form-group mx-sm-3 mb-2" id="name">
    <label for="inputPassword2" class="sr-only"><strong>Nom:</strong></label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="entrer le nom du produit">
  </div> 
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Prix minimal:</label>
    <input type="text" class="form-control" id="inputPassword2" name="prix_min" placeholder="prix minimal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Prix maximal:</label>
    <input type="text" class="form-control" id="inputPassword2" name="prix_max" placeholder="prix maximal">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Quantité</label>
    <input type="number" class="form-control" id="inputPassword2" name="quantite" placeholder="quantité">
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="recherche" >Recherche</button>
</form>
<?php
echo "<table border=2 class='table table-striped table-pink'>";
echo "<thead class='entete'>
<th><strong>Nom du produit</strong></th>
<th><strong>Quantité du produit</strong></th>
<th><strong>Prix du produit</strong></th>
<th><strong>Montant du produit</strong></th>
</thead>";
$fichier=fopen("dfgh.txt","r");
while(!feof($fichier))
    {
        $ligne=fgets($fichier);
    $element=explode(",",$ligne);
    if(!empty($_POST["nom"])){
      if($_POST['nom']==$element[0])
      {
        echo "<tr>
        <td>$element[0]</td>
        <td>$element[1]</td>
        <td>$element[2]</td>";
        echo"<td>".$element[1]*$element[2]."</td>
        </tr>";
      }
  }
  
  if(!empty($_POST['quantite'])){
    if($_POST['quantite']==$element[1])
    {
      echo "<tr>";
     echo "<td>$element[0]</td>";
     echo "<td>$element[1]</td>";
     echo "<td>$element[2]</td>";
      echo "<td>".$element[1]*$element[2]."</td>";
   echo   "</tr>";
    }
}


if(!empty($_POST['prix_min'])){
  if($_POST['prix_min']<=$element[2])
  {
    echo "<tr>
    <td>$element[0]</td>
    <td>$element[1]</td>
    <td>$element[2]</td>";
  echo  "<td>".$element[1]*$element[2]."</td>
    </tr>";
  }
}


if(!empty($_POST["prix_max"])){
  if($_POST['prix_max']>=$element[2])
  {
    echo "<tr>
    <td>$element[0]</td>
    <td>$element[1]</td>
    <td>$element[2]</td>";
 echo   "<td>".$element[1]*$element[2]."</td>
    </tr>";
  }
}
    }

/*for($i=0; $i<count($list); $i++){
  echo "<tr>";
      $list[$i][3]=$list[$i][1]*$list[$i][2];
      for($j=0; $j<count($list[$i]); $j++){
          
          if($list[$i][1]<10){
              echo "<td class='rouge'>".$list[$i][$j]."</td>";
          }
          else{
              echo "<td>".$list[$i][$j]."</td>";
          }
          
      }echo "</tr>";
      

}*/



/*if(!empty($_POST["nom"])){
  $val1=$_POST["nom"];
  for($i=0;$i<count($list);$i++){
    echo "<tr>";
    for($j=0;$j<count($list[$i]);$j++){
      $list[$i][3]=$list[$i][1]*$list[$i][2];
      if($val1==$list[$i][0]){
        echo "<td>".$list[$i][$j]."</td>";
       
      }
    }
    echo "</tr>";
  }
}

if(!empty($_POST["prix_min"])){
  $val2=$_POST["prix_min"];
  for($i=0;$i<count($list);$i++){
      echo "<tr>";

      for($j=0;$j<count($list[$i]);$j++){
        $list[$i][3]=$list[$i][1]*$list[$i][2];
          if($val2<=$list[$i][2]){
              echo "<td>".$list[$i][$j]."</td>";
          }
      }
      echo "</tr>";

  }
}*/
echo "</table>";
?>
</table>
    </body>
</html>