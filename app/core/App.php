<?php

class App
{

    protected $controller = 'students';

    protected $action = 'register';

    protected $routes = array('students' => ['register', 'post', 'course']);


    public function __construct()
    {
        $url = App::parseUrl();

        if(isset($url[0]))
        {
            $this->controller = $url[0];
        } else {
            $this->controller = 'students';
        }

        if (isset($url[1]))
        {
            $this->action = $url[1];
        } else {
            $this->action = 'register';
        }

        if (array_key_exists($this->controller, $this->routes))
        {
            if (in_array($this->action, $this->routes[$this->controller]))
            {
                $this->get($this->controller, $this->action);
            }
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

                require_once '../app/models/Student.php';
                require_once '../app/models/Course.php';
                require_once '../app/models/Enrollment.php';
                require_once '../app/models/Instructor.php';
                require_once '../app/models/Education.php';
                require_once '../app/models/Experience.php';
                require_once '../app/models/FamilyInfo.php';
                require_once '../app/models/ItKnowledge.php';
                require_once '../app/models/LangKnowledge.php';

                $controller = new Students();
                break;
        }

        $controller->{ $action }();
    }
}