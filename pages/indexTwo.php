<?php
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
//include 'blogpost_intro.php';

		include 'blogpost_intro.php';
		if (!empty($var))
		{
			$_POST['id'] = $row['id'];
			print_r($_POST['id']);

			// delete post button
			echo '
			<div class="deletePostButton text-center">
			<form action="'.buildUrl("deletePost").'" method="post">
				<input type="hidden" name="postId" value="'.$row['id'].'">
				<input type="hidden" name="postHeadline" value="'.$row['headline'].'">
				<button name="postDelete">Delete Post</button>
			</form>
			</div>';

			// edit post button
			echo '
			<div class="deletePostButton text-center">
			<form action="'.buildUrl("postEdit").'" method="post">
				<input type="hidden" name="postId" value="'.$row['id'].'">
				<input type="hidden" name="postHeadline" value="'.$row['headline'].'">
				<input type="hidden" name="postBody" value="'.$row['body'].'">
				<button name="postEdit">Edit Post</button>
			</form>
			</div>';

		}
	}
?>