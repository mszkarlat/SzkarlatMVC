<?php 
    /* 
     * Base Controller 
     * Loads the models and views
    */
    
    class Controller {

        // Load model 
        public function model($model){
            // Require model file
           require_once(ROOT .'/models/'.$model.'.php');
            
            // Instantiate model. ex. if $model = Posts it would be return new Posts();
            return new $model();
        }

        // Load view
        public function view($view, $data = []){
            // Check for view file
            if (file_exists('../app/views/'.$view.'.php')) {
                require_once('../app/views/'.$view.'.php');
            } else {
                // should handle this nicer
                die('View does not exist');
            }
        }
    }