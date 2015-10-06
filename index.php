<?php
	// Get visitors real IP when using Cloudflare
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
		$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	}
	$userIP = $_SERVER['REMOTE_ADDR'];
	$format = $_GET['format'];

	/* If the "format" query parameter is used, simply return the IP
	   and forget about rendering the rest of the page */
	if ($format == "text") {
		header('Content-Type: text/plain; charset=utf8');
		echo $userIP;
		die;
	}
	if ($format == "json") {
		header('Content-Type: application/json; charset=utf8');
		echo json_encode(array('ip' => $userIP));
		die;
	}
	if ($format == "jsonp") {
		header('Content-Type: text/javascript; charset=utf8');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Max-Age: 3628800');
		header('Access-Control-Allow-Methods: GET');
		$callback = $_GET['callback'];
		echo $callback . '(' . json_encode(array('ip' => $userIP)) . ');';
		die;
	}
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="utf-8">
	<title>IPv6 Test | Trippnology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.trippnology.net/css/bootstrap-3.2.0.min.css">
	<style>
		body { text-align: center; }
		img[alt="IPv6 logo"] { margin-bottom: 10px; }
		.help { text-align: left; }
		.help .lead { text-align: center; }
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
				<div class="col-sm-12">
					<p>If you're reading this, you can access 'IPv6 only' sites as this site does not have an A record, only an AAAA record.</p>
					<h2>Your address is:</h2>
					<p class="ip"><?=$userIP?></p>
					<img src="img/ipv6-logo.png" alt="IPv6 logo">
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-6 help">
					<p class="lead">Help</p>
					<p>You can add a <code>format</code> query parameter to get your IP in various formats, like so:</p>
					<ol>
						<li>Text: <code>http://ipv6.trippnology.com/?format=text</code></li>
						<li>JSON: <code>http://ipv6.trippnology.com/?format=json</code></li>
						<li>JSONP: <code>http://ipv6.trippnology.com/?format=jsonp&amp;callback=yourcallback</code></li>
					</ol>
				</div>
			</div>
		</main>

		<footer role="contentinfo">
			<div class="row">
				<p>Built with <a href="http://github.com/Trippnology/Matchbox">Matchbox</a> from <a href="http://trippnology.com/">Trippnology</a></p>
				<img src="img/ipv6-80x15.png" alt="IPv6 ready">
			</div>
		</footer>
	</div>
</body>
</html>
