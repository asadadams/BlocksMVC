<?php
/*
|--------------------------------------------------------------------------
| Bootstrap file
|--------------------------------------------------------------------------
|
| This is the bootstrap file to add all required files to successfully
| bootstrap the app. These files are all required by Blocks Framework
|
*/

require_once( 'config/app.php' );
require_once( 'config/database.php' );

require_once( '../vendor/autoload.php' );

require_once( '../database/database.php' );

require_once( 'lib/App.php' );
require_once( 'lib/Controller.php' );
?>