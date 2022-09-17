<?php

$value = "E";
$result = "";

switch ($value){
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda Tidak Lulus";
        break;
    case "E":
        $result = "Mungkin Anda salah jurusan";
        break;
    default:
        $result = "Nilai apa Itu?";
}

echo $result.PHP_EOL;
#meggunakan mactch expresion
/**
 * penggunaan fitur ini hanya untuk yg sederhana
 */
$result = match ($value){
    "A", "B", "C" =>"Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin anda salan jurusan",
    default => "Nilai apa itu"
};

echo $result . PHP_EOL;

$value = 70;

$result = match (true){
    $value >= 80 => "A",
    $value >= 70 =>"B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result .PHP_EOL;

$name = "Mr. Fikri";

$result = match (true) {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs. ") => "Hello mis",
    default => "Hello"
};
echo $result .PHP_EOL;



