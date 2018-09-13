<?php 
session_start();

require('db_connect.php');

if(!isset($_SESSION['id'])){
  header('Location: login.php');
  exit();
}
  //       $sql = 'SELECT * FROM`comments` ORDER BY `created` DESC';
  //       $stmt = $dbh->prepare($sql);
  //       $stmt->execute();
  //       $comments = array();
  //     while(true){
  //       $comment = $stmt->fetch(PDO::FETCH_ASSOC);
  //       if($comment == false){
  //           break;
  //       }
  //       $comments[] = $comment;
  // }

 $sql = 'SELECT`comments`.*,`users`.`name`,`users`.`img_name` FROM `comments` LEFT JOIN `users` ON `users`.`id`=`comments`.`user_id`ORDER BY`comments`.`created` DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $comments = array();
      while(true){
        $comment = $stmt->fetch(PDO::FETCH_ASSOC);
        if($comment == false){
            break;
        }
        $comments[] = $comment;
      }

    $sql='SELECT * FROM `contents` WHERE `category_code` = "kabuki" ORDER BY   `created` DESC LIMIT 0,3';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $kabuki_contents =array();
    while(true){
      $kabuki = $stmt->fetch(PDO::FETCH_ASSOC);
      if($kabuki== false){
        break;
      }
       $kabuki_contents[] = $kabuki;

    }

    $sql='SELECT * FROM `contents` WHERE `category_code` = "kimono" ORDER BY   `created` DESC LIMIT 0,3';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $kimono_contents =array();
    while(true){
      $kimono = $stmt->fetch(PDO::FETCH_ASSOC);
      if($kimono== false){
        break;
      }
       $kimono_contents[] = $kimono;

    }
    $sql='SELECT * FROM `contents` WHERE `category_code` = "rakugo" ORDER BY   `created` DESC LIMIT 0,3';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $rakugo_contents =array();
    while(true){
      $rakugo = $stmt->fetch(PDO::FETCH_ASSOC);
      if($rakugo== false){
        break;
      }
       $rakugo_contents[] = $rakugo;

    }
    if(!empty($_POST)){
      $sql = 'INSERT INTO `inquiries`( `user_id`, `name`, `email`, `subject`, `message`, `created`) VALUES (?,?,?,?,?,now())';
      $data = array($_SESSION['id'],$_POST['user_id'],$_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);
      $stmt = $dbh->prepare($sql);
      $stmt->execute($data);

      header('Location: index.php');
    }
// echo'<pre>';
// var_dump($kabuki_contents);
// echo '</pre>';
// exit;
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Performing Arts</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/fancybox/fancybox.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="prefetch" href="img/zoom.png">

  <!-- =======================================================
    Template Name: Performing
    Template URL: https://templatemag.com/munter-bootstrap-one-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navigation">

  <!-- Fixed navbar -->
  <div id="navigation" class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#intro" class="smmthscrll"><img src="img/logo.png" height="30"></a></li>
          <li><a href="#about-us" class="smoothscroll">About Me</a></li>
          <li><a href="join/regi_index.php" >Resiter</a></li>
          <li><a href="#portfolio" class="smoothscroll">Photos</a></li>
          <li><a href="#clients" class="smoothscroll">Comments</a></li>
          <li><a href="new_contents.php">My Page</a></li>
          <li><a href="question.php">Inquiries</a></li>
          <li><a href="#contact" class="smoothscroll">Contact</a></li>
          <li><a href="logout.php" >logout</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <!-- === MAIN Background === -->
  <div class="slide story" id="intro" data-slide="1">
    <div class="container">
      <div id="home-row-1" class="row clearfix">
        <div class="col-12">
          <h1 class="font-semibold">Performing Arts</h1>
          <br>
          <br>
        </div>
        <!-- /col-12 -->
      </div>
      <!-- /row -->
      <div id="home-row-2" class="row clearfix">

        <div class="col-12 col-sm-4">
          <a href="kabuki.php" class="navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/kabuki1.png"></div><span>kabuki</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="kimono.php" class="navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/kimono1.png"></div><span>kimono</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="rakugo.php" class="navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/rakugo1.png"></div><span>rakugo</span></a>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /slide1 -->

  <!-- === Slide 2 === -->
  <div class="slide story" id="about-us" data-slide="2">
    <div class="container">
      <div class="row title-row">
        <div class="col-12 font-thin">name: Yamazaki Keiko <span class="font-semibold"></span> <br> hometown: Kochi in Japan
        <br>like:Rakugo,Kabuki,Kimono,Travel,Anime</div>
      </div>
      <!-- /row -->
      <div class="row subtitle-row">
        <div class="col-12 font-thin">Why did I make this service? Because I want people to know Japanese culture more. For example, my high school friend who was from the USA.</div>
      </div>
      <!-- /col12 -->
    </div>
    <!-- /col12 -->
  </div>
  <!-- /slide2 -->

  <!-- === SLide 3 - Portfolio -->
  <div class="slide story" id="portfolio" data-slide="3">
    <div class="row">

      <?php foreach ($kabuki_contents as $kabuki) { ?>
        <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="contents-img/<?php echo $kabuki['contents_img_name']; ?>" alt=""></div>
      <?php } ?>
      
      <?php foreach ($kimono_contents as $kimono) { ?>
        <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="contents-img/<?php echo $kimono['contents_img_name']; ?>" alt=""></div>
      <?php } ?>
      <?php foreach ($rakugo_contents as $rakugo) { ?>
        <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="contents-img/<?php echo $rakugo['contents_img_name']; ?>" alt=""></div>
      <?php } ?>
    <!-- /row -->
  </div>
  <!-- /slide3 -->
