<?php
// Pertemuan 2 - PHP Dasar
// Sintask PHP

// Standart Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. html di dalam PHP

// Variable dan Tipe Data
// // Variable
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Fernanda Pasa";
echo "Halo, nama saya $nama". ", ";

// Operator
// aritmatika
// +-*/%
$x = 10;
$y = 20;
echo $x * $y .", ";

// pengabungan string / concatenation / connection
// . 
// #
$nama_depan = "Fernanda";
$nama_belakang = "Pasa";
echo $nama_depan . " " . $nama_belakang . ", ";

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $y -= 5;
// echo $x;
$nama = "Fernanda";
$nama .= " ";
$nama .= "Pasa";
echo $nama .", ";

// Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 == "1") .". ";

// Identitas
// ===, !==
var_dump(1 === "1") .", ";

// Logika
//&&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0) .", ";

?>