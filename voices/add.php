<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link rel="stylesheet" type="text/css" href="../css/skeleton.css">
</head>
<body>
	<?php if(!isset($_POST['name'])){?>
		<form method="post">
			<div class="row">
				<div class="six columns">
					<label for="name">Your name</label>
					<input class="u-full-width" type="text" placeholder="Shahriar" id="name" name="name">
				</div>
				<div class="six columns">
					<label for="mail">Your email</label>
					<input class="u-full-width" type="email" placeholder="test@mailbox.com" id="mail" name="mail">
				</div>
			</div>
			<label for="msg">Tell me your idea!</label>
			<textarea class="u-full-width" placeholder="Hi Shahriar …" id="msg" name="msg"></textarea>
			<input class="button-primary" type="submit" value="Send">
			<label>* Or you can contact me with <a href="mailto:code@shahriar.in">code@shahriar.in</a></label>
		</form>
		<?php }
		else{
			echo '<label style="text-align:center;">I\'ll look at your idea/msg as soon as possible<br>Thanks for your participation</label>';
			$msg = htmlentities(json_encode($_POST));
			$msg = wordwrap($msg,70);
			$headers = "From: " . $_POST['mail'] . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			mail("code@shahriar.in","[Idea]",'<html><body>'.$msg.'</html></body>',$headers);
		} ?>
	</body>
	</html>