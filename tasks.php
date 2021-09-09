<?php

function showHome(){

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="'.BASE_URL.'" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tareas 2021</title>
    </head>
    <body>
        
        <h1>Tareas 2021</h1>
    
        <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li>
            <li>Tarea 3</li>
        </ul>
     
    
        <form action="createTask" method="post">
            <input type="text" name="title" id="title">
            <input type="text" name="description" id="description">
            <input type="number" name="priority" id="priority">
            <input type="checkbox" name="done" id="done">
            <input type="submit" value="Guardar">
    
        </form>
    
    </body>
    </html>';

    echo $html;

}


