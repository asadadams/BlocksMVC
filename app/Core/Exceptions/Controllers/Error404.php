<?php

class Error404 extends Controller {
    public function __construct() {

    }

    public function index() {
        $this->view( '404', ['error'=>'Page Not Found'], '../app/Core/Exceptions/Views/' );
    }
}

?>