<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shahriar</title>
  <meta name="description" content="Shahriar Yazdipour Personal web page" />
  <meta name="keywords" content="Shahriar Yazdipour,Shahriar,Yazdipour,Page" />
  <meta name="author" content="shahriar.in" />
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style-responsive.css" />
  <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
  <div class="preloader" id="preloader">
    <div class="item">
      <img src="img/loading.gif">
    </div>
  </div>
  <div class="container">
    <!-- section start-page -->
    <section class="start-page parallax-background" id="home">
      <div class="opacity"></div>
      <!-- Opacity color -->
      <div class="content">
        <div class="text">
          <div class="logo"><img src="img/logo.png"></div>
          <h1>I'm Shahriar Yazdipour</h1>
          <hr/>
          <p>Welcome to my personal webpage</p>
          <a href="#about-us">
            <div class="read-more">Read more</div>
          </a>
        </div>
        <div class="arrow-down"></div>
      </div>
    </section>
    <!-- section menu mobile -->
    <section class="menu-media">
      <div class="menu-content">
        <div class="logo">Menu</div>
        <div class="icon">
          <a href="#"><img src="img/icons/menu-media.png" /></a>
        </div>
      </div>
    </section>
    <ul class="menu-click">
      <a href="#home">
        <li href="#home">HOME</li>
      </a>
      <a href="#about-us">
        <li href="#about-us">ABOUT US</li>
      </a>
      <a href="#blog">
        <li href="#blog">BLOG</li>
      </a>
      <a href="#contact">
        <li href="#contact">CONTACT</li>
      </a>
    </ul>
    <!-- section menu -->
    <section class="menu">
      <div class="menu-content">
        <div class="logo">Shahriar</div>
        <ul id="menu">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about-us">ABOUT US</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </section>
    <!--about-->
    <section class="about-us" id="about-us">
      <div class="content">
        <h1>WHAT I DO</h1>
        <!--<h1>ABOUT ME</h1>-->
        <hr/>
        <!--<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>-->
        <div class="column-one">
          <div class="circle-one"></div>
          <h2>Desktop Programming</h2>
          <p>UWP, .NET, Java</p>
        </div>
        <div class="column-two">
          <div class="circle-two"></div>
          <h2>Mobile Programming</h2>
          <p>UWP, ANDROID, iOS</p>
        </div>
        <div class="column-three">
          <div class="circle-three"></div>
          <h2>Miscellaneous</h2>
          <p>Data Mining, PHP, WebDesign, TeX, WebSecurity</p>
        </div>
      </div>
    </section>
    <div class="clear"></div>
    <!--Blog-->
    <section class="blog" id="blog">
      <div class="blog-margin">
        <h1>BLOG</h1>
        <hr/>
        <?php include 'http://shahriar.in/blog/'; ?>
      </div>
    </section>
    <div class="clear"></div>
    <!--Follow-->
    <section class="partners parallax-background-partners" id="partners">
      <div class="opacity"></div>
      <div class="content">
        <!--<h2>Follow me on</h2>-->
        <div class="logo">
          <a href="#"><img src="img/icons/Mailbox Closed Flag Up_100px.png"></a>          
          <a href="#"><img src="img/icons/LinkedIn_104px.png"></a>
          <a href="#"><img src="img/icons/Twitter_96px.png"></a>
          <a href="#"><img src="img/icons/GitHub_96px.png"></a>
          <a href="#"><img src="img/icons/Gitlab_100px.png"></a>
        </div>
      </div>
    </section>
    <!--Contact-->
    <section class="contact" id="contact">
      <h1>Contact</h1>
      <hr/>
      <div class="content">
        <div class="form">
          <form method="post" action="mail.php" name="kontakt">
            <div class="column">
              YOUR NAME<br/><br/>
              <input name="name" id="name" value="" />
            </div>
            <div class="column-2">
              YOUR E-MAIL<br/><br/>
              <input name="email" id="email" value="" />
            </div>
            <div class="column-3">
              MESSAGE<br/><br/>
              <textarea id="message" name="message"></textarea>
            </div>
            <div class="button">
              <span><input class="submit" id="submit" name="submit" type="submit" value="SEND"></span>
            </div>
          </form>
        </div>
        <div class="contact-text">
          To contact us please use the contact form visible<br/><br/> When sending files, please use<br/> the following e-mail<br/><br/>
          e-mail: <strong>info@shahriar.in</strong>
        </div>
      </div>
    </section>
    <!--Footer-->
    <section class="footer">
      <div class="logo"><img src="img/logo-footer.png"></div>
      <div class="menu-footer">
        <a href="#home">Home</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
        <a href="http://github.com/yazdipour/shahriar">Contribute to this project on GitHub</a>
      </div>
    </section>
  </div>

  <!-- Scripts -->
  <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script>
    $(function () {
      var $container = $('.grid');
      $container.imagesLoaded(function () {
        $container.masonry({
          itemSelector: 'li'
        });
      });
    });
  </script>
  <script src="js/jquery.parallax.js"></script>
  <script src="js/script.js"></script>
</body>
</html>