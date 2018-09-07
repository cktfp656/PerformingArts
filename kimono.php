<?php
	session_start();
	require('db_connect.php');
	if(!empty($_POST)){
		$sql = 'INSERT INTO `comments`(`user_id`,`category_code`,`comment`,`created`) VALUES(?,?,?,now())';
		$data = array($_SESSION['id'],'kimono',$_POST['comment']);
            $stmt = $dbh->prepare($sql);
            $stmt ->execute($data);
}

//着物のコンテンツを取得するSQL文作成
$sql='SELECT * FROM `contents` WHERE `category_code` = "kimono"';
//SQL実行
$stmt = $dbh->prepare($sql);
$stmt ->execute();
//取得したデータを配列に格納
$kimono_contents = array();
while(true){
        $kimono = $stmt->fetch(PDO::FETCH_ASSOC);
        if($kimono == false){
            break;
        }
        $kimono_contents[] = $kimono;

    }
    // echo'<pre>';
    // var_dump($kimono_contents);
    // echo'</pre>';
    // exit;


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!DOCTYPE html>
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
			<?php foreach ($kimono_contents as $kimono): ?>
			<div class="col-md-6">
				<?php include("kimono_card.php") ?>
			</div>
			<?php endforeach ?>
	</div>
</body>
</html>
