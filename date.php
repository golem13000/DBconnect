<?php
//$now = date("d/m/Y");
//var_dump($now);
//$today = date("Y-m-d H:i:s"); 
//var_dump($today);
//$aujd = new DateTime("now", new DateTimeZone("europe/Paris"));
//var_dump($aujd);


//$aujd=new DateTimeImmutable("now", new DateTimeZone("europe/Paris"));
//$annee_courante = $aujd->format("Y");
//$mois_courant = $aujd->format("m");
//$jour_courant = $aujd->format("d");
//echo "Nous sommes le $jour_courant/$mois_courant/$annee_courante";    

//$premier_lundi = $now->modify("first monday of");
//$premier_mois_suivant = $premier->modify("+ 1 month");
//$dernier = $premier->modify("+ 1 month - 1 day");
//$premier_annee_suivante = $now->modify("first day of january + 1 year");
//$premier_lundi_precedent = ((int) $premier_lundi->format("d")=== 01)? $premier_lundi :
//$premier_lundi->modify("last monday");  

Class Month {
    private $monthDate;

    public function getMonth() {
        return $this->monthDate;
    }

    public function setMonth($month) {
        $this->monthDate = $month;
    }

function monthDate($month) {
    $month = $this->format('m');
}

}

$month = new Month(5);
var_dump($month);







?>

