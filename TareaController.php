<?php
require_once" models/Tarea.php";

class TareaController {

    public function index(){
        $tareas = Tarea::all();
        require "views/tareas/index.php";
    }
    public function create (){
        require"views/tareas/create.php";

    }

    public function store() {
        Tarea::create($_POST["titulo"], $_POST["descripcion"])
        header("Location: index.php?c=Tarea&a=index");
    }
    public function edit(){
        $tarea = Tarea::find($_GET["id"]);
        require "views/tareas/edit.php";
    }
  public function uptade(){
    Tarea::uptade($_POST ["id"], $_POST["titulo"], $_POST["descripcion"]);
    header ("Location: index.php?c=Tarea&a=index");
  }

  public function delete(){
    Tarea::delete ($_GET["id"]);
    header("Location: index.php?c=Tarea&a=index");
  }
}
?>