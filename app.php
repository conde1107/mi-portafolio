<?php
class App{

    public function _construct()´{
        $controller = $GET["c"] ?? "Tarea";
        $action = $_GET ["a"] ?? "index";
    $controllerClass = $controller . "Controller";
    require_once"controllers/$controllerClass.php"
    $obj = new $controllerClass ;
    $obj->$action();
    }
}
?>