<?php
class User extends Model{
    /**
     * Méthode permettant d'obtenir un enregistrement de la table choisie en fonction d'un identifiant et le mot de passe 
     *
     * @return void
     */
     public function login($username,$password){
        $sql = "SELECT * FROM ".$this->table." WHERE UserName='".$username. "' AND Password='" . $password . "'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();    
     }


    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "User";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    public function newTable(){
          $stmt = $this->_connexion->prepare("CREATE TABLE IF NOT EXISTS `User` (`Id` int(11) NOT NULL AUTO_INCREMENT, `UserName` VARCHAR(100) NOT NULL, `Password` VARCHAR(255) NOT NULL, `IdService` VARCHAR(100) NOT NULL, `Active` TINYINT, `CreatedDate` DATE, PRIMARY KEY (`Id`));");
          if($stmt->execute()) {
             return true; 
          }
          return false;

    }

}
?>