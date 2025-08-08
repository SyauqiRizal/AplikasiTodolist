<?php 
require_once __DIR__ ."/../helper/Input.php";

echo "Menu ini untuk menampilkan daftar todolist" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1"){
            //menampilkan view tambah todolist
            echo "tampil tambah";
        } else if ($pilihan == "2"){
            echo "tampil remove";
            //menampilkan view hapus todolist
        } else if ($pilihan == "3"){
            echo "keluar" .PHP_EOL;
        } else{
            echo "Pilihan tidak dimengerti" .PHP_EOL;
        }
?>