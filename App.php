<?php 
require_once __DIR__ ."/Model/todolist.php";
require_once __DIR__ ."/Bussineslogic/AddTodolist.php";
require_once __DIR__ ."/Bussineslogic/ShowTodolist.php";
require_once __DIR__ ."/Bussineslogic/RemoveTodolist.php";
require_once __DIR__ ."/View/ViewShowTodolist.php";
require_once __DIR__ ."/View/ViewAddTodolist.php";
require_once __DIR__ ."/View/ViewRemoveTodolist.php";
require_once __DIR__ ."/Helper/input.php";

echo "Aplikasi TODOLIST ASRORI" .PHP_EOL;

viewShowTodolist();


?>
