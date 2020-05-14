<?php
//$now = date("d/m/Y");
//var_dump($now);
//$today = date("Y-m-d H:i:s"); 
//var_dump($today);
//$aujd = new DateTime("now", new DateTimeZone("europe/Paris"));
//var_dump($aujd);


$aujd=new DateTimeImmutable("now", new DateTimeZone("europe/Paris"));
$annee_courante = $aujd->format("Y");
$mois_courant = $aujd->format("m");
$jour_courant = $aujd->format("d");
echo "Nous sommes le $jour_courant/$mois_courant/$annee_courante";

