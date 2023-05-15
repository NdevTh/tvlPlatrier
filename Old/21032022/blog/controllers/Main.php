<?php 
    
    
class Main extends Controller{
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){
        //echo "Ici, c'est la liste principale";
        header('Location: index.php?controller=account&action=login');
    }
}

?>