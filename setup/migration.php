<?php
require_once( 'app/Config/database.php' );
return [
    'paths' => [
        'migrations' => 'database/migrations'
    ],
    'environments' => [
        'default_migration_table' => 'migration',
        'default_database' => 'dev',
        'dev' => [
            'adapter' => DB_DRIVER,
            'host' => DB_HOST,
            'name' => DB_NAME,
            'user' => DB_USERNAME,
            'pass' => DB_PASSWORD,
            'port' => DB_PORT
        ]
    ]
];
?>