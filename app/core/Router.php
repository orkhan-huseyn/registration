<?php

class Router
{

    public static $routes = [];


    public function __construct()
    {
        //define routes to privilege

        $user_privilege = 555;

        if (isset($_SESSION['registered']) && $_SESSION['registered']==true) {

            $user_privilege = $_SESSION['registered'];
        }

        if ($user_privilege == true) {

            //root user

            self::$routes = [
                'students' => ['register', 'post', 'course', 'registered', 'error']
            ];

        } else {

            self::$routes = [
                'students' => ['register', 'post', 'course', 'error']
            ];
        }
    }

    static function get($controller, $action, $params = [])
    {
        require_once '../app/controllers/' . $controller . '.php';

        switch ($controller) {

            case 'authentication':

                $controller = new Authentication();

                break;

            case 'pages':

                $controller = new Pages();
                break;

            case 'students':

                $controller = new Students();
                break;

            case 'instructors':

                $controller = new Instructors();

                break;

            case 'courses':

                $controller = new Courses();

                break;

            case 'users':

                $controller = new Users();

                break;

        }

        call_user_func_array([$controller, $action], $params);
    }

}