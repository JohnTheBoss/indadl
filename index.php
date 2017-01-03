<?php
date_default_timezone_set('Europe/Budapest');
?>

<html lang="hu">
	<head>
		<meta charset="utf-8">
		<title>Indavideó letöltés</title>
		<meta name="author" content="nXu - Zsolt Fekete">
		<meta name="description" content="Ingyenes, egyszerű Indavideó letöltő, akár mobilon is. Videók letöltése egy kattintással mp4 formátumban.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Style -->
		<link rel="stylesheet" href="style.css">
		<!-- Scripts -->
		<script src="jquery-2.1.3.min.js"></script>
		<script src="nxu.js"></script>
	</head>
	<body>
	
	<a id="githubribbon" href="https://github.com/nXu/indadl"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/52760788cde945287fbb584134c4cbc2bc36f904/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png"></a>
		<div id="wrapper" class="top-margin centerize">
			<h1><a href=".">Indavideó letöltés</a></h1>
			<div id="content">
				<div id="result_page">
					<p id="back"><a id="back_link" href="#">Új videó letöltése</a></p>
					<p id="result"><a id="resultlink" href="#">Letöltés</a></p>
				</div>
				<input class="input centerize" type="text" placeholder="Videó link" name="vidurl" id="vidurl" autocomplete="off" />
				<p id="error"></p>
				<button class="centerize" href="#" id="getvideo">Videó letöltése</button>
			</div>
			<p id="footer">
				&copy; 2014-<?=date('Y')?>
				<a href="https://nxu.hu/">nXu</a> -
				<a href="mailto:nxu@nxu.hu">nxu@nxu.hu</a>
			</p>
			<p id="disclaimer">Az oldal semmilyen kapcsolatban nem áll az <a href="http://www.indavideo.hu/" target="_blank">indavideo.hu</a>-val vagy az Inda-Labs Zrt-vel.</p>
			</p>
		</div>

		<div class="donate centerize">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="5F433X2Y8CMB8">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1" style="opacity: 0">
			</form>
		</div>

		<?php
			if (file_exists('analytics.php')) {
				include_once('analytics.php');
			}
		?>
	</body>
</html>
