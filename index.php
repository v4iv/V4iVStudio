<?php
	//Navigation
	$nav = array('index'=>"Home",
			   'projects'=>"Projects",
			   'team'=>"Team",
			   'contact'=>"Contact");
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	else{
		$page = 'index';
	}

	//Exception Handling
	if(!in_array($page, array_keys($nav))){
		header('HTTP/1.0 404 Error Page Not Found');
		$page = 'error';
	}

	elseif($page == 'contact') {
		if(isset($_COOKIE['has_submitted'])) {
			$page = 'thanks';
		}
		else {
			if(isset($_POST['Name'])) {
				$page = 'thanks';
				// save our cookie
				$expiration = time() + (2592000 * 30); // it will last for 30 days
				setcookie("name", $_POST['Name'], $expiration, "/");
				setcookie("has_submitted", true, $expiration, "/");
			}
		}
	}



?>

<!doctype html>
<html lang="en">
		<head>

			<meta charset="utf-8"/>
			<title>V4iV Studio - <?php foreach($nav as $key=>$value){if($key==$page){ echo $value; }} ?></title>
			<link rel="stylesheet" type="text/css" href="./css/main.css"/>
			<link rel="shortcut icon" href="favicon.ico">
			<meta name="author" content="Vaibhav Sharma">

		</head>

<body>
	<div class="wrapper">

		<!--Header-->
		<header class="top-header">
			<h1>V4iV Studio</h1>
		</header>

		<!--Navigation Bar-->
		<nav class="nav">
			<ul>
			<?php foreach($nav as $key=>$value): ?>
				<li><a href="./?page=<?php echo $key; ?>" <?php if($page==$key): ?>class="is-active"<?php endif; ?>><?php echo $value; ?></a></li>
			<?php endforeach; ?>
			</ul>
		</nav>

		<!--Main Content-->
		<div class="content">
			<!--Main Section-->
			<section id="main-section">
				<?php include('blocks/'.$page.'.php'); ?>
			</section>

			<!--Side Section-->
			<aside id="side-section">
				<h4>Twitter</h4>
				<a class="twitter-timeline"  href="https://twitter.com/V4iVStudio" data-widget-id="607189571789389827">Tweets by @V4iVStudio</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</aside>
		</div>

		<!--Footer-->
		<footer class="bottom-footer">
			<?php include("blocks/footer.php"); ?>
		</footer>

	</div>
</body>

</html>
