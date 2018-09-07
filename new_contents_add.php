<?php
session_start();
require('db_connect.php');
if(!empty($_POST)){
	$sql = 'INSERT INTO `contents`(`user_id`,`category_code`,`contents_img_name`,`description`,`created`) VALUES(?,?,?,?,now())';

	$data = array($_SESSION['id'],$_POST['category_code'],$_POST["contents_img_name"],$_POST['description']);
		$stmt = $dbh->prepare($sql);
		$stmt->execute($data);

	header('Location: index.php');
}

?>