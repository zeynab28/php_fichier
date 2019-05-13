<?php
$login=$_GET['login'];
$vide="";
$fichier=fopen("BDD.txt","r");

while(!feof($fichier))
{
$ligne=fgets($fichier);
$element=explode(",",$ligne);
if($login==$element[1] && $element[0]!='seynabou')
{
    if($element[6]=='actif')
    {
    
        $element[6]='inactif';

    }
    else{
        $element[6]='actif';
    }
}
$rempli=$element[0].','.$element[1].','.$element[2].','.$element[3].','.$element[4].','.$element[5].','.$element[6].','."\n";
$vide=$vide.$rempli;
}
fclose($fichier);
$fichier=fopen('BDD1.txt','w');
fputs($fichier,trim($vide));
fclose($fichier);
unlink("BDD.txt");//supprime fichier BDD
rename("BDD1.txt","BDD.txt");//renommer BDD en BDD1
header('location:liste_user.php');
?>