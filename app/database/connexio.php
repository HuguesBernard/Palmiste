<?php
define('DB_SERVEUR', 'localhost');
define('DB_NOM', 'PALMISTE');
define('DB_DSN', 'mysql:host=' .DB_SERVEUR . ';dbname=' .DB_NOM . ';charset=utf-8');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '1234');
global $oPDO;
$options =
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
$oPDO = new PDO(dsn:DB_DSN, username:DB_LOGIN, password:DB_PASSWORD, $options);

?>