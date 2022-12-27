<?php

// front-end controller

class app {
    protected $controller = "homeController";
    protected $action = "index";
    protected $parameters = [];

    public function __construct() {
        $this->prepareURL();
        $this->rend();
    }

    // extract the controller, the action, and the parameters
    // return void
    private function prepareURL() {
        $url = $_SERVER['QUERY_STRING'];
        if (!empty($url)) {
            $url = trim($url, "/");
            $url = explode("/", $url);

            // define the controller
            $this->controller = isset($url[0]) ? $url[0]."Controller" : "homeController";

            // define the action
            $this->action = isset($url[1]) ? $url[1] : "index";

            unset($url[0], $url[1]);

            $this->parameters = !empty($url) ? array_values($url) : [];
        }
    }

    private function rend() {
        if(class_exists($this->controller)) {
            $controller = new $this->controller;

            if(method_exists($controller, $this->action)) {
                call_user_func_array([$controller, $this->action], $this->parameters);
            }else {
                echo "Method does not found.";
            }
        }else {
            echo "The controller \"".$this->controller."\" does not found.";
        }
    }
}