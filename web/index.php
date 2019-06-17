<!-- This page represents the main page of the website -->
<?php
	session_start();
	// define('BASE_DIR', dirname(__FILE__));
	define('BASE_DIR', dirname("c:/wamp/www/damiblog/web/"));
	define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
	include BASE_DIR . '/utils/utils.php'; // utils
	include BASE_DIR . '/data/database.php'; // database
?>
<html>
<head>
<title>DAMI BLOG | INDEX</title>
<!-- bootstrap css, jquery and javascript -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/assets/css/styles.css"> <!-- css -->
</head>
<!-- body of the page -->
<body>
<?php
	// navbar
	include BASE_DIR . '/components/navbar.php';
	// render requested page
	// echo renderPage($_GET);
	include BASE_DIR . '/utils/classes.php';
	$page = new Page();
	// $page->$database = BASE_DIR . '/data/database.php';
	echo $page->renderPage($_GET);
?>
</body>
</html>
