<?php
$host=getenv('IP');
$username=getenv('C9_USER');
$password='';
$dbname='cheapomail';
session_start();

$conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
?>