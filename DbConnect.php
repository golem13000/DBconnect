<?php
​
abstract class DbConnect implements Crud {
​
    protected $pdo;
    protected $id;
​
    function __construct($id = null) {
        $this->pdo = new PDO(DATABASE, LOGIN, PASSWD);
        $this->id = $id;
    }

    //Récupération d' une propriétée d'une classe
​
    function getId (): ?int {
        return $this->id;
    }

    //Methode de l'interface Crud

    abstract function insert();

    abstract function update();

    abstract function delete();

    abstract function selectAll();
    
    abstract function select();
}

?>
function showMembre() {
    ​
        // Visualiser temporairement les données d'un utilisateur
        $user = new Utilisateur();
        $user->selectAll();
    ​
        return "membre.php";
}    