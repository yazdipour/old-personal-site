<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Shahriar Page</title>
  <meta name="description" content="Profile">
  <meta name="author" content="Shahriar Yazdipour">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    .button-primary{
     background: #E84C3D !important;
     border:none !important;
   }
   #avatar{
    border: #fff solid 2px;
    border-radius: 300px;
    height: 200px;width: 200px;
  }
  .zbtn a{
    width: 52px;
    height: 52px;
  }
  .zcenter {
   float: none !important;
   margin: 0 auto !important;
 }
 .ztxt-center{
   text-align: center !important;
 }
 div>a{
  text-decoration: none !important; 
}
.zcenter>h6,.zcenter>h5,.zcenter>h4{
  color: white !important;
}
.sprite {
  background-image: url(../images/spritesheet.png);
  background-repeat: no-repeat;
}
.sprite-tw,
.sprite-lkin ,
.sprite-github
{
  width: 52px;
  height: 52px;
}

.sprite-github {
  background-position: -58px -2px;
}
.sprite-lkin {
  background-position: -170px -2px;
}
.sprite-tw {
  background-position: -394px -2px;
}
@media (max-width:720px){
  .hidden-xs{display:none!important;}
}
.newBtn{
  background-color:#33C3F0 !important;
  border-color:#33C3F0 !important;
}
/*-----add after removing skeleton----*/
.button.button-primary, button.button-primary, input[type="submit"].button-primary, input[type="reset"].button-primary, input[type="button"].button-primary {
  color: #FFF;
  background-color: #33C3F0;
  border-color: #33C3F0;
  margin-bottom:6px;
}
.button, button, input[type="submit"], input[type="reset"], input[type="button"] {
  display: inline-block;
  height: 38px;
  padding: 0 30px;
  color: #555;
  text-align: center;
  font-size: 11px;
  font-weight: 600;
  line-height: 38px;
  letter-spacing: .1rem;
  text-transform: uppercase;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border-radius: 4px;
  border: 1px solid #bbb;
  cursor: pointer;
  box-sizing: border-box;
}
</style>
</head>
<body>
  <div class="ztxt-center zcenter" style="background: url('images/bg3.jpg') #222 center center repeat;     padding-bottom: 18px;    padding-top: 18px; background-size: cover !important;">
    <img id="avatar" src="images/avatar.jpg">
    <h5>Hi!  I'm Shahriar Yazdipour</h5>  
    <h6 style="font-size: 14px">And welcome to my personal web page</h6>    
    <a class="zbtn button button-primary" href="./projects">my PROJECTS</a>
    <br>
    <a class="zbtn button button-primary" href="/about" target="_blank">About me</a>
    <!-- ./extra_files/resume -->
    <br>
    <a class="zbtn button button-primary" href="mailto:shahriar.yazdipour@outlook.com" >E-Mail me</a>

    <div class="zcenter ztxt-center">
      <a class="zbtn" href="./rdct/social/twitter.php" target="_blank">
        <img class="sprite sprite-tw">
      </a>
      <a class="zbtn" href="./rdct/social/linkedin.php" target="_blank">
        <img class="sprite sprite-lkin">
      </a>
      <a class="zbtn" href="./rdct/social/git.php" target="_blank">
        <img class="sprite sprite-github">
      </a>
    </div>
  </div>
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery.min.js"></script>
  <?php include 'blog/index.php'; ?>
</body>
</html>
