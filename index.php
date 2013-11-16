<?php $addr = $_SERVER['REMOTE_ADDR']; ?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="utf-8">
	<title>IPv6 Test | Trippnology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
	<style>
		body { text-align: center; }
		img[alt="IPv6 logo"] { margin-bottom: 10px; }
	</style>
</head>

<body>
	<div class="container">
		<header role="banner">
			<div class="row">
				<h1>IPv6 Test</h1>
			</div>
		</header>

		<main role="main">
			<div class="row">
				<article>
					<p>If you're reading this, you can access 'IPv6 only' sites as this site does not have an A record, only an AAAA record.</p>
					<h2>Your address is:</h2>
					<p class="ip"><?=$addr?></p>
					<img src="img/ipv6-logo.png" alt="IPv6 logo">
				</article>
			</div>
		</main>

		<footer role="contentinfo">
			<div class="row">
				<p>Built with <a href="http://github.com/Trippnology/Matchbox">Matchbox</a> from <a href="http://trippnology.com/">Trippnology</a></p>
				<img src="img/ipv6-80-15.png" alt="IPv6 ready">
			</div>
		</footer>
	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>
	<script src="js/consolelog.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
