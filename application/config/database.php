<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Settings for database connection
 */

$_general = require(dirname(__FILE__) . '/general.php');

$host     = $_general['main_connection']['host'];
$dbname   = $_general['main_connection']['base'];
$username = $_general['main_connection']['user'];
$password = $_general['main_connection']['pass'];

return [

    'default' => [
        'type'       => 'PDO',
        'connection' => [
            'dsn'        => "mysql:host=$host;dbname=$dbname",
            'username'   => $username,
            'password'   => $password,
            'persistent' => FALSE,
        ],
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => FALSE,
    ]

];
