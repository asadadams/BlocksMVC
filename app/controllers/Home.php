<?php

class Home extends Controller {
    protected $user;

    public function __construct() {
        $this->user = $this->model( 'User' );
    }

    public function index() {
        $this->view( 'home' );
    }
}

?>
