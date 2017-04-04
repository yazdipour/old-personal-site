<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Shahriar Page</title>
  <meta name="description" content="Profile">
  <meta name="author" content="Shahriar Yazdipour">
  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/fonts.css">
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/icons/resume.png">
</head>
<style type="text/css">
  .zbtn>button{
    width: 180px !important;
    font-size: 12px !important;
  }
  .zbtn > img {
    margin: 0px 0px -22px -46px;
    width: 52px;
    height: 52px;
    border: #fff solid 2px;
    border-radius: 70px;
  }

  .zbtn{
    margin:8px 0px;
  }
  .zcenter {
   float: none !important;
   margin: 0 auto !important;
 }
 .ztxt-center{
   text-align: center !important;
 }
 body {
  background: url("images/background.jpg") #252525  center center repeat;
}
div>a{
  text-decoration: none !important; 
}

#spiders {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  display: block;
}
.zcenter>h6,.zcenter>h5,.zcenter>h4{
  color: white !important;
}
.button-off{
  background: #aaa;

}
.sprite {
  background-image: url(images/spritesheet.png);
  background-repeat: no-repeat;
}
.sprite-blog {
  width: 52px;
  height: 52px;
  background-position: -2px -2px;
}

.sprite-github {
  width: 52px;
  height: 52px;
  background-position: -58px -2px;
}

.sprite-kick {
  width: 52px;
  height: 52px;
  background-position: -114px -2px;
}

.sprite-lkin {
  width: 52px;
  height: 52px;
  background-position: -170px -2px;
}

.sprite-mail {
  width: 52px;
  height: 52px;
  background-position: -226px -2px;
}

.sprite-proj {
  width: 52px;
  height: 52px;
  background-position: -282px -2px;
}

.sprite-resume {
  width: 52px;
  height: 52px;
  background-position: -338px -2px;
}

.sprite-tw {
  width: 52px;
  height: 52px;
  background-position: -394px -2px;
}

#blackPanel{
  background-color: rgba(0, 0, 0, 0.33);
  width: 70%;
  border: 20px rgba(0, 0, 0, 0.01) solid;
  margin-top: 20px !important;
  border-radius: 3px;
  -webkit-box-shadow: 0 10px 6px -6px #777;
  -moz-box-shadow: 0 10px 6px -6px #777;
  box-shadow: 0 10px 6px -6px #777;
}
@media (max-width:720px){
  .hidden-xs{display:none!important;}
  #blackPanel{
    width: 100% !important;
    margin: 0px !important;
    border: none !important;
    padding-top: 20px;
    margin-left: 0px !important;
  }
}
.button-primary{
  background-color:#34495e !important;
  border-color:#34495e !important;
}
.newBtn{
  background-color:#33C3F0 !important;
  border-color:#33C3F0 !important;
}
</style>
<body>

  <canvas id="spiders" class="hidden-xs"></canvas>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="zcenter ztxt-center" id="blackPanel">
    <h5 style="line-height: 0px !important;">Hi!</h5>
    <h5>I'm Shahriar Yazdipour</h5>
    <h6 style="line-height: 0px !important;">And</h6>
    <h4>Welcome</h4>
    <h6 style="margin-bottom: 5% !important;line-height: 0px !important;">to my personal page</h6>
    <div style="padding: 16px;">
      <a class="zbtn" href="./projects">
       <button class="button-primary"> PROJECTS</button>
       <img class="sprite sprite-proj">
     </a>
     <a class="zbtn" href="./voices">
       <button class="button-primary newBtn" style="text-align:left;">People Voices</button>
       <img class="sprite sprite-kick">
     </a>
     <br>
     <a class="zbtn" href="http://blog.shahriar.in/" target="_blank">
       <button class="button-primary"> BLOG </button>
       <img class="sprite sprite-blog">
     </a>
     <a class="zbtn" href="./rdct/social/git.php" target="_blank">
      <button class="button-primary"> GITHUB </button>
      <img class="sprite sprite-github">
    </a>
    <br>
    <a class="zbtn" href="./rdct/social/linkedin.php" target="_blank">
      <button class="button-primary"> LINKEDIN </button>
      <img class="sprite sprite-lkin">
    </a>
    <a class="zbtn" href="./rdct/social/twitter.php" target="_blank">
      <button class="button-primary"> TWITTER </button>
      <img class="sprite sprite-tw">
    </a>
    <br>
    <a class="zbtn" href="./extra_files/resume" target="_blank">
      <button class="button-primary"> RESUME </button>
      <img class="sprite sprite-resume">
    </a>
    <a class="zbtn" href="mailto:shahriar.yazdipour@outlook.com">
      <button class="button-primary" > E-MAIL </button>
      <img class="sprite sprite-mail">
    </a>
  </div>
</div>
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery.min.js"></script>
  <script src="js/spider.min.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75584938-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>
