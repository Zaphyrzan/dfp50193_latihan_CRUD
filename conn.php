<?php
$host = 'localhost';
$user = 'root';
$pswd = ''; #Sepasang single quotes
$dbname = 'latihan_crud';

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();