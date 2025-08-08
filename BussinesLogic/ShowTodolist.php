<?php 
function showTodolist()
{
    global $todolist;
    echo "TODOLIST" . PHP_EOL;
    foreach ($todolist as $number => $todo)
    {
        echo "$number. $todo" .PHP_EOL;
    }
}
