<?php
    namespace App\Controllers;


    class studentsControler
    {

        public function index ():void
        {
            echo '<h1>Daftar Siswa</h1>';
            echo '<p>Menampilkan daftar siswa</P>';
        }

        Public function create(): void
        {
            echo '<h1>Tambah Siswa</h1>';
            echo '<p>Menampilkan form tambah siswa</P>';
        }

    }
?>