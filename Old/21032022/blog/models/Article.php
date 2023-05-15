<?php
class Article extends Model{
    
    public function __construct()
    {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "Article";
    
        // Nous ouvrons la connexion à la base de données
        $this->getConnection();
    }

    public function newTable(){
          $stmt = $this->_connexion->prepare("CREATE TABLE IF NOT EXISTS `Article` (`Id` int(11) NOT NULL AUTO_INCREMENT, `ArticleTitle` VARCHAR(255) NOT NULL, `ArticleBody` VARCHAR(255), `CreatedDate` DATETIME, `RatingClass` VARCHAR(100) NOT NULL, `RatingAverage` VARCHAR(100), `VotesCount` VARCHAR(12), `ReadingTime` VARCHAR(12), PRIMARY KEY (`Id`));");
          if($stmt->execute()) {
             return true; 
          }
          return false;

    }

}
?>