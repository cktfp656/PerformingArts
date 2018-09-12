<?php
    session_start();
    require('db_connect.php');
    echo '<br>';
if(!empty($_POST)){
    // var_dump($_POST);exit;
    if(!empty($_POST)){
        $sql = 'INSERT INTO `comments`(`user_id`,`content_id`,`category_code`,`comment`,`created`) VALUES(?,?,?,?,now())';
        $data = array($_SESSION['id'],$_POST['content_id'],'rakugo',$_POST['comment']);
            $stmt = $dbh->prepare($sql);
            $stmt ->execute($data);
}
}
//着物のコンテンツを取得するSQL文作成
$sql='SELECT * FROM `contents` WHERE `category_code` = "rakugo"';
//SQL実行
$stmt = $dbh->prepare($sql);
$stmt ->execute();
//取得したデータを配列に格納
$rakugo_contents = array();
while(true){
        $rakugo = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rakugo == false){
            break;
        }

        $comments_sql = 'SELECT `comments`.`comment`,`users`.`name`,`users`.`img_name` FROM `comments` LEFT JOIN `users` ON `comments`.`user_id`=`users`.`id` WHERE `content_id`=?';
        $data = array($rakugo['id']);
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
        $rakugo['comment'] = $comments;
        $rakugo_contents[] =$rakugo;

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
                <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><button class="btn btn-info"><a href="kimono.php" style="color: white;">kimono</a></button></li>
                    <li><button class="btn btn-info"><a href="kabuki.php" style="color: white;">kabuki</a></button></li>
                    <li><button class="btn btn-info"><a href="rakugo.php" style="color: white;">rakugo</a></button></li>
                    <li><button class="btn btn-primary"><a href="index.php#portfolid" style="color: white;">photos</a></button></li>
                    <li><button class="btn btn-warning"><a href="index.php#clients" style="color: white;">comments</a></button></li>
                    <li><button class="btn btn-success"><a href="login.php" style="color: white;">login</a></button></li>
                    <li><button class="btn btn-danger"><a href="logout.php" style="color: white;">logout</a></button></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" style="padding-top: 70px;">
        <div class="row" style="border:2px solid; background: white;">
            <?php foreach ($rakugo_contents as $rakugo): ?>
            <div class="col-md-6">
                <?php include("rakugo_card.php") ?>
            </div>
                 <?php endforeach ?>
       </div>
    </div>
</body>
</html>
