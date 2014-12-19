<?php

defined('APPLICATION_PATH') || 
    define('APPLICATION_PATH', realpath(__DIR__ . '/../../application'));

defined('LIBRARY') ||
    define('LIBRARY', realpath(__DIR__ . '/../../library'));

defined('APPLICATION_ENV') ||
    define('APPLICATION_ENV', 
        (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));
        
set_include_path(
        implode(PATH_SEPARATOR, 
                array(
                    LIBRARY,
                    get_include_path()
                )));
        
require_once 'Zend/Application.php';
$application = new Zend_Application(APPLICATION_ENV, 
        APPLICATION_PATH . '/configs/application.ini');