<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskTracker MVP</title>
</head>
<body>
    <h1>TaskTracker MVP</h1>
    
    <form action="TaskPresenter.php" method="post">
        <label for="task">Nueva Tarea:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Agregar tarea</button>
    </form>


    <h2>Lista de Tareas:</h2>
    <ul>
        
        <?php
            // Mostrar la lista de tareas
            include 'TaskPresenter.php';
            $taskPresenter = new TaskPresenter();
            $tasks = $taskPresenter->getTasks();
            
            foreach ($tasks as $task) {
                echo "<li>{$task->getDescription()}</li>";
            }
        ?>
    </ul>
</body>
</html>
