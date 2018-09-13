<?php
	session_start();
	require('db_connect.php');
    echo '<br>';
if(!empty($_POST)){
    // var_dump($_POST);exit;
	if(!empty($_POST)){
		$sql = 'INSERT INTO `comments`(`user_id`,`content_id`,`category_code`,`comment`,`created`) VALUES(?,?,?,?,now())';
		$data = array($_SESSION['id'],$_POST['content_id'],'kabuki',$_POST['comment']);
            $stmt = $dbh->prepare($sql);
            $stmt ->execute($data);



}
}
//着物のコンテンツを取得するSQL文作成
$sql='SELECT * FROM `contents` WHERE `category_code` = "kabuki"';
//SQL実行
$stmt = $dbh->prepare($sql);
$stmt ->execute();
//取得したデータを配列に格納
$kabuki_contents = array();
while(true){
        $kabuki = $stmt->fetch(PDO::FETCH_ASSOC);
        if($kabuki == false){
            break;
        }

        $comments_sql = 'SELECT `comments`.`comment`,`users`.`name`,`users`.`img_name` FROM `comments` LEFT JOIN `users` ON `comments`.`user_id`=`users`.`id` WHERE `content_id`=?';
        $data = array($kabuki['id']);
        $comments_stmt = $dbh->prepare($comments_sql);
        $comments_stmt->execute($data);
        $comments = array();
        while(true){
            $comment = $comments_stmt->fetch(PDO::FETCH_ASSOC);
            if($comment == false){
                break;
            }
            $comments[] = $comment;
        }
        $kabuki['comment'] = $comments;
        $kabuki_contents[] =$kabuki;

    }
    // echo'<pre>';
    // var_dump($kabuki_contents);
    // echo'</pre>';
    // exit;
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!DOCTYPE html>
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
<body style="background-image: url('img/kabuki_back.png');background-position: center center;background-repeat: no-repeat; background-attachment: fixed;background-size: cover;">
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
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="50"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="kabuki.php"><img src="img/kabuki1.png" width="50" height="30"></a></li>
                        <li><a href="kimono.php"><img src="img/kimono1.png" width="50" height="30"></a></li>
                        <li><a href="rakugo.php"><img src="img/rakugo1.png" width="50" height="30"></a></li>
                    <?php if (isset($_SESSION['id'])): ?>
                        <li><a href="question.php">F&Q</a></li>
                        <li ><a href="index.php#portfolio">photos</a></li>
                        <li><a href="index.php#clients">comments</a></li>
                        <li><a href="logout.php">logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">login</a></li>
                    <?php endif ?>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<div class="container" style="padding-top: 70px;">
		<div class="row" style="border:2px solid; background: white;">
			<?php foreach ($kabuki_contents as $kabuki): ?>
			<div class="col-md-6">
				<?php include("kabuki_card.php") ?>
			</div>
			     <?php endforeach ?>
	   </div>
    </div>
</body>
</html>
