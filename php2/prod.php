<!DOCTYPE html>
<html>
    <head>
        <title>sonatel academy make up</title>
        <meta charset="UTF-8">
        <link rek="stylesheet" href="boostrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <style>
        .rouge{
            background-color:red;
        }
       .entete{
           background-color:pink;
       } 
   body{background-image:url(j.jpg);
  background-repeat:no-repeat;
  text-align:center;}
    </style>
    <body>
<h1 style=font-family:fantasy>La liste des produits</h1>

     <?php
     
     echo"<table border='2' width='100%' class='table table-striped table-green'>";
     echo" <thead class='entete'>
     <th>nom</th>
     <th>quantité</th>
     <th>prix</th>
     <th>montant</th>
     </thead>";

     $fichier=fopen("dfgh.txt","r");
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
    echo "</tr>";
    }
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
    echo "</table>";
?>

   
    </body>
</html