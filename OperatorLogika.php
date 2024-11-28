<?php

/*
# Operator Logika #
===================
- untuk membandingkan dua nilai boolean
- hasil akhirnya boolean lagi

Operator        Nama        Hasil
$a && $b        And         true jika $a dan $b keduanya true
$a and $b       And         true jika $a dan $b keduanya true
$a || $b        Or          true jika $a dan $b salah satu atau keduanya true
$a or $b        Or          true jika $a dan $b salah satu atau keduanya true
! $a            Not         true jika $a dan $b salah satu atau keduanya true
$a xor $b       Xor         true jika $a dan $b salah satu true, tapi tidak keduanya
*/

var_dump(true && true);
var_dump(true && false);
var_dump(true || false);
var_dump(true xor true);
var_dump(!true);