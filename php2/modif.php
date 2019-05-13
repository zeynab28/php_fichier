<!doctype html>
<html >
<head>
  <meta charset="utf-8">
  <title>sonatel academy make up</title>
  <link rek="stylesheet" href="boostrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
  #rouge{
    background-color:red;
  }
  body{
    background-image:url(j.jpg);
  background-repeat:no-repeat;
  text-align:center;
  
    }
    .entete{
      background-color:pink;
    }
  </style>
  
</head>
<body>
  <center><h1 style=font-family:fantasy>vous voulez modifier un produit:</h1></center>
  <form class="form-inline" action=modif.php method="POST">
    <div class="form-group mx-sm-3 mb-2" id="name">
    <label for="inputPassword2" class="sr-only"><strong>Nom:</strong></label>
    <input type="text" class="form-control" id="nom" name="produ" placeholder="entrer le nom du produit">
  </div> <br> <br>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only"><strong>Prix:</strong> </label>
    <input type="text" class="form-control" id="inputPassword2" name="prix" placeholder="prix du produit">
  </div> <br> <br>
  
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only"><strong>Quantité:</strong></label>
    <input type="number" class="form-control" id="inputPassword2" name="qte" placeholder="quantité">
  </div> <br> 
  <button type="submit" class="btn btn-primary mb-2" name="modif" >Modifier</button>
</form>

  <?php

    echo "<table border=1 width=100% class='table table-striped table-pink'>";
    echo "<thead class='entete'>
    <tr>
    <th>nom</th> 
    <th>quantité</th>
    <th>prix</th>
    <th>montant</th>
    </tr>
    </thead>";
   
    if(isset ($_POST['modif']))
    {
      if(!empty($_POST['produ']) && !empty($_POST['prix']) && !empty($_POST['qte']))
      {
        $produit=$_POST['produ'];
        $prix=$_POST['prix'];
        $qte=$_POST['qte'];
        $fichier=fopen("dfgh.txt","r");
        while(!feof($fichier))
        {
          $ligne=fgets($fichier);
          $element=explode(",",$ligne);
          if($produit==$element [0])
          {
$produit=$element[0];
$element[1]=$qte;
$element[2]=$prix;
$inline1=$element[0].",".$element[1].",".$element[2].",".$element[3];
            
          }
          else{
            $inline1=$ligne;
          }
          $inline2=$inline2.$inline1;
        }
        fclose($fichier);
        $fichier=fopen("dfgh.txt","w+");
        fwrite($fichier,$inline2);
        fclose($fichier);
      }
    }
    $fichier=fopen("dfgh.txt","a+");
        while(!feof($fichier))
        {
          $ligne=fgets($fichier);
          $element=explode(",",$ligne);
          if($element[1]<10){
            echo "<tr id='rouge'>";
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
   // if(isset($_POST['ajout'])){
      /*$modifi=$_POST['produ'];
      $qte=$_POST['qte'];
      $pu=$_POST['prix'];
      $montant=$qte*$pu;*/
      

      /*while(!feof($fichier))
      {
          $ligne=fgets($fichier);
          $element=explode(",",$ligne);
          
          if($_POST['produ']==$element[0])
            {
              $element[0]=$_POST['produ'];
              $element[1]=$_POST['qte'];
              $element[2]=$_POST['prix'];
              $element[3]=$_POST['qte']*$_POST['prix'];  
        }
          if($element[1]<10){
            echo "<tr id='rouge'>";
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
           //}
   
   

                               // if(isset ($_POST['modif'])){
                                  /*  $modifi=$_POST['produ'];
                                    $qte=$_POST['qte'];
                                    $pu=$_POST['prix'];
                                    $montant=$qte*$pu;

                                    for($i=0; $i<count($prod); $i++)
                                    {
                                        if($modifi==$prod[$i]['nom'])
                                        {
                                           $prod[$i]['nom']=$_POST['produ'];
                                           $prod[$i]['quantité']=$_POST['qte'];
                                           $prod[$i]['prix']=$_POST['prix'];
                                           $prod[$i]['montant']=$montant;
                                        }
                                    }
                               // }



foreach($prod as $cle1=>$valeur1)
{
    foreach($valeur1 as $cle2=>$valeur2)
    
        {
          if($cle2=='quantité' && $valeur2<10){
            echo "<td id='rouge'> <strong> $valeur2 <strong></strong></td>";}
            else{
              echo "<td> <strong> $valeur2 <strong></strong></td>";}
            }
            echo "</tr>";
        }
   


/*for($i=0; $i<count($prod); $i++)
{
    if($prod[$i]['quantité']>10)
    {
        echo "<tr class='rouge'>
        <td>$prod[$i]['nom']</td>
        <td>$prod[$i]['quantité']</td>
        <td>$prod[$i]['prix']</td>
        </tr>";
    }
}*/

echo "</table>" ;
    ?>
</body>
</html>