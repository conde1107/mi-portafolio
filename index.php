<?php
// Autocargador
spl_autoload_register(function ($clase) {
    if (file_exists("controllers/{$clase}Controller.php")) {
        require_once "controllers/{$clase}Controller.php";
    } elseif (file_exists("models/$clase.php")) {
        require_once "models/$clase.php";
    } elseif (file_exists("core/$clase.php")) {
        require_once "core/$clase.php";
    }
});

// Leer controlador y acción desde la URL
$controlador = $_GET['c'] ?? 'Auth';
$accion = $_GET['a'] ?? 'login';

$clase = ucfirst($controlador) . 'Controller';

if (class_exists($clase)) {
    $obj = new $clase();
    if (method_exists($obj, $accion)) {
        $obj->$accion();
    } else {
        echo "Método '$accion' no existe en '$clase'";
    }
} else {
    echo "Controlador '$clase' no encontrado";
}
