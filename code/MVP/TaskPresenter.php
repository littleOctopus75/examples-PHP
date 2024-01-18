<?php
include 'Task.php';

class TaskPresenter {
    private $tasks = [];

    public function __construct() {
        $this->loadTasks();
    }

    public function getTasks() {
        return $this->tasks;
    }

    public function addTask($description) {
        $newTask = new Task($description);
        $this->tasks[] = $newTask;
        $this->saveTasks();
    }

    private function loadTasks() {
        // Cargar las tareas desde donde sea que las estemos almacenando
        // En un entorno de producción, podrías usar una base de datos aquí.
    }

    private function saveTasks() {
        // Guardar las tareas donde sea que las estemos almacenando
        // En un entorno de producción, podrías usar una base de datos aquí.
    }
}

// Comprobar si la tarea se agregó mediante el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['task'])) {
        $taskPresenter = new TaskPresenter();
        $taskPresenter->addTask(htmlspecialchars($_POST['task']));
    }
}
?>
