<!-- This file contains useful functions for the website -->
<?php
function postIntro($post_body,$length=195){
//takes the body of the blog post and make it the right lenght for blog spot intro page
	if ( strlen($post_body) > $length )
	{
		return substr($post_body,0 , $length). '...';
	}
	else
	{
		return $post_body;
	}
}

function dateFormatter($date,$format='j.n.Y'){
// Takes date from the database and formats it as says $format or differently if needed
	$dateObj = (new DateTime($date));
	return $dateObj->format($format);
}

// index.php?page=blogpost_view&id=1
function buildUrl($page, $query = []){
// Builds an URL
	$query['page'] = $page;
	return  BASE_URL . "/index.php" . (empty($query) ? '':"?" . http_build_query($query));
}

/**
* already in classes.php
*
function renderPage( $params, $page_default =  "indexTwo"  ){
// Render requested page
	global $database;
	$page = isset($params['page']) ? $params['page'] : $page_default;

	return include BASE_DIR . "/pages/" . $page . '.php';
}

function makeUserName ($username = 'username'){
// modify username showed on the page after login
	if ($username === 'username'){
		return $username;
	}
	return $username;

}
*/

function verifyLogin($email, $password){
// Verify if user already has an account
	global $database;
	$statement = $database->prepare('SELECT * FROM user WHERE email = ? AND password = ?');
	$statement->bindValue(1, $email);
	$statement->bindValue(2, $password);
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
		if ( $row)
		{
			return $row;
		}
	return NULL;
}

function makeLogout(){
// makes UI looks like nobody is logged in
	$_SESSION['username'] = NULL;
	return buildUrl("indexTwo");

}

function hashPwd($password){
// hashes password with a random string
	$salt = 'jhguiang4541g54a5g';
	$pwd = md5($password.$salt);
	return $pwd;
}

function validateUser($username, $email){
// checks user database if there is an user with the same username or email
	global $database;
	$statement = $database->prepare('SELECT count(*) AS totalRows FROM user WHERE username = ? OR email = ? LIMIT 1');
	$statement->bindValue(1, $username);
	$statement->bindValue(2, $email);
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
	return ( $row['totalRows'] === 0 );
}


function countPost(){
// return total number of post in the database
	global $database;
	$statement = $database->prepare('SELECT count(*) AS totalRows FROM post');
	$result = $statement->execute();
	$row = $result->fetchArray(SQLITE3_ASSOC);
	return $row['totalRows'];
}