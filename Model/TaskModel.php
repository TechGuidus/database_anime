<?php

class TaskModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tasks2021;charset=utf8', 'root', '');
    }

    function getTasks(){
        $sentencia = $this->db->prepare( "select * from tareas");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    } 

    function insertTask($mermelada, $descripcion, $prioridad, $finalizada){
        $sentencia = $this->db->prepare("INSERT INTO tareas(titulo, descripcion, prioridad, finalizada) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($mermelada,$descripcion,$prioridad, $finalizada ));
    }

    function deleteTaskFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM tareas WHERE id_tarea=?");
        $sentencia->execute(array($id));
    }

    function updateTaskFromDB($id){
        $sentencia = $this->db->prepare("UPDATE tareas SET finalizada=1 WHERE id_tarea=?");
        $sentencia->execute(array($id));
    }

    function getTask($id){
        $sentencia = $this->db->prepare( "select * from tareas WHERE id_tarea=?");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
}