<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class TaskView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showTasks($tasks){
        $this->smarty->assign('titulo', 'Lista de tareas');        
        $this->smarty->assign('tasks', $tasks);

        $this->smarty->display('templates/taskList.tpl');
    }

    function showTask($task){
        $this->smarty->assign('task', $task);
        $this->smarty->display('templates/taskDetail.tpl');
     }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
    
}