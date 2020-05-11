<?php


class Utilisateurs extends DbConnect {

//variable pour implémenté un utilisateur

    private $idUtilisateur;
    private $adresse;
    private $pseudo;
    private $password;

// constructeur

    function __construct($id=null) {
        parent::__construct($id);
    }

    public function getIdUtilisateur() {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(int $id) {
        $this->idUtilisateur = $id;
    }

    public function getAdresse($adresse) {
        return $this->adresse;
    }
    
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    
    public function getPseudo($pseudo) {
        return $this->pseudo;
    }
    
    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function getPassword($password) {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    //permet la sauvegarde des données utilisateurs

    public function save_user() {
        $file = file_get_contents("index.json");
        $tab = json_decode($file, false, 512, 0);
        $unique = true;
        foreach($tab as $element){
            if ($element->pseudo==$this->pseudo){
                $unique=false;
            }
        }
        if ($unique){
            array_push($tab,["id"=>sizeof($tab)+1,"pseudo"=> $this->pseudo, "password" => $this->password,"adresse" => $this->adresse ]);
            file_put_contents('index.json', json_encode($tab));
        }        
    }

 // permet la verification des données utilisateurs   

    public function verify_user(){
        $file = file_get_contents("index.json");
        $tab1 = json_decode($file, false, 512, 0);
        foreach($tab1 as $element1){
            if ($element1->pseudo==$_POST['pseudo']&&password_verify($_POST['password'],$element1->password)){
                $_SESSION['id'] = $element1->id;
                $_SESSION['pseudo']= $_POST['pseudo'];
                $_SESSION['password']=$element1->password;
                header('Location:monespace.php');
            }else {
                header('Location:index.php');
            }
        }
    }

   public function insert() {

    $query = "insert into user ('adresse', 'pseudo','password')
              values( :adresse, :speudo, :password)";
    $result = $this->pdo->prepare($query);
    $result->bindValue(' :adresse' , $this->adresse, pdo::PARAM_STR);
    $result->bindValue(' :pseudo' , $this->pseudo, pdo::PARAM_STR);
    $result->bindValue(' :password', $this->password, pdo::PARAM_STR);
    $result->execute();
    
    $this->id = $this->pdo->lastInsertId();
    return $this;

}

//Permet de selectionné toutes les lignes de notre table

    public function selectAll(){
        $query ="SELECT * FROM utilisateur;";
        $result = $this->pdo->prepare($query);
        $result->execute();
        $datas= $result->fetchAll();

        $tab=[];

        //var_dump($datas);

        foreach($datas as $data) {
            $current = new Utilisateurs();
            $current->setId($data['IDUTILISATEUR']);
            array_push($tab, $current);
            }
            return $tab;

    }

//Permet de selectionné une ligne de notre table

    public function select(){


    }

//Permet de selectionné toutes les lignes de notre table    

    public fonction selectAll(){

    } 

//permet de modifié  les lignes ou tables  
    
    public function update(){

    }

// permet de suprimer les lignes ou tables

   public function delete(){
        
    }
}
?>