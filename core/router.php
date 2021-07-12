<?php

    class main {
        private $url;
        private $routes;

        private function getUrl() {
           return $this->url = $_GET['systemurl'] ?? '';
        }

        private function getRoute() {
            return $this->routes = require_once('configs/routerConfig.php');
        }

        public function run() {
            $routeArray = $this->getRoute(); 
            $urlPath = $this->getUrl();
            if(isset($routeArray)) {
                $matches = [];
                foreach($routeArray as $route){
                    if(preg_match($route['reg'], $urlPath, $matches)){
                        $id = $matches[1] ?? '';
                        $controllerName = $route['controller'] . 'Controller';
                        $actionName = $route['action'] . 'Action';
                        $controllerPath = 'controllers/' . $controllerName . '.php';
                        if(file_exists($controllerPath)){
                            require_once($controllerPath);
                        }
                        $controllerObject = new $controllerName;
                        $controllerObject->$actionName($id);
                    }
                    
                }
            }
        }

    }

   