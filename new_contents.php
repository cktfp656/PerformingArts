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
                <ul class="nav navbar-nav navbar-right">
                    <li><button class="btn btn-info"><a href="index.html" style="color: white;">contents</a></button></li>
                    <li><button class="btn btn-warning"><a href="index.html" style="color: white;">login</a></button></li>
                    <li><button class="btn btn-danger"><a href="index.html" style="color: white;">logout</a></button></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3">
    			 <div class="well" style="text-align: center;">画像の登録をして下さい。</div>
        			<form method="POST" action="new_contents_check.php" class=""form-horizontal" role="form" enctype="multipart/form-data">
           				<input type="file" name="picture_path" class="form-control">
                        <div class="btn-group" data-toggle="buttons" style="width: 555px;">
                            <label class="btn btn-success active" style="width: calc(100%/3);">
                                <input name="code" type="radio" autocomplete="off" value="kimono" checked> 着物
                            </label>
                    		<label class="btn btn-success" style="width: calc(100%/3);">
                    			<input name="code" type="radio" autocomplete="off" value="kabuki"> 歌舞伎
                    		</label>
                    		<label class="btn btn-success" style="width: calc(100%/3);">
                    			<input name="code" type="radio" autocomplete="off" value="rakugo"> 落語
                    		</label>
                        </div>
                        <br>
    					<div class="">
          				<input type="submit" class="btn btn-block btn-default" value="確認画面へ">
          				</div>

    			</form>
    		</div>
    	</div>
    </div>
    <script src="lib/bootstrap/js/jquery-3.1.1.js"></script>
    <script src="lib/bootstrap/js/jquery-migrate-1.4.1.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>
</body>
</html>
