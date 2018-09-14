<?php  
// データベースに必要な文字列
$dsn = 'mysql:dbname=performing_arts;host=localhost';
$user = 'root';
$password = '';

// $dsn = 'mysql:dbname=LAA0993638-performing;host=mysql132.phy.lolipop.lan';
// $user = 'LAA0993638';
// $password = 'Kawauso';
// データベース（DB)を使える形にしている
$dbh = new PDO($dsn,$user,$password);
// 日本語の文字化けを防ぐ
$dbh->query('SET NAMES utf8');
?>