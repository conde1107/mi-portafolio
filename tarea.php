<?php
class Tarea {

    public static funtion all(){
        global $pdo;
        return $pdo->query("SELECT * FROM tareas")->fetchAll();
   }


      public static funtion find(id){
        global $pdo;
       $stmt = $pdo ->prepare("SELECT * FROM tareas WHERE id = ?");
       $stmt->execute([$id]);
       return $stmt->fetch();
   }
         public static funtion create($titulo , $descripcion){
        global $pdo;
       $stmt = $pdo ->prepare("INSERT INTO tareas (titulo, descripcion) VALUES (?, ?");
       $stmt->execute([$titulo, $descripcion , $id]);
 }  
   public static funtion uptade( $id, $titulo, $descripcion){
        global $pdo;
       $stmt = $pdo ->prepare("UPTADDE tareas SET titulo=?, descripcion=? WHERE id=?");
       $stmt->execute([$titulo, $descripcion , $id]);
}

   public static funtion delete( $id){
        global $pdo;
       $stmt = $pdo ->prepare("DELETE FROM tareas WHERE id=?");
       $stmt->execute([$id]);
}
}
?>