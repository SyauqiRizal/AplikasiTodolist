<?php 
require_once __DIR__ ."/../Model/todolist.php";
require_once __DIR__ ."/../BussinesLogic/AddTodolist.php";
require_once __DIR__ ."/../BussinesLogic/ShowTodolist.php";
require_once __DIR__ ."/../View/ViewRemoveTodolist.php";

addTodolist("Belajar PHP");
addTodolist("Seminar");
addTodolist("Workshop");

showTodolist();

ViewRemoveTodolist();

showTodolist();


?>