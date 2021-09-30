<?php
require_once "./Model/TaskModel.php";
require_once "./View/TaskView.php";
require_once "./Helpers/AuthHelper.php";

class TaskController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new TaskModel();
        $this->view = new TaskView();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){

        $this->authHelper->checkLoggedIn();

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
        $this->authHelper->checkLoggedIn();

        $this->model->deleteTaskFromDB($id);
        $this->view->showHomeLocation();
    }

    function updateTask($id){
        $this->authHelper->checkLoggedIn();

        $this->model->updateTaskFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewTask($id){
        $this->authHelper->checkLoggedIn();

        $task = $this->model->getTask($id);
        $this->view->showTask($task);
    }

}
