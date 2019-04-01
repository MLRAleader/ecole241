<?php

$profil='Je suis devéloppeur web';//Une variable de type chaîne de caractère.
$monAge=25;//Une variable de type entier;
$maTaille=1.90;//Une variable de type float;

//Une variable tableau.

echo "<h1>Voici la liste des apprennants</h1>";
 $tab=array("Fatansia","Lolo","LaRoma","Pitchu","Talita","Kombonangay","LeFeu","Kitika","Kamika","Zapata");
foreach ($tab as $value) {
    echo $value .'&nbsp;&nbsp;';
} 

echo"<h2>Voici mon profil</h2><br>";

echo"Rick Axel MOUWENDZI LEGANDZA ,"."&nbsp;".$profil". Et j'ai".$monAge." et je mesures ".$maTaille;

?>
