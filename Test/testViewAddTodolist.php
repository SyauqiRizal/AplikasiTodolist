<?php 
require_once "../view/ViewAddTodolist.php";
require_once "../Bussineslogic/showTodolist.php";
require_once "../Bussineslogic/addTodolist.php";


addTodolist("tugas video");
addTodolist("tugas individu");

showTodolist();
viewAddTodolist();
showTodolist();
