<?php
/* 
# Function #
============
- function adalah block kode program yang akan berjalan saat dipanggil
- untuk membuat function, function + nama function + ()
- function dapat dipanggil dengan nama function + ()
- function atau method sama
*/

function sayILY()
{
    echo "alapyu <3" . PHP_EOL;
}

sayILY();

/*
# Lokasi Function #
===================
- pada PHP, function bebas dibuat
- kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan
*/

$buat = true;

if ($buat) {
    function hi()
    {
        echo "Hi" . PHP_EOL;
    }
}

hi();