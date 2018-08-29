<?php

	
	// ステップ① session_start
        session_start();

	// ステップ② データベース接続
        require('db_connect.php');
    // ステップ③ ログインボタンを押した時の処理
    if(!empty($_POST)){
        $sql ='SELECT * FROM `users` WHERE `email`=? AND `password`=?';
            $data = array($_POST['email'],sha1($_POST['password']));
            $stmt = $dbh->prepare($sql);
            $stmt ->execute($data);
            $member =$stmt->fetch(PDO::FETCH_ASSOC);
	// ステップ④ ログイン情報エラー文を表示させる処理
        
        if($member == false){
            $error['login'] = 'failed';
            }

	// ステップ⑤ データ一致時の処理
           else{
            $_SESSION['id'] = $member['id'];
            $_SESSION['time'] = time();
           
	// ステップ⑥ index.phpへ遷移
            header('Location: index.php');
        }
    }

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Performing Arts</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/bootstrap/css/form.css" rel="stylesheet">
    <link href="lib/bootstrap/css/timeline.css" rel="stylesheet">
    <link href="lib/bootstrap/css/main.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"><a class="navbar-brand" href="index.html"><img src="img/logo.png"></a></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
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
                <legend>ログイン</legend>

                <form method="POST" action="" class="form-horizontal" role="form">
                    <!-- メールアドレス -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">メールアドレス</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" placeholder="例： seed@nex.com">
                        </div>
                    </div>

                    <!-- パスワード -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">パスワード</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" placeholder="">
                        </div>
                    </div>

                    <!-- ステップ⑦ ログイン情報エラー -->
                    <?php if(isset($error['login']) && $error['login'] == 'failed'){ ?>
                        <p class="error">* ログインに失敗しました。もう一度入力して下さい。</p>
                    <?php } ?>
                    	<!-- <p class="error">メールアドレス、またはパスワードが一致しません。</p> -->

                    <input type="submit" class="btn btn-default" value="ログイン"> &nbsp;|&nbsp;
					<a href="join/regi_index.php" class="btn btn-default">会員登録</a>
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
