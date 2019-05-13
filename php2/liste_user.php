<!Doctype html>
<html>
<head>
<title>Administrateur/sonatel academy make up</title>
<link rek="stylesheet" href="boostrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
body{
    background-image:url(j.jpg);
    background-repeat:no-repeat;
    text-align:center;}
    .entete{
        background-color:pink;
    }
    </style>
<body>
<h1 style=font-family:fantasy >Liste des utilisateurs</h1>
<?php
echo "<table border=1 width=100%  class='table table-striped table-green'>";
echo "<thead class='entete'>
<th>nom</th>
<th>login</th>
<th>mot de passe</th>
<th>profil</th>
<th>addresse</th>
<th>telephone</th>
<th>statut</th>
</thead>";
$fichier=fopen("BDD.txt","r");
while(!feof($fichier))
{
    $ligne=fgets($fichier);
    $element=explode(",",$ligne);
    if($element[0]!=='seynabou'){
    echo "<tr>";
    echo "<td>$element[0]</td>";
    echo "<td>$element[1]</td>";
    echo "<td>$element[2]</td>";
    echo "<td>$element[3]</td>";
    echo "<td>$element[4]</td>";
    echo "<td>$element[5]</td>";
    echo "<td>
    <a href='traitement.php?login=$element[1]'> <button name='bouton' id='bouton'>$element[6]</button> </a>
    </td>";
 echo "</tr>";
}
}

fclose($fichier);

 echo "</table>";

?>
</table>

</body>
</html>