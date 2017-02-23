<?php

session_start();

require_once 'lib/Mobile_Detect.php';

require_once 'core/Router.php';

require_once 'core/App.php';

require_once 'core/Database.php';

require_once 'lib/FormHandler.php';

require_once 'lib/UUID.php';

const BASE_DIR = "/registration/public/";

const APP = "/cpanel/";

spl_autoload_register(function($class)
{
    require_once '../app/models/'.$class.'.php';
});

$_SESSION['mobile_info'] = "<strong>Qeydiyyat yalnız dizüstü və ya masaüstü kompyuterlər vasitəsi ilə edilə bilər.</strong>"
    ."<br/>Əgər qeydiyyat üçün mobil qurğudan istifadə edirsinizsə qurğunu dəyişməyiniz xahiş olunur. Təşəkkürlər!";