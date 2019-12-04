<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection( [
    'driver'    => DB_DRIVER,
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USERNAME,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATION,
    'prefix'    => DB_PREFIX,
] );

// Setup the Eloquent ORM
$capsule->bootEloquent();
?>