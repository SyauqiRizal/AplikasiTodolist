<?php 
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../BussinesLogic/AddTodolist.php";
require_once __DIR__ . "/../helper/input.php";


function viewAddTodolist()
{
    echo "==Menambah Todolist==" . PHP_EOL;
    $todo = input("Masukkan Todo (atau '5 untuk keluar) ");
    if ($todo == "5"){
        echo "batal menambah todolist" .PHP_EOL;
    }else{
        addTodolist($todo);
    }
    
}
