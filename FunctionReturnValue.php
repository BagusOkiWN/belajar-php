<?php
/*
# Function Return Value #
=========================
- secara default function tidak menghasilkan value apapun
- function dengan return value adalah function yang mengembalikan nilai / value
- dalam block function harus diikuti dengan kata return 
- hanya dapat menghasilkan 1 data saja
*/

function sum(int $first, int $second){
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(30, 20);
var_dump($total);

function getFinalValue(int $value){
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "E";
    }
}

/*
# Return Type Declarations #
============================
● Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
● Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
● Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya
*/
function sumA(int $first, int $second): int
{
    return $first + $second;
}

function getFinalValueA(int $value): string
{
    // 
}