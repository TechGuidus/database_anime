<?php

class TaskModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=anime_db;charset=utf8', 'root', '');
    }

    function getTasks(){
        $sentencia = $this->db->prepare( "select * from series");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }
    function getGenres(){
        $sentencia = $this->db->prepare( "select * from genero");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
    }  

    function insertTask($nombre, $descripcion, $fechaEmision, $cantidadEpisodios, $genero){
        $sentencia = $this->db->prepare("INSERT INTO series(nombre, descripcion, fechaEmision, cantidadEpisodios, id_genero) VALUES(?, ?, ?, ?,?)");
        $sentencia->execute(array($nombre, $descripcion, $fechaEmision, $cantidadEpisodios, $genero));
    }

    // function deleteTaskFromDB($id){
    //     $sentencia = $this->db->prepare("DELETE FROM tareas WHERE id_tarea=?");
    //     $sentencia->execute(array($id));
    // }

    // function updateTaskFromDB($id){
    //     $sentencia = $this->db->prepare("UPDATE tareas SET finalizada=1 WHERE id_tarea=?");
    //     $sentencia->execute(array($id));
    // }

    function getTask($id){
        $sentencia = $this->db->prepare( "select * from series WHERE id_tarea=?");
        $sentencia->execute(array($id));
        $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
        return $tarea;
    }
}