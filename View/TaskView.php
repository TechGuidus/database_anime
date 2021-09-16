<?php

class TaskView{

    function __construct(){

    }

    function showTasks($tasks){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'" />
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Tareas 2021</title>
        </head>
        <body>
            
            <h1>Tareas 2021</h1>
        
            <ul>';
    
        foreach($tasks as $tarea) {
            if($tarea->finalizada == 1){
                $html.= '<li><div class="card-body"> <strike>'. $tarea->titulo .': '.$tarea->descripcion .' - '.'<a class="btn btn-danger" href="deleteTask/'.$tarea->id_tarea.'">Borrar</a> - <a class="btn btn-success" href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</strike></div></li>';
            }else{
                $html.= '<li><div class="card-body"> <a href="viewTask/'.$tarea->id_tarea.'">'. $tarea->titulo .'</a>: '.$tarea->descripcion .' - '.'<a class="btn btn-danger" href="deleteTask/'.$tarea->id_tarea.'">Borrar</a> - <a class="btn btn-success" href="updateTask/'.$tarea->id_tarea.'">Done</a>'.'</div></li>';
            }
       }
    
        $html .=   '
            </ul>
         
            <h2>Crear Tarea</h2>
            <form action="createTask" method="post">
                <input type="text" name="title" id="title">
                <input type="text" name="description" id="description">
                <input type="number" name="priority" id="priority">
                <input type="checkbox" name="done" id="done">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
        </body>
        </html>';
    
        echo $html;
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showTask($tarea){
        echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <base href="'.BASE_URL.'" />
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <title>Tareas 2021</title>
                </head>
                <body>
                    
                    <h1>Titulo: '.$tarea->titulo.'</h1>
                    <h2>Descripcion: '.$tarea->descripcion.'</h2>
                    <h2>Prioridad: '.$tarea->prioridad.'</h2>
                    <h2>Finalizada: '.$tarea->finalizada.'</h2>

                    <a href="home" > Volver </a>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                </body>
                </html>';
    }
}