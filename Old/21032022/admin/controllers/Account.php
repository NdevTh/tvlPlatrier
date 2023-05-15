<?php 
 // http://0.0.0.0:8080/IMS-V1/index.php?controller=transaction  
    
class Account extends Controller{
    /**
     * Cette méthode affiche le formulaire de l'utilisateur 
     *
     * @return void
     */
    public function register(){
        //echo "Ici, c'est l'action login";
        $data = array();

        // On instancie le modèle "Produits"
        $this->loadModel('User');
        
        $user = array();
        $user["Id"] = isset($_POST["Id"])?$_POST["Id"]:0;
        $user["UserName"] = isset($_POST["UserName"])?$_POST["UserName"]:"admin";
        $user["Password"] = isset($_POST["password"])?md5($_POST["password"]):md5("password");
        $user["IdService"] = isset($_POST["IdService"])?$_POST["IdService"]:0;
        $user["Active"] = isset($_POST["Active"])?$_POST["Active"]:0;
        $user["CreatedDate"] = date("Y-m-d");
        /* check if editing */
        if ( isset($_POST["Id"]) && !empty($_POST["Id"]) ) {
             $this->User->id = $_POST["Id"]; 
             $this->User->data = $user;
             $inserted_id = $this->User->update();
             $data["Id"] =  $inserted_id;
        }else {
             $this->User->data = $user;
             $inserted_id = $this->User->insert();
             $data["Id"] =  $inserted_id;
        }
        $data = $user;
        //$data["Password"] = decrypt($user["Password"] , RSAKey);
        // On envoie les données à la vue lire
        $this->render('ajouter', compact('data'));
       
    }

    /**
     * Cette méthode affiche le formulaire de l'utilisateur 
     *
     * @return void
     */
    public function DataEntry(){
        //echo "Ici, c'est l'action login";
        $data = array();
        // On envoie les données à la vue lire
        $this->render('ajouter', compact('data'));
       
    }

    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){
        //echo "Ici, c'est l'action login";
        $data = array();
        //echo "Ici, c'est l'action login";
        // On instancie le modèle "Produits"
        $this->loadModel('User');    
        // On crée le tableau dans la basse de données
        $table = $this->User->newTable();

        $_SESSION["Services"] = array();

        $data = $this->User->getAll();
        // On envoie les données à la vue lire
        $this->render('list', compact('data'));
       
    }
    
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function login (){
        //echo "Ici, c'est l'action login";
        $data = array();
        // On instancie le modèle "Produits"
        $this->loadModel('User');    
        // On crée le tableau dans la basse de données
        $table = $this->User->newTable();

        // On envoie les données à la vue lire
        $this->render('login', compact('data'), 'login_layout');
       
    }

    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function submit_login (){
        // On instancie le modèle "Produits"
        $this->loadModel('User');    
        // On crée le tableau dans la basse de données
        $table = $this->User->newTable();
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $user = $this->User->login($username,$password);
        //echo "User: " . $username. " Password: " . $password . "<br>";
        //print_r($user);
        if ( $user != null ) {
           //Dispatcher::getInstance()->dispatch();
           $url = 'index.php?controller=vehicles';
           if ( isset( $_SESSION["currentURL"]) && !empty($_SESSION["currentURL"])) {
              if (isset( $_SESSION["folder"]) && !empty($_SESSION["folder"])) {
                 $folder = "../";
              }
              $url = $folder . $_SESSION["currentURL"];
           }
           $_SESSION["username"] = $user["UserName"];
           //Tools::redirect($url);
           header("Location:" . $url);
        }else {

           $data['message-class'] = "alert-danger";
           $data['message'] = "Veuillez vérifier votre identifiant ou votre mot de passe car le compte n'a pas matché..";
                  
           // On envoie les données à la vue lire
           $this->render('login', compact('data'), 'login_layout');
       
        }
    }

    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function logout (){
        
           $url = 'index.php?controller=vehicles';
           if ( isset( $_SESSION["currentURL"]) && !empty($_SESSION["currentURL"])) {
              if (isset( $_SESSION["folder"]) && !empty($_SESSION["folder"])) {
                 $folder = "../";
              }
              $url = $folder . $_SESSION["currentURL"];
           }
           
           /* destroy all the session variables */
           session_destroy();
           //Tools::redirect($url);
           header("Location:" . $url);
           //header('Location: index.php?controller=account&action=login');

    }
}

?>