<!-- This page represents the main page of the website -->
<?php
define('BASE_DIR', dirname(__FILE__));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
include BASE_DIR . '/utils/constants.php'; // constants
include BASE_DIR . '/utils/utils.php'; // utils
include BASE_DIR . '/data/database.php'; // database
?>
<html>
<head>
<title>DAMI BLOG | INDEX</title>
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/assets/css/styles.css"> <!-- css -->
</head>
<!-- START OF A BODY PART -->
<body>
<!--  NAVBAR -->
<?php
 include '/components/navbar.php';
echo renderPage($_GET);
?>
</body>
</html>
