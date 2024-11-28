<?php
/*
# If Statement #
================
- digunakan untuk percabangan
*/

/* Syntax If Statement
======================
if (expression)
    statement;

if (expression) {
    statement1;
    statement2;
}
*/

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "anda lulus" . PHP_EOL;
} else {
    echo "ga lulus oi";
}
