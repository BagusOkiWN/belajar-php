<?php
/*
# For Each Loop #
=================
- foreach dapat digunakan untuk mengakses seluruh data array
*/

# Kode Tanpa For Each #
#=====================#
$nama = ["Bagus", "Oki", "Wijaya"];

for ($i = 0; $i < count($nama); $i++){
    echo "Hello $nama[$i]" . PHP_EOL;
}

# Kode Dengan For Each #
#======================#
foreach ($nama as $jeneng){
    echo "Hello $jeneng" . PHP_EOL;
}

# Kode For Each Dengan Key #
#==========================#
$orang = [
    "first_name" => "Bagus",
    "middle_name" => "Oki",
    "last_name" => "Wijaya"
];

foreach($orang as $key => $value){
    echo "$key : $value" . PHP_EOL;
}