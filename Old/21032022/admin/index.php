<?php
    session_start();
    /* Debug only */
    @ini_set('display_errors', 'on');

   /* Improve PHP configuration to prevent issues */
    @ini_set('upload_max_filesize', '100M');
    @ini_set('default_charset', 'utf-8');

    /* Correct Apache charset */
    header('Content-Type: text/html; charset=utf-8');
    //locale_set_default('fr-FR');
    //setlocale(LC_ALL,"FR");
    //http://192.168.1.12:8080/V1/index.php?controller=products&action=menu&shop=1
    //http://0.0.0.0:8080/V1/index.php?controller=products&action=menu&shop=1
    //http://cliknfind.fr/V1/index.php?controller=products&action=menu&shop=1
    // On génère une constante contenant le chemin vers la racine publique du projet
    define('ROOT', str_replace('index.php','', $_SERVER['SCRIPT_FILENAME'] ));
    define('RawMaterial_Image_Dir','views/desktop/rawmaterials/images/');
    define('RawMaterial_Document_Dir','views/desktop/rawmaterials/documents/');
    define('RSAKey','password');

    // On appelle le modèle et le contrôleur principaux
    require_once(ROOT.'app/Model.php');
    require_once(ROOT.'app/Controller.php');
    require_once(ROOT.'app/RithyThidaBundle.php');

    $queryPart = $_SERVER['QUERY_STRING'];
    parse_str($queryPart, $params);
    if ( count($params) > 0 ) {
       if ( array_key_exists('controller', $params) ) {
          // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
          $controller = ucfirst($params['controller']);
          // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
          $action = isset($params['action']) ? $params['action'] : 'index';
          // On appelle le contrôleur
          require_once(ROOT.'controllers/'.$controller.'.php');
          // On instancie le contrôleur
          $controller = new $controller();
          if(method_exists($controller, $action)){
              // On supprime les 2 premiers paramètres
              unset($params['controller']);
              unset($params['action']);

              // On appelle la méthode $action du contrôleur $controller
              call_user_func_array([$controller,$action], $params);
          }else{
              // On envoie le code réponse 404
              http_response_code(404);
              echo "La page recherchée n'existe pas";
         }
       }
    }else {
       // Ici aucun paramètre n'est défini
       // On appelle le contrôleur par défaut
       require_once(ROOT.'controllers/Main.php');

       // On instancie le contrôleur
       $controller = new Main();

       // On appelle la méthode index
       $controller->index();
    }
?>