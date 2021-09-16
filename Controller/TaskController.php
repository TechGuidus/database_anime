<?php
require_once "./Model/TaskModel.php";
require_once "./View/TaskView.php";

class TaskController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
    }

    function showHome(){
        $tasks = $this->model->getTasks();
        $this->view->showTasks($tasks);
    }

    function createTask(){
        if(!isset($_POST['done'])){
            $done = 0;
        }else{
            $done = 1;
        }

        $this->model->insertTask($_POST['title'], $_POST['description'], $_POST['priority'], $done);
        $this->view->showHomeLocation();
    }

    function deleteTask($id){
        $this->model->deleteTaskFromDB($id);
        $this->view->showHomeLocation();
    }

    function updateTask($id){
        $this->model->updateTaskFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewTask($id){
        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }
}