</div>
  <!-- === Slide 5 === -->
  <div class="slide story" id="clients" data-slide="5">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="row title-row">
            <div class="col-1 col-sm-12 font-left"><span class="font-semibold">Clients</span> こんな方にお勧め!</div>
          </div>
          <div class="row line-row">
            <div class="col-1 col-sm-12 font-left"></div>
            <div class="hr">&nbsp;</div>
            <div class="row subtitle-row">
              <div class="col-1 col-sm-12 font-left"><br/><br/> 日本の文化に興味ある方にお勧めしたいです。</div>
              <div class="col-sm-1 hidden-sm">&nbsp;</div>
            </div>
            <div class="container">
              <div class="col-sm-1 hidden-sm">&nbsp;</div>
              <div class="col-sm-1 hidden-sm">&nbsp;</div>
            </div>
          </div>
        </div>


        <div class="col-sm-8" style="width:550px;height:550px;overflow:auto;">
          <?php foreach ($comments as $comment): ?>
          <div class="row">
              <div class="col-sm-4" style="text-align: right;">
                <img src="picture_path/<?php echo $comment['img_name']; ?>"
                width="100" height="100"><br>
                <p style="text-align: right;"><strong><?php echo $comment['name']; ?></strong></p>
              </div>
              <div class="col-sm-8" style="text-align: left;">
                <h2><?php echo $comment['comment']; ?></h2>
                <small><?php echo $comment['created']; ?></small>
              </div>
            </div>
            <?php endforeach ?>
        </div>


      </div>
    </div>
  </div>
  <!-- /slide5 -->

  <!-- === Slide 6 / Contact === -->
  <div class="slide story" id="contact" data-slide="6">
    <div class="container">
      <div class="row title-row">
        <div class="col-12 font-light">Leave me a <span class="font-semibold">message</span></div>
      </div>
      <!-- /row -->
      <div class="row line-row">
        <div class="hr">&nbsp;</div>
      </div>
      <!-- /row -->
      <div class="row subtitle-row">
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
        <div class="col-12 col-sm-10 font-light">You can find us literally anywhere, just push a button and we’re there</div>
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->
      <div id="contact-row-4" class="row">
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></p>
          <span class="hover-text font-light ">instagram</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-envelope"></i></a></p>
          <span class="hover-text font-light ">email</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-home"></i></a></p>
          <span class="hover-text font-light ">Japan</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></p>
          <span class="hover-text font-light ">facebook</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-12 col-sm-2 with-hover-text">
          <p><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></p>
          <span class="hover-text font-light ">twitter</span></a>
        </div>
        <!-- /col12 -->
        <div class="col-sm-1 hidden-sm">&nbsp;</div>
      </div>
      <!-- /row -->

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form class="contact-form php-mail-form" role="form" action="" method="POST">
            <div class="form-group">
              <label for="contact-name">Your Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Your Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-message">Your Message</label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="loading"><img src="lib/php-mail-form/loading.gif"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Performing</strong>. All Rights Reserved
      </p>
      <div class="credits">
        Created with Performing Arts by <a href="#">Keiko Yamazaki</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <!-- <script src="lib/php-mail-form/validate.js"></script> -->
  <script src="lib/fancybox/fancybox.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>