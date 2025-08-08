<?php 
require_once __DIR__ ."/../Model/todolist.php";
require_once __DIR__ ."/../BussinesLogic/RemoveTodolist.php";
require_once __DIR__ ."/../helper/input.php";

function ViewRemoveTodolist(){

    echo "==Menghapus Todolist==" . PHP_EOL;
    $pilihan = input("Pilih nomor todo yang dihapus (atau '9' untuk batal) ");

    if($pilihan == "9"){
        echo "Batal menghapus Todo" .PHP_EOL;

    }else{
        $sukses = removeTodolist($pilihan);

        if($sukses){
              echo "sukses menghapus todo nomor $pilihan";
         }else{
            echo "Gagal menghapus todo nomor $pilihan";
         }
    }

}
?>