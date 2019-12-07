<?php

/*
|--------------------------------------------------------------------------
| URL Helper class
|--------------------------------------------------------------------------
|
| This class contains all helpers related to URLs
|
*/

class Url {

    /**
    * redirecting to a page
    *
    * @param  mixed $page
    *
    * @return void
    */
    public static function redirect( $page ) {
        header( 'location: ' . URLROOT . '/' . $page );
    }

    /**
    * Getting an HTTPS url
    *
    * @param  String $link
    *
    * @return String
    */
    public static function secure_url( $link ) {
        return 'https://'. URLROOT .'/'.$link;
    }

    /**
    * Getting an HTTP url
    *
    * @param  String $link
    *
    * @return String
    */
    public static function get_url( $link ) {
        return 'http://'. URLROOT .'/'.$link;
    }
}
?>