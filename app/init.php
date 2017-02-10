<?php

session_start();

require_once 'core/App.php';

require_once 'core/Database.php';

require_once 'lib/FormHandler.php';

require_once 'lib/UUID.php';

define('URL', 'http://localhost/registration/public/');

define('ROUTES', [
    'students' => ['register', 'post', 'course', 'registered', 'error']
]);

spl_autoload_register(function($class)
{
    require_once '../app/models/'.$class.'.php';
});