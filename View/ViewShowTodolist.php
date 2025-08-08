<?php 
require_once __DIR__. "/../Model/todolist.php";
require_once __DIR__. "/../Bussineslogic/ShowTodolist.php";
require_once __DIR__. "/../View/ViewAddTodolist.php";
require_once __DIR__. "/../View/ViewRemoveTodolist.php";
require_once __DIR__. "/../helper/Input.php";

function viewShowTodolist()
{
   
    while (true)
    {
        showTodolist();

        echo "Menu ini untuk menampilkan daftar todolist" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. keluar" . PHP_EOL;
        echo "===TERIMA KASIH===" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1"){
            //menampilkan view tambah todolist
            viewAddTodolist();
        } else if ($pilihan == "2"){
            //menampilkan view hapus todolist
            ViewRemoveTodolist();
        } else if ($pilihan == "3"){
            break;
        } else{
            echo "===Pilihan tidak dimengerti!!!!!===" .PHP_EOL;
        }
    }
   echo "sampai jumpa di lain waktu" .PHP_EOL;
}

?>
