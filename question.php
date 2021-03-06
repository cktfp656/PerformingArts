<?php
    session_start();
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
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="50"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="kabuki.php"><img src="img/kabuki1.png" width="50" height="30"></a></li>
                        <li><a href="kimono.php"><img src="img/kimono1.png" width="50" height="30"></a></li>
                        <li><a href="rakugo.php"><img src="img/rakugo1.png" width="50" height="30"></a></li>
                    <?php if (isset($_SESSION['id'])): ?>
                        <li><a href="question.php">Q&A</a></li>
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
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="padding-top: 70px;"></div>
		</div>
		<div class="row">
			<div class="col-md-12" style="background: white;">
				<h1 style="text-align: center;">よくある質問コーナー</h1>
				<h1>目次</h1>
				<h2 style="border: 1px solid; color: blue;">本サイトのご利用について</h2>
				<ul>
					<a href="#1"><li><h3>新規登録をしたらどういったことができますか？</h3></li></a>
					<a href="#2"><li><h3>歌舞伎や着物のコンテンツはどのように投稿できますか？</h3></li></a>
					<a href="#3"><li><h3>メールアドレスやパスワードを忘れてしまいました。</h3></li></a>
					<a href="#4"><li><h3>見に覚えのないコメントが書かれています。</h3></li></a><br><br>
				</ul>
				<h2 style="border: 1px solid; color: blue;">個人情報の取扱いについて</h2>
				<ul>
					<a href="#5"><li><h3>メールアドレスやパスワードはなぜ必要ですか？</h3></li></a>
					<a href="#6"><li><h3>個人情報をどのように使用しますか？</h3></li></a>
					<a href="#7"><li><h3>パスワードはきちんと保管していますか？</h3></li></a><br><br>
				</ul>
				<h2 style="border: 1px solid; color: blue;">本サービスのコンテンツについて</h2>
				<ul>
					<a href="#8"><li><h3>落語とはなんですか？</h3></li></a>
					<a href="#9"><li><h3>着物と浴衣の違いはなんですか？</h3></li></a>
					<a href="#10"><li><h3>歌舞伎とはなんですか？</h3></li></a><br><br>
				</ul>
				<div class="well"">
					<h2 id="1" style="color: blue;">本サイトのご利用について</h2><br>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> 新規登録をしたらどういったことができますか？</h4>
						<h4 id="2"><span class="glyphicon glyphicon-hand-right"></span>画像の投稿、閲覧が出来たり、各サイトの詳細が見れます</h4>
					</div>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> 歌舞伎や着物のコンテンツはどのように投稿できますか？</h4>
						<h4 id="3"><span class="glyphicon glyphicon-hand-right"></span> サイトのMy Pageから投稿されたい画像やコメントを登録する事が出来ます</h4>
					</div>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> メールアドレスやパスワードを忘れてしまいました。</h4>
						<h4 id="4"><span class="glyphicon glyphicon-hand-right"></span>お手数ですが、再度新規登録をして下さい。</h4>
					</div>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> 見に覚えのないコメントが書かれています。</h4>
						<h4><span class="glyphicon glyphicon-hand-right"></span> コメントの近くの削除や変更を押して下さい。</h4>
					</div>
					<h2 id="5" style="color: blue;">個人情報の取扱いについて</h2><br>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> メールアドレスやパスワードはなぜ必要ですか？</h4>
						<h4 id="6"><span class="glyphicon glyphicon-hand-right"></span> お客様が、Performing Arts上でアカウントを作成されると、会員サービスをご利用いただくことができます。</h4>
					</div>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> 個人情報をどのように使用しますか？</h4>
						<h4 id="7"><span class="glyphicon glyphicon-hand-right"></span> ログイン・ログアウトの利用時のみしか表示されていませんので、会員登録されないと見る事が出来ません。</h4>
					</div>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> パスワードはきちんと保管していますか？</h4>
						<h4><span class="glyphicon glyphicon-hand-right"></span> 暗号化して保管しています。</h4>
					</div>
					<h2 id="8" style="color: blue;">本サービスのコンテンツについて</h2><br>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> 落語とはなんですか？</h4>
						<h4 id="9"><span class="glyphicon glyphicon-hand-right"></span>シンプルに言ってしまえば、『オチ』がある噺は全て落語です。主に、古典落語と新作落語(創作落語)に分かれると思います。</h4>
					</div>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> 着物と浴衣の違いはなんですか？</h4>
						<h4 id="10"><span class="glyphicon glyphicon-hand-right"></span>着物:着るものによっては、オールシーズン対応　普段着から正装まで使えます。 TPO(着物の格)によって色々組み合わせを考えたりするのでそんなに難しくない。　浴衣:基本的に、夏季限定　柄によっては、９月まで着れたりもするがあまりしない。　</h4>
					</div>
					<div class="well">
						<h4><span class="glyphicon glyphicon-question-sign"></span> 歌舞伎とはなんですか？</h4>
						<h4><span class="glyphicon glyphicon-hand-right"></span>派手な衣装や化粧をしたりして、観る人を楽しませる。演目は様々で、演目により、背景画、出演する楽器が変わったりします。</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>