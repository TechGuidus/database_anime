<?php

function connectToDB(){
    return new PDO('mysql:host=localhost;'.'dbname=db_tasks2021;charset=utf8', 'root', '');
}

function getTasks(){
    $db = connectToDB();
    $sentencia = $db->prepare( "select * from tareas");
    $sentencia->execute();
    $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $tareas;
}

function getTask($id){
    $db = connectToDB();
    $sentencia = $db->prepare( "select * from tareas WHERE id_tarea=?");
    $sentencia->execute(array($id));
    $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
    return $tarea;
}

//Ver el video
function insertTask($mermelada, $descripcion, $prioridad, $finalizada){
    $db = connectToDB();
    $sentencia = $db->prepare("INSERT INTO tareas(titulo, descripcion, prioridad, finalizada) VALUES(?, ?, ?, ?)");
    $sentencia->execute(array($mermelada,$descripcion,$prioridad, $finalizada ));
}

function deleteTaskFromDB($id){
    $db = connectToDB();
    $sentencia = $db->prepare("DELETE FROM tareas WHERE id_tarea=?");
    $sentencia->execute(array($id));
}

function updateTaskFromDB($id){
    $db = connectToDB();
    $sentencia = $db->prepare("UPDATE tareas SET finalizada=1 WHERE id_tarea=?");
    $sentencia->execute(array($id));
}