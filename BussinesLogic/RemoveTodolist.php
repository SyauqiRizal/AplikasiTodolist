<?php 

function removeTodolist(int $number)
{
    global $todolist;
    if($number > sizeof($todolist))
    {
        return false;
    }

    for ($i=$number; $i < sizeof($todolist); $i++)
    {
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[$i]);
    return true;
}
