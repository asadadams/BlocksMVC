<?php

/*
|--------------------------------------------------------------------------
| Main Controller
|--------------------------------------------------------------------------
|
| This is the main controller for the Blocks MVC.
| All Controllers must inherit from this Main Controller Class.
|
*/

class Controller {

    /**
     * To load a model and return an instance of that model if it exists
     *
     * @param  String $model name of model
     *
     * @return void
     */
    public function model( $model ) {
        //Checking if model exists and requiring it
        if ( file_exists( '../app/models'.$model.'.php' ) ) {
            require_once( '../app/models'.$model.'.php' );

            //Returning an instance of the model;
            return new $model;
        }
    }

    /**
     * To load a view
     *
     * @param  String $view view's name
     * @param  Array $data  data passed to view
     *
     * @return void
     */
    public function view( $view, $data = [] ) {
        //Checking if view exists and requiring it
        if ( file_exists( '../app/views/'.$view.'.php' ) ) {
            require_once( '../app/views/'.$view.'.php' );
        }
    }
}

?>