<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'db_inventory_ajengv';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn){
    die('koneksi gagal' . mysqli_connect_error());
}