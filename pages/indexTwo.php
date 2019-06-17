<?php
	// include database file
	include BASE_DIR . "/data/database.php";
	// catches data of the user after login
	if (!empty($_SESSION['username']))
	{
		$var = $_SESSION['username'];
	}

	// $result takes the database data which are further needed into an array
	$result = $database->query('SELECT headline, body, published, id, author FROM post ORDER BY published DESC');
	/* This loop fetches $results data into $row array, then displays blog posts.
   Breaks when $results array is empty  */
	while ($row = $result->fetchArray(SQLITE3_ASSOC))
	{
		// include layout for blog post intro
		include 'blogpost_intro.php';
	}
?>