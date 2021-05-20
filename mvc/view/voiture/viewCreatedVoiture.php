
<p>L'utilisateur a bien été créé</p>
<?php
$i = $u->getImmatriculation(); 
echo "<p> La voiture <a href='index.php?controller=voiture&action=read&immatriculation=$i'> $i </a> </p>" ;
?>