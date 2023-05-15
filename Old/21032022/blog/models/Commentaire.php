<?php
class Commentaire extends Model{
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
        $this->table = "Commentaire";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    public function newTable(){
          $stmt = $this->_connexion->prepare("CREATE TABLE IF NOT EXISTS `Commentaire` (`Id` int(11) NOT NULL AUTO_INCREMENT, `IdArticle` VARCHAR(12), `UserName` VARCHAR(100) NOT NULL, `CreatedDate` DATETIME, `RatingStar` VARCHAR(12), `Commentaire` VARCHAR(255), PRIMARY KEY (`Id`));");
          if($stmt->execute()) {
             return true; 
          }
          return false;

    }

}
?>