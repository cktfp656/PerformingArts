<?php 
session_start();

require('db_connect.php');
echo'<br>';

if(!isset($_SESSION['id'])){
  header('Location: login.php');
  exit();
}

 ?>







<!DOCTYPE html>
<html lang="ja">
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
          <li style="padding-top: 10px; padding-right: 10px;"><img src="img/kawauso1.jpg" alt="" style=" width: 40px;height:40px"></li>
          <li class="active"><a href="#intro" class="smoothscroll">Performing Arts</a></li>
          <li><a href="#about-us" class="smoothscroll">About Me</a></li>
          <li><a href="join/regi_index.php" >Resiter</a></li>
          <li><a href="#portfolio" class="smoothscroll">Portfolio</a></li>
          <li><a href="#clients" class="smoothscroll">Clients</a></li>
          <li><a href="new_contents.php">My Page</a></li>
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
          <h4 class="font-thin">日本の伝統芸能</h4>
          <br>
          <br>
        </div>
        <!-- /col-12 -->
      </div>
      <!-- /row -->
      <div id="home-row-2" class="row clearfix">

        <div class="col-12 col-sm-4">
          <a href="kabuki.php" class="navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/kawauso1.jpg"></div><span>kabuki</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="kimono.php" class="navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/kawauso1.jpg"></div><span>kimono</span></a>
        </div>

        <div class="col-12 col-sm-4">
          <a href="rakugo.php" class="navigation-slide-a"><div class="home-hover navigation-slide"><img src="img/kawauso1.jpg"></div><span>rakugo</span></a>
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
        <br>like:Rakugo,Kabuki,kimono,travel,Anime</div>
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
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/kabuki1.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/kabuki2.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/kabuki3.png" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/kabuki4.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/yukata1.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/kimono1.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/kimono2.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/kimono3.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/rakugo1.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/rakugo2.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/rakugo3.jpg" alt=""></div>
      <div class="col-12 col-sm-6 col-lg-2"><img class="thumb" src="img/portfolio/rakugo4.jpg" alt=""></div>
    </div>
    <!-- /row -->
  </div>
  <!-- /slide3 -->

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
          <div class="row">
            <div class="col-sm-4" style="text-align: right;">
              <img src="http://c85c7a.medialib.glogster.com/taniaarca/media/71/71c8671f98762a43f6f50a282e20f0b82bdb1f8c/blog-images-1349202732-fondo-steve-jobs-ipad.jpg"
              width="100" height="100"><br>
              <p style="text-align: right;"><strong>Seedくん</strong></p>
            </div>
            <div class="col-sm-8" style="text-align: left;">
              <h2>着物いいね。</h2>
              <small>2016-01-28 18:04</small>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4" style="text-align: right;">
              <img src="http://c85c7a.medialib.glogster.com/taniaarca/media/71/71c8671f98762a43f6f50a282e20f0b82bdb1f8c/blog-images-1349202732-fondo-steve-jobs-ipad.jpg"
              width="100" height="100"><br>
              <p style="text-align: right;"><strong>Seedくん</strong></p>
            </div>
            <div class="col-sm-8" style="text-align: left;">
              <h2>着物いいね。</h2>
              <small>2016-01-28 18:04</small>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4" style="text-align: right;">
              <img src="http://c85c7a.medialib.glogster.com/taniaarca/media/71/71c8671f98762a43f6f50a282e20f0b82bdb1f8c/blog-images-1349202732-fondo-steve-jobs-ipad.jpg"
              width="100" height="100"><br>
              <p style="text-align: right;"><strong>Seedくん</strong></p>
            </div>
            <div class="col-sm-8" style="text-align: left;">
              <h2>着物いいね。</h2>
              <small>2016-01-28 18:04</small>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4" style="text-align: right;">
              <img src="http://c85c7a.medialib.glogster.com/taniaarca/media/71/71c8671f98762a43f6f50a282e20f0b82bdb1f8c/blog-images-1349202732-fondo-steve-jobs-ipad.jpg"
              width="100" height="100"><br>
              <p style="text-align: right;"><strong>Seedくん</strong></p>
            </div>
            <div class="col-sm-8" style="text-align: left;">
              <h2>着物いいね。</h2>
              <small>2016-01-28 18:04</small>
            </div>
          </div>
            </div>
          </div>
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
          <p><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></p>
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
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
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
        Created with Performing Arts by <a href="https://templatemag.com/">Keiko Yamazaki</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/fancybox/fancybox.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
