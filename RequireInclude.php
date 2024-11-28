<?php
/*
# Require dan Include #
=======================
● Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu ﬁle
● Lebih baik dipisah ke beberapa ﬁle agar kode program tidak terlalu bertumpuk di satu ﬁle
● PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil ﬁle php lain
● Lantas apa bedanya require dan include?
● Pada require, jika ﬁle yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
● Pada include, jika ﬁle yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun
program akan tetap dilanjutkan
*/

include "MyFunction.php";

echo sayHello("Bagus", "Oki");

/*
# Posisi Require dan Include #
==============================
● Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan
include sesuai dengan yang kita inginkan
● Misal jika sampai kita salah menempatkan posisi require dan include, bisa jadi kita malah
memanggil function yang belum ada 

# Posisi Include Salah #
========================

<?php

echo sayHello("Bagus", "Oki");

include "MyFunction.php";

*/

/*
# require_once dan include_once #
=================================
● Function require dan include akan selalu mengambil ﬁle yang kita inginkan
● Jika kita beberapa kali menggunakan require dan include ﬁle yang sama, maka ﬁle tersebut akan
berkali-kali pula kita ambil
● Hal ini akan menjadi masalah jika misal dalam ﬁle yang kita ambil terdapat deﬁnisi function ,
sehingga jika diambil berkali-kali akan menyebabkan error redeclare function
● Untungnya di PHP terdapat function require_once dan include_once, function ini bisa mendeteksi
jika kita sebelumnya pernah mengambil ﬁle yang sama, maka tidak akan diambil lagi


# Include Berkali-kali #
========================

include "MyFunction.php";
include "MyFunction.php";
echo sayHello("Oki", "Bagus");


# include_once #
================

include_once "MyFunction.php";
include_once "MyFunction.php";
echo sayHello("Oki", "Bagus");

*/

