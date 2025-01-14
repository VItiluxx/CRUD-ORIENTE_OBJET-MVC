<?php
    /*** CONFIGURATION */
    ini_set('display_errors','on');
    error_reporting(E_ALL);

    $host = $_SERVER['HTTP_HOST'];
    $root = $_SERVER['DOCUMENT_ROOT'];

    define ('HOST', 'http://'.$host.'/cbs/projet/');
    define ('ROOT', $root.'/cbs/projet/');

    define('MODEL_HOST', HOST.'model/');
    define('MODEL_ROOT', ROOT.'model/');

    define('VIEW_HOST', HOST.'view/');
    define('VIEW_ROOT', ROOT.'view/');

    define('CONTROLLER_HOST', HOST.'controller/');
    define('CONTROLLER_ROOT', ROOT.'controller/');

    define('ASSET_HOST', HOST.'asset/');
    define('ASSET_ROOT', ROOT.'asset/');

?>
