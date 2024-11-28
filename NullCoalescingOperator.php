<?php
/*
# Null Coalescing Operator #
============================
- untuk pengecekan data
*/

// # Kode Tanpa Null Coalescing Operator # //
$data = [];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}
echo $action;

// # Kode dengan Null Coalescing Operator # //
$action = $data['action'] ?? 'nothing';
echo $action;