<?php

namespace Framework\Bootstrap;

class App
{
    protected $controller = "Home";
    protected $action = "index";
    protected $params = [];

    protected $class;

    public function __construct()
    {
        $url = $this->getUrl();
        if ($url !== false) {
            $this->controller = class_exists($this->addNamespace($url[0])) ? ucfirst(array_shift($url)) : $this->error(404);

            $class = $this->addNamespace($this->controller);
            $this->class = new $class;

            $this->action = method_exists($this->class, $url[0]) ? strtolower(array_shift($url)) : $this->action;
            $this->params = $url;

            echo call_user_func_array([$this->class, $this->action], $this->params);
        } else {
            $class = $this->addNamespace($this->controller);
            $this->class = new $class;

            echo call_user_func_array([$this->class, $this->action], []);
        }
    }

    private function getUrl()
    {
        return isset($_GET['url']) ? explode("/", rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL) : false;
    }

    private function addNamespace(string $class)
    {
        return "Framework\\Controllers\\" . $class;
    }

    private function error(int $code) {
        http_response_code(404);
        die();
    }
}
