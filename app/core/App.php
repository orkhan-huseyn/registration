<?php

class App
{

    protected $controller = 'students';

    protected $action = 'register';


    public function __construct()
    {
        $url = App::parseUrl();

        if(isset($url[0]))
        {
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            $this->controller = 'students';
        }

        if (isset($url[1]))
        {
            $this->action = $url[1];
            unset($url[1]);
        } else {
            $this->action = 'register';
        }

        if (array_key_exists($this->controller, Router::$routes))
        {
            if (in_array($this->action, Router::$routes[$this->controller]))
            {
                $this->get($this->controller, $this->action);
            } else {
                $this->get('students', 'error');
            }
        } else {
            $this->get('students', 'error');
        }
    }


    static function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }


    public function get($controller, $action)
    {
        require_once '../app/controllers/'.$controller.'.php';

        switch ($controller)
        {
            case 'students':

                $controller = new Students();
                break;
        }

        $controller->{ $action }();
    }
}