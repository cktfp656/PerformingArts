<?php
session_start();
// データベース接続
require('../db_connect.php');

if(!empty($_POST)) {
		if($_POST['nick_name'] == '')
	{
		$error['nick_name'] = 'blank';
	}
		if($_POST['email'] == '')
	{
		$error['email'] = 'blank';
	}
		if($_POST['password'] == '')
	{
		$error['password'] ='blank';
	}elseif(mb_strlen($_POST['password']) < 6){
		$error['password'] = 'legend';

	}
	if(!isset($error) && !empty($_FILES)){
		if($_FILES['picture_path']['name'] ==''){
			$error['picture_path'] = 'blank';
		}else{
			$ext = substr($_FILES['picture_path']['name'], -4);
			$ext = strtolower($ext);

			if($ext == '.jpg' || $ext =='.png' || $ext == '.gif'){
				$picture_name = date('YmdHis') . $_FILES['picture_path']['name'];
				move_uploaded_file($_FILES['picture_path']['tmp_name'],'../picture_path/' . $picture_name);

				$_SESSION['join'] = $_POST;
				$_SESSION['join']['picture_path'] = $picture_name;

				header('Location: regi_check.php');
			}else{
				$error['picture_path']='type';
			}
		}
	}
} //post送信された時の閉じかっこ


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Performing Arts</title>

	<!-- Bootstrap -->
	<link href="../lib/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../lib/bootstrap/css/form.css" rel="stylesheet">
	<link href="../lib/bootstrap/css/timeline.css" rel="stylesheet">
	<link href="../lib/bootstrap/css/main.css" rel="stylesheet">
	<!-- designフォルダ内では2つパスの位置を戻ってからcssにアクセスしていることに注意！ -->
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
      <div class="col-md-6 col-md-offset-3 content-margin-top">

				<legend>会員登録</legend>
				<form method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data">

					<!-- ニックネーム -->
					<div class="form-group">
						<label class="col-sm-4 control-label">nickname</label>
						<div class="col-sm-8">
							<input type="text" name="nick_name" class="form-control" placeholder="例： Seed kun">

							<?php if(isset($error['nick_name'])): ?>

								<p class="error">*ニックネームを入力して下さい。</p>
							<?php endif ?>
						</div>
					</div>

					<!-- メールアドレス -->
					<div class="form-group">
						<label class="col-sm-4 control-label">email</label>
						<div class="col-sm-8">
							<input type="email" name="email" class="form-control" placeholder="例： seed@nex.com">

							<?php if(isset($error['email'])): ?>
								<p class="error">*メールアドレスを入力して下さい。></p>
							<?php endif ?>
						</div>
					</div>

					<!-- パスワード -->
					<div class="form-group">
						<label class="col-sm-4 control-label">password</label>
						<div class="col-sm-8">
							<input type="password" name="password" class="form-control" placeholder="">
							<?php if(isset($error['password']) && $error['password'] == 'blank'):?>
							<p class="error">*パスワードを入力して下さい。</p>)

							<?php elseif(isset($error['password']) && $error['password'] == 'legend'): ?>
									<p class="error">*パスワードは6文字以上入力してください＿。</p>
									<?php  endif ?>
						</div>
					</div>

					<!-- プロフィール写真 -->
					<div class="form-group">
						<label class="col-sm-4 control-label">profile-picture</label>
						<div class="col-sm-8">
							<input type="file" name="picture_path" class="form-control">
						<?php if(isset($error['picture_path']) && $error['picture_path'] == 'type'): ?>

						<p class="error">*拡張子はjpg,gif,pngいずれかのファイルを選んで下さい。</p>
					<?php endif ?>
						</div>
					</div>

					<input type="submit" class="btn btn-default" value="確認画面へ">

				</form>

			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/js/jquery-3.1.1.js"></script>
	<script src="assets/js/jquery-migrate-1.4.1.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>