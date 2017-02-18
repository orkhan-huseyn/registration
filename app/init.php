<?php

session_start();

require_once 'core/Router.php';

require_once 'core/App.php';

require_once 'core/Database.php';

require_once 'lib/FormHandler.php';

require_once 'lib/UUID.php';

define('URL', '/registration/public/');

spl_autoload_register(function($class)
{
    require_once '../app/models/'.$class.'.php';
});