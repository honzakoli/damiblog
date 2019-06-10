<?php
include BASE_DIR . "/data/database.php";

// catches data of the user after login
if (!empty($_SESSION['username'])){
	$var = $_SESSION['username'];
	// include BASE_DIR . "/components/logoutButton.php";
	include BASE_DIR . "/components/user.php";
	include BASE_DIR . "/components/createBlogPost.php";
	include BASE_DIR . "/components/logoutButton.php";
}
// $result takes the database data which are further needed into an array
$result = $database->query('SELECT headline, body, published, id, author FROM post ORDER BY published DESC');
/* This loop fetches $results data into $row array, then displays blog posts.
   Breaks when $results array is empty  */
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
	//include 'blogpost_intro.php';
	include 'blogpost_intro.php';
	if (!empty($var)){
		include BASE_DIR . '/components/blogPostButtons.php';
	}
	}
?>