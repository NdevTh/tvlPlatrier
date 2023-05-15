<?php 
class Dispatcher
{
    public $instance = "Admin";
    
    public static function setInstance($instance) {
        $this->instance =$instance;
    }

    public static function getInstance() {
        return $this->instance;
    }

    public function dispatch() {
        echo "Dispatch";
   }
}
?>