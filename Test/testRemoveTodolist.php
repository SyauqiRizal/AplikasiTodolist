<?php 
require_once __DIR__ ."/../model/todolist.php";
require_once __DIR__ ."/../bussineslogic/ShowTodolist.php";
require_once __DIR__ ."/../bussineslogic/AddTodolist.php";
require_once __DIR__ ."/../bussineslogic/RemoveTodolist.php";

addTodolist("mengikuti latsar");
addTodolist("latihan PHP");
addTodolist("belajar membuat web");

showTodolist();
removeTodolist(2);
showTodolist();

?>