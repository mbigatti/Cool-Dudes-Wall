<?php
	ini_set('display_errors', 1);
	require_once('TwitterAPIExchange.php');
	include 'function.resize.php';

	$settings = parse_ini_file('configuration.ini');
	$page_title = $settings['page_title'];
	$screen_names = $settings['screen_names'];
	$show_banner = $settings['show_banner'];
	
	if (!empty($_GET['t'])) {
		$page_title = $_GET['t'];
	}
	if (!empty($_GET['n'])) {
		$screen_names = $_GET['n'];
	}
	if (!empty($_GET['b'])) {
		$show_banner = ($_GET['b'] === 'true');
	}
	
	//
	// check if a new call to Twitter API is required
	//
	$perform_call = true;
	$cache_file_name = './cache/lookup-'.md5($screen_names).'.json';
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
		$getfield = '?screen_name='.$screen_names;
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
	
	function __isset($key)
	{
		return isset($this->vars[$key]);
	}		
	
	function render_card($show_banner, $record) {
		$settings = array('w'=>300, 'h'=>125);
	
		$url = 'https://twitter.com/'.$record->screen_name;
		if (isset($record->profile_banner_url)) {
			$image_url = $record->profile_banner_url;
		} else {
			$image_url = null;
		}
		
		echo '<div class="card">';
			if ($show_banner) {
				echo '<div class="image" style="background-color: '.$record->profile_link_color.'">';
				if ($image_url != null) {
					echo '<img src="' . resize($image_url, $settings) . '"/>';
				}
				echo '</div>';
			}
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
				if ($record->followers_count == 0) {
					echo 'No followers';
				} else {
					echo 'Followers: ' . number_format($record->followers_count, 0, ',', '.');
				}
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
?>
<html>
<head>
	<meta name="keywords" content="" />
	<meta name="description" content="A page full of cool dudes" />
	<meta name="author" content="Massimiliano Bigatti" />
	<meta name="copyright" content="&copy; Copyright 2014 Massimiliano Bigatti" />
	<meta name="viewport" content="width=device-width">
	
	<title><?php echo $page_title; ?></title>

	<link href="http://fonts.googleapis.com/css?family=Montserrat:400|Open+Sans:300,400,600" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>

	<link href="../css/animate.min.css" rel="stylesheet" type="text/css">
	<link href="../css/normalize.css" rel="stylesheet" type="text/css">
	<link href="cooldudes.css" rel="stylesheet" type="text/css">
	
	<link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="/images/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-touch-icon-152x152.png" />
</head>
<body>
<h1 class="animated bounceInDown"><?php echo $page_title; ?></h1>
<h2>Data from Twitter - dudes sorted by followers count</h2>
<div class="wrapper">
	<div class="container">
<?php
	//
	// render cards
	//
	$rendered_screen_names = array();
	foreach ($data as $record) {
		render_card($show_banner, $record);
		$rendered_screen_names[] = strtolower($record->screen_name);
	}
	foreach(preg_split("/[,]+/", $screen_names) as $screen_name) {
		if (!in_array(strtolower($screen_name), $rendered_screen_names)) {
			$record = new stdClass(); 
			$record->screen_name = $screen_name;
			$record->profile_link_color = '#eeeeee';
			$record->profile_image_url = 'http://cl.ly/image/0z3Z2E1p3k20/Empty%20Avatar.png';
			$record->name = $screen_name;
			$record->description = '';
			$record->followers_count = 0;
			render_card($show_banner, $record);
		}
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