<?php

/*
|--------------------------------------------------------------------------
| Core Blocks App
|--------------------------------------------------------------------------
|
| Blocks Framework
| https://github.com/asadadams/BlocksMVC
| Softvision Co
|
| This file is the core of Blocks MVC
|
*/

class App {

    private $controller = 'Home';
    private $method = 'index';
    private $params = [];

    /**
    * App's constructor, parse url 
     *
     * @return void
     */
    public function __construct() {
        $url = $this->parseUrl();

        if ( file_exists( '../app/controllers/'.ucwords( $url[0] ).'.php' ) ) {
            $this->controller = ucwords( $url[0] );
            unset( $url[0] );
        }

        require_once( '../app/controllers/'.$this->controller.'.php' );
        $this->controller = new $this->controller;

        if ( isset( $url[1] ) ) {
            if ( method_exists( $this->controller, $url[1] ) ) {
                $this->method = $url[1];
                unset( $url[1] );
            }
        }

        $this->params = $url ? array_values( $url ) : [] ;
        call_user_func_array( [$this->controller, $this->method], $this->params );
    }

    /**
     * Parse's URL
    *
    * @return void
    */

    private function parseUrl() {
        if ( isset( $_GET['url'] ) ) {
            return explode( '/', rtrim( $_GET['url'], '/' ) );
        }
    }
}

?>