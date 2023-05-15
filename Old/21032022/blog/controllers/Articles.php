<?php 
    
    
class Articles extends Controller{
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){
        //echo "Ici, c'est la liste principale";
        header('Location: index.php?controller=account&action=login');
    }

    public function lire($id){
        //echo $id;
        $data = array();
        // On envoie les données à la vue lire
        $this->render('lire', compact('data'));
       
    }

    public function list(){
        //echo $id;
        $data = array();
        // On envoie les données à la vue lire
        $this->render('list', compact('data'));
       
    }
}

?>