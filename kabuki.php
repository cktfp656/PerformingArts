
<?php
	session_start();
	require('db_connect.php');
	if(!empty($_POST)){
		$sql = 'INSERT INTO `comments`(`user_id`,`category_code`,`comment`,`created`) VALUES(?,?,?,now())';
		$data = array($_SESSION['id'],'kabuki',$_POST['comment']);
            $stmt = $dbh->prepare($sql);
            $stmt ->execute($data);
}


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Bootstrap -->
	<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="lib/bootstrap/css/form.css" rel="stylesheet">
	<link href="lib/bootstrap/css/timeline.css" rel="stylesheet">
	<link href="lib/bootstrap/css/main.css" rel="stylesheet">
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
                <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><button class="btn btn-info"><a href="index.html" style="color: white;">contact</a></button></li>
                    <li><button class="btn btn-success"><a href="index.html" style="color: white;">login</a></button></li>
                    <li><button class="btn btn-danger"><a href="index.html" style="color: white;">logout</a></button></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<hr>
	<div class="container" style="padding-top: 70px;">
		<div class="row" style="border:2px solid;">
			<div class="col-md-4" style="text-align;height:500;
			overflow:auto;">
				<div class="row">
					<div class="col-md-6" style="text-align: center;">
						<img src="img/portfolio/kabuki2.jpg"width="100" height="100"><br>
						<p style="text-align:right;"><strong>Seedくん</strong></p>
					</div>
					<div class="col-md-8" style="text-align: left;">
						<h2>一件の歌舞伎の画像に対するコメント</h2>
						<small>20**/**/**</small>
					</div>
				</div>
			</div>
		<div class="col-md-4" style="text-align: center;background:red;
			height:500px;">
			<p>一件の画像に対する説明文</p>
		</div>
		<div class="col-md-4" style="text-align: center;background:green; height:500px;">
			<img src="img/portfolio/kabuki2.jpg" style="width:100%">
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="" class="form-horizontal" role="form">
					<textarea name="comment" rows="4" style="width:100%"></textarea>
					<div class="row" style=" height:70px;text-align: center;">
						<div class="col-md-12">
							<button class="btn btn-primary" >comment here</button>
							<button class="btn btn-primary">top</button>
						</div>
					</div>
				</form>
			</div>
		</div>
</body>
</html>