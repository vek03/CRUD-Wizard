<?php
return [
    'database' => [
        'driver' => 'mysql', // 'pgsql', 'mysql', 'sqlite', 'sqlsrv' , 
        'mysql' => [
            'host' => 'localhost',
            'db_name' => 'wizard_bd',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ],
        'sqlite' => [
            'path' => 'C:/Users/DELL/Downloads/OneDrive/Documentos/GitHub/perfomphp/App/Database/database.sqlite',
        ],
        'sqlsrv' => [
            'host' => 'localhost',
            'db_name' => 'crud_bd',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ],
        'pgsql' => [
            'host' => 'localhost',
            'db_name' => 'crud_bd',
            'username' => 'root',
            'password' => '',
            'port' => '5432', 
            'charset' => 'utf8'
        ],
        'mongodb' => [
            'host' => 'localhost',
            'db_name' => 'crud_bd',
            'username' => 'root',
            'password' => '',
            'port' => '27017', 
        ]
    ]
];