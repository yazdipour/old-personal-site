<!DOCTYPE html>
<?php include 'contents.php';$arr=array_reverse($arr);?>
<html>
<head>
	<title>MY PROJECTS</title>
	<meta charset="utf-8">
	<meta name="description" content="People Voices">
	<meta name="author" content="Shahriar Yazdipour">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/fonts.css" type="text/css">
	<link rel="stylesheet" href="../css/same.css" type="text/css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
	<div class="verticalLine asphalt" style="margin: -8px 0px 30px 0px !important;line-height:36px;">
	<a href="http://shahriar.in"><img src="../images/icons/home.svg" class="svg" style="margin:0px 12px -3px 0px;">
	</a><strong>MY PROJECTS</strong><br></div>
	<div class="mainbox">
		<?php 
		foreach ($arr as $key => $v) {
			echo '<div class="box effect8" attr-id="'.$v['id'].'"><h5>'.$v['name'].'</h5><a href="'.$v['link'].'" target="_blank"><span class="label blue"><img src="../images/icons/'.$v['platform'].'.svg" class="svg"></span></a></div>';
		}
		?>
	</div>
	<!-- Add fancyBox main JS and CSS files -->
	<!-- <script type="text/javascript" src="../js/fancy/jquery.fancybox.js?v=2.1.5"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="../js/fancy/jquery.fancybox.css?v=2.1.5" media="screen"/> -->

	<script type="text/javascript" src="js.js"></script>
</body>
</html>