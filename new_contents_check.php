<?php 

$ext = substr($_FILES['picture_path']['name'], -4);
$ext = strtolower($ext);

if($ext == '.jpg' || $ext =='.png' || $ext == '.gif'){
    $picture_name = date('YmdHis') . $_FILES['picture_path']['name'];

    move_uploaded_file($_FILES['picture_path']['tmp_name'],'contents-img/'. $picture_name);
}


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
                <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
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
    		  <div class=" col-md-offset-2 col-md-5 col-md-offset-5">
                    <div class="well" style="text-align: center;">ご登録内容をご確認下さい。</div>
    			<form method="POST" action="">
                    <table class="table table-striped table-condensed">
                        <tbody>
                            <tr>
                                <td><div class="text-center">プロフィール画像</div><div class="text-center"><img src="contents-img/<?php echo $picture_name; ?>" width="300" height="300"></div></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="index.php">&laquo;&nbsp;戻る</a> |
                    <input type="submit" class="btn btn-default" value="登録">
    			</form>
    		</div>
    	</div>
    </div>
</body>
</html>
