<?php 
var_dump($_POST["code"]);

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
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="50"></a>
            </div>
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
    			<form method="POST" action="new_contents_add.php" >
                    <input type="hidden" name="contents_img_name" value="<?php echo $picture_name; ?>">
                    <input type="hidden"  name="category_code" value="<?php echo ($_POST['code']); ?>">
                    <input type="hidden" name="description" value="<?php echo ($_POST['description']);?>">
                <table class="table table-striped table-condensed">
                        <tbody>
                            <tr>
                                <td><div class="text-center">プロフィール画像</div><div class="text-center"><img src="contents-img/<?php echo $picture_name; ?>" width="300" height="300"></div></td>
                            </tr>
                            <tr>
                                <td>
                                <?php echo ($_POST['description'])?>
                            </td></tr>
                            <tr><td><?php echo ($_POST['code']); ?></td></tr>
                        </tbody>
                    </table>
                    <a href="index.php">&laquo;&nbsp;戻る</a>
                    <input type="submit" class="btn btn-default" value="登録">
    			</form>
    		</div>
    	</div>
    </div>
</body>
</html>
