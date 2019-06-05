<?php
include BASE_DIR . "/data/database.php";
// $result takes the database data which are further needed into an array
$result = $database->query('SELECT headline, body, published, id, author FROM post ORDER BY published DESC');
/* This loop fetches $results data into $row array, then displays blog posts.
   Breaks when $results array is empty  */
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
	//include 'blogpost_intro.php';
	include 'blogpost_intro.php';
	}
?>