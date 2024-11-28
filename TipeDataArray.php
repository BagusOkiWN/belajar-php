<?php

// Kumpulan Data 
// Array PHP itu fleksibel

$values = array(1, 2, 3, 4);
var_dump($values);

$names = array("Bagus", "Oki", "Wijaya", "Nugroho");
var_dump($names);

echo $names[3];

$names[1] = "sugaB"; 
echo "\n";
echo $names[1];

echo "/n";

unset($names[3]);
var_dump($names);

$okik = array(
    "id" => "okik",
    "name" => "Bagus Oki",
    "age" => 21
);
var_dump($okik);

echo $okik["name"];

//Nested Array
$sugab = array(
    "id" => "sugab",
    "name" => "Bagus Ikoo",
    "age" => 21,
    "address" => [
        "city" => "Solo",
        "country" => "Indonesia"
    ]
    );
var_dump($sugab);
var_dump($sugab["name"]);
var_dump($sugab["address"]["city"]);