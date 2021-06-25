<?php
return array(
    'default' => array(
        'driver'    => $_ENV["DB_TYPE"],
        'host'      => $_ENV["DB_HOST"],
        'port'      => 3306,
        'username'  => $_ENV["DB_USER"],
        'password'  => $_ENV["DB_PASSWORD"],
        'database'  => $_ENV["DB_NAME"],
        'charset'   => 'utf8mb4',
        'collation' => 'utf8mb4_general_ci',
    ),
);