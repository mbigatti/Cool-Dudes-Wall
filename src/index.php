<html>
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="A page full of cool dudes" />
	<meta name="author" content="Massimiliano Bigatti" />
	<meta name="copyright" content="&copy; Copyright 2014 Massimiliano Bigatti" />
	<meta name="viewport" content="width=device-width">
	
	<title>Cool Dudes Wall</title>

	<link href="http://fonts.googleapis.com/css?family=Montserrat:400|Open+Sans:300,400,600" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>

	<link href="../css/animate.min.css" rel="stylesheet" type="text/css">
	<link href="../css/normalize.css" rel="stylesheet" type="text/css">
	
	<link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="/images/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png" />

	<style>
		html {
			font-family: "Open sans", sans-serif;
		}
		
		h1 {
			font-family: "Abril Fatface", sans-serif;
			font-size: 72px;
			line-height: 1em;
			text-align: center;
			color: #607d8b;
			margin: 60px 0 0 0;
			padding: 0;
		}
		
		h2 {
			font-family: "Montserrat", sans-serif;
			font-weight: normal;
			font-size: 18px;
			text-align: center;			
			color: #90A4AE;
			margin: 30px 20px 60px 20px;
			padding: 0;
		}
		
		body {
			background-color: #f0f0f0;
		}
		
		a, a:visited {
			color: #607d8b;
			text-decoration: none;
		}
		
		a:hover {
			color: #90A4AE;
			
			-o-transition: color 250ms ease-in-out;
			-ms-transition: color 250ms ease-in-out;
			-moz-transition: color 250ms ease-in-out;
			-webkit-transition: color 250ms ease-in-out;
			transition: color 250ms ease-in-out;
		}
		
		.wrapper {
			text-align: center;
		}
		
		.container {
			margin: 0 auto;
		}
		
		.card {
			display: inline-block;
			vertical-align: top;
			
			width: 300px;
			margin: 20px;
			
			border: 1px solid #bbbbbb;
			background-color: white;
			
			-moz-box-shadow:    0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			box-shadow: 		0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;			
		}
		
		.image {
			width: 300px;
			height: 125px;
		}
		
		.contents {
			margin-top: -70px;
			padding: 20px;
		}
		
		.avatar {
			display: block;
			text-align: center;
			padding: 10px 10px 10px 10px;
			margin-bottom: 10px;
		}
		
		.avatar img {
			-moz-border-radius: 50%; 
			-webkit-border-radius: 50%; 
			border-radius: 50%;	
			
			border: 2px solid #607d8b;		
			
			-webkit-transform: scale(0.95,0.95);
			-webkit-transition-timing-function: ease-out;
			-webkit-transition-duration: 250ms;

			-moz-transform: scale(0.95,0.95);
			-moz-transition-timing-function: ease-out;
			-moz-transition-duration: 250ms;	

			-o-transform: scale(0.95,0.95);
			-o-transition-timing-function: ease-out;
			-o-transition-duration: 250ms;	

			-ms-transform: scale(0.95,0.95);
			-ms-transition-timing-function: ease-out;
			-ms-transition-duration: 250ms;	

			transform: scale(0.95,0.95);
			transition-timing-function: ease-out;
			transition-duration: 250ms;				
		}
		
		.avatar img:hover {
			border-color: #90A4AE;
			
			-webkit-transform: scale(1,1) rotate(5deg);
			-webkit-transition-timing-function: ease-out;
			-webkit-transition-duration: 250ms;
	
			-moz-transform: scale(1,1) rotate(5deg);
			-moz-transition-timing-function: ease-out;
			-moz-transition-duration: 250ms;
	
			-o-transform: scale(1,1) rotate(5deg);
			-o-transition-timing-function: ease-out;
			-o-transition-duration: 250ms;
	
			-ms-transform: scale(1,1) rotate(5deg);
			-ms-transition-timing-function: ease-out;
			-ms-transition-duration: 250ms;
	
			transform: scale(1,1) rotate(5deg);
			transition-timing-function: ease-out;
			transition-duration: 250ms;
		}
		
		.name {
			font-size: 22px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 10px;
		}
		
		.description {
			font-size: 16px;
			color: #666666;
			text-align: center;
			
			line-height: 1.2em;
			margin-bottom: 20px;
			
			padding-left: 20px;
			padding-right: 20px;
		}
		
		.followers {
			font-family: "Montserrat", sans-serif;
			font-size: 12px;
			text-transform: uppercase;
			color: #999999;
			text-align: center;
			margin-bottom: 15px;
		}
		
		.footer {
			font-size: 14px;
			color: #999999;
			margin: 40px 0;
			padding: 0 20px;
			text-align: center;
		}
	</style>
</head>
<body>
<h1 class="animated bounceInDown">Cool Dudes Wall</h1>
<h2>Data from Twitter - dudes sorted by followers count</h2>
<div class="wrapper">
	<div class="container">
<?php
	ini_set('display_errors', 1);
	require_once('TwitterAPIExchange.php');
	include 'function.resize.php';

	$settings = parse_ini_file('configuration.ini');

	//
	// check if a new call to Twitter API is required
	//
	$perform_call = true;
	$cache_file_name = './cache/lookup-cache.json';
	if (file_exists($cache_file_name)) {	
		$stats = stat($cache_file_name);
		$elapsed = time() - $stats['mtime'];
		
		if ($elapsed < 60 * 60) {
			$perform_call = false;
		}
	}
	
	if ($perform_call) {
		//
		// obtains dudes info
		//	
		$url = 'https://api.twitter.com/1.1/users/lookup.json';
		$getfield = '?screen_name='.$settings['screen_names'];
		$requestMethod = 'GET';
		$twitter = new TwitterAPIExchange($settings);
		$original_data = $twitter->setGetfield($getfield)
								 ->buildOauth($url, $requestMethod)
								 ->performRequest();

		//
		// write cache file
		//								 
		$fileHandle = fopen($cache_file_name, 'w') OR die ("Can't write cache file\n");
		fwrite ($fileHandle, $original_data);
		
	} else {
		//
		// read cache file
		//
		$fileHandle = fopen($cache_file_name, 'r') OR die ("Can't read cache file\n");
		$original_data = fread($fileHandle, filesize($cache_file_name));
	}
	fclose ($fileHandle);
	
	$data = json_decode($original_data);
	
	//
	// sort cards by follower count
	//
	function cmp($a, $b) {
		return $b->followers_count - $a->followers_count;
	}
	
	uasort($data, 'cmp');
	
	//
	// validate path structure for cache dirs
	//
	$dirs = array('cache', 'cache/remote');
	foreach($dirs as $dir) {
		$end_dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir;
		if(!is_dir($end_dir)) {
			echo "<p><em>Hint: If this page looks broken, you probably need to 'mkdir -m 777 -p $end_dir</em></p>";
		}
	}
	
	date_default_timezone_set("Europe/Amsterdam");
	$settings = array('w'=>300, 'h'=>125);
	
	function __isset($key)
	{
		return isset($this->vars[$key]);
	}	
	
	//
	// render cards
	//
	foreach ($data as $record) {
		$url = $record->entities->url->urls[0]->expanded_url;
		$url = 'https://twitter.com/'.$record->screen_name;
		//$image_url = isset($record->profile_banner_url) ? $record->profile_banner_url : $record->profile_background_image_url;
		if (isset($record->profile_banner_url)) {
			$image_url = $record->profile_banner_url;
		} else {
			$image_url = null;
		}
		
		echo '<div class="card">';
			echo '<div class="image" style="background-color: '.$record->profile_link_color.'">';
			if ($image_url != null) {
				echo '<img src="' . resize($image_url, $settings) . '"/>';
			}
			echo '</div>';
			echo '<div class="contents">';
				echo '<a class="avatar" href="' . $url . '" target="_blank">';
					echo '<img src="' . str_replace('normal', 'bigger', $record->profile_image_url) . '"/>';
				echo '</a>';
				echo '<div class="name">';
				echo '<a href="' . $url . '" target="_blank">';
				echo $record->name;
				echo '</a>';
				echo '</div>';
				echo '<div class="description">';
				echo $record->description;
				echo '</div>';
				echo '<div class="followers">';
				echo 'Followers: ' . number_format($record->followers_count, 0, ',', '.');
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
?>
	</div>
</div>
<div class="footer">Designed &amp; Handcrafted in Italy by <a href="https://twitter.com/mbigatti">@mbigatti</a></div>
<?php
	if ($perform_call) {
		echo '<!-- performed API call -->';
	}
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34001024-1', 'bigatti.it');
  ga('send', 'pageview');
</script>
</body>
</html>