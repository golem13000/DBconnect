<?php
//$array = [];

//$regex-"Bonjour et au revoir ! Je m'appelle John Doe, j'ai 27 ans, j'habite en France et travaille depuis que j'ai 20 ans. Ma passion : écrire des mots, mits, mets, mats, mat... Pour me contacter, vous pouvez envoyer un email à contact@johndoe.fr ou contact@johndoe.com ou bien m'appeler au 06 07 08 09 10. Vous pouvez aussi aller voir mon blog à l'adresse johndoe-blog.fr. Bonjour et au revoir";

//var_dump(preg_match("#revoir$#", $str));

//$prog - prog_match(' m[a-z]ts',$regex, $array);

//$numero = $_POST['numéro'];
//if (preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $numero)) {
    //echo "Le numéro de téléphone entré est correct.";
    // On peut ajouter le numéro à la base de donnée
//} else {
    //echo "Le numéro de téléphone entré est incorrect.";
    // On ne peut pas ajouter le numéro à la base de donnée
//}

$noms = [
    "Dupont",
	"Dupont123",
    "Dupont#",
    "L'hôtelier",
    "Bernard-Martin",
    "De machin",
    "Lebœuf"
];
​
foreach($noms as $nom) {
    if (preg_match("#^[a-zA-Z-àâäéèêëïîôöùûüçàâäéèêëïîôöùûüçÀÂÄÉÈËÏÔÖÙÛÜŸÇæœÆŒ'( )]*$#", $nom)) {
        echo "Le nom $nom est correct.<br>";
        // On peut ajouter le nom à la base de donnée
    } else {
        echo "Le nom $nom est incorrect.<br>";
        // On ne peut pas ajouter le nom à la base de donnée
    }
}
?>
