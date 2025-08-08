<?php 
require_once __DIR__ ."/../model/todolist.php";
require_once __DIR__ ."/../bussineslogic/AddTodolist.php";
require_once __DIR__ ."/../bussineslogic/ShowTodolist.php";

addTodolist("Tugas Benchmark");
addTodolist("tugas individu");
addTodolist("tugas learning journal");

showTodolist();

?>