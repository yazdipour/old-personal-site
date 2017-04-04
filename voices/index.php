<?php include 'contents.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>People Voices</title>
	<meta name="description" content="People Voices">
	<meta name="author" content="Shahriar Yazdipour">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/fonts.css" type="text/css">
	<link rel="stylesheet" href="../css/same.css">
	<link rel="stylesheet" href="css.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../js/fancy/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="../js/fancy/jquery.fancybox.css?v=2.1.5" media="screen"/>
</head>
<body>
	<div class="verticalLine asphalt" style="margin: -8px 0px 30px 0px !important;line-height:36px;">
	<a href="http://shahriar.in"><img src="../images/icons/home.svg" class="svg" style="margin:0px 12px -3px 0px;"></a><strong>People Voices</strong><br>
	</div>
	<div class="mainbox">
		<!-- PART 3 -->
		<div class="verticalLine purple">
			Your Voices
		</div>
		<?php 
		foreach ($arr3 as $key => $v) {
			$votes=5;
			if(isset($json[$v[0]]))$votes+=count($json[$v[0]]);
			echo '<div class="box effect8 fancybox ignorebox" href="#inline'.$key.'" attr-id="'.$v[0].'"><h5>'.$v[0].'</h5><span class="label purple votebtn"><span>'.$votes.'</span><img src="../images/icons/like.svg" class="svg"></span></div>';
			echo '<div id="inline'.$key.'" style="width:400px;display: none;"><h3>'.$v[0].'</h3><p>'.$v[1].'</p></div>';
		}
		?>
		<div style="width:100%;text-align:center;"><button class="verticalLine btn purple addbtn">+</button></div>
		
		<!-- PART 2 -->
		<div class="verticalLine darkblue">
			Working on
		</div>
		<?php 
		foreach ($arr2 as $key => $v) {
			echo '<div class="box effect8 ignorebox" attr-id="'.$v[2].'"><h5>'.$v[0].'</h5>';
			echo '<span class="label darkblue"><img src="../images/icons/'.$v[1].'.svg" class="svg"></span>';
			echo '<button class="verticalLine btn yellow donatebtn">DONATE</button>';
			echo "</div>";
		}
		?>
		<!-- PART 1 -->
		<div class="verticalLine">
			Done
		</div>
		<?php 
		foreach ($arr1 as $key => $v) {
			echo '<div class="box effect8" attr-id="'.$v['id'].'"><h5>'.$v['name'].'</h5><a href="'.$v['link'].'" target="_blank"><span class="label blue"><img src="../images/icons/'.$v['platform'].'.svg" class="svg"></span></a></div>';
		}
		?>
	</div>
	<script type="text/javascript" src="js.js"></script>
</body>
</html>