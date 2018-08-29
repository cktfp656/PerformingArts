<?php
session_start();

require('../db_connect.php');

$nick_name = htmlspecialchars($_SESSION['join']['nick_name']);
$email = htmlspecialchars($_SESSION['join']['email']);
$password = htmlspecialchars($_SESSION['join']['password']);
$picture_path = htmlspecialchars($_SESSION['join']['picture_path']);

if(!empty($_POST)){
	$sql = 'INSERT INTO`users` SET `name`=?,`email`=?,`password`=?,`img_name`=?,`created`=NOW()';
	$data = array($nick_name,$email, sha1($password),$picture_path);

	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);

	header('Location:regi_thanks.php');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Performing_Arts</title>

	<!-- Bootstrap -->
	<link href="../lib/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../lib/bootstrap/css/form.css" rel="stylesheet">
	<link href="../lib/bootstrap/css/timeline.css" rel="stylesheet">
	<link href="../lib/bootstrap/css/main.css" rel="stylesheet">
	<!-- designフォルダ内では2つパスの位置を戻ってからcssにアクセスしていることに注意!!! -->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span class="strong-title"><a class="navbar-brand" href="index.html"><img src="../img/logo.png"></a></span></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 content-margin-top">

				<form method="post" action="" class="form-horizontal" role="form">
					<input type="hidden" name="action" value="submit">
					<div class="well">ご登録内容をご確認下さい。</div>
					<table class="table table-striped table-condensed">
						<tbody>
						<!-- 登録内容を表示 -->
							<tr>
								<td><div class="text-center">nickname</div></td>
								<td><div class="text-center"><?php echo $nick_name; ?></div></td>
							</tr>
							<tr>
								<td><div class="text-center">email</div></td>
								<td><div class="text-center"><?php echo $email; ?></div></td>
							</tr>
							<tr>
								<td><div class="text-center">Password</div></td>
								<td><div class="text-center"> *******</div></td>
							</tr>
							<tr>
								<td><div class="text-center">プロフィール画像</div></td>
								<td><div class="text-center"><img src="../picture_path/<?php echo $picture_path; ?>" width="100" height="100"></div></td>
							</tr>
						</tbody>
					</table>

					<a href="index.php">&laquo;&nbsp;書き直す</a> |
					<input type="submit" class="btn btn-default" value="会員登録">
				</form>
			</div>
		</div>
	</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../assets/js/jquery-3.1.1.js"></script>
  <script src="../assets/js/jquery-migrate-1.4.1.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
</body>
</html>