<!-- This file contains useful functions for the website -->
<?php
function postIntro($post_body,$length=195){
//takes the body of the blog post and make it the right lenght for blog spot intro page
if ( strlen($post_body) > $length ) {
	return substr($post_body,0 , $length). '...';
}
else {
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

function isPostEmpty($var){
	// include logout button if there is active user
	if (!empty($var)){
		include BASE_DIR . "/components/logoutButton.php";
	}
}

function verifyLogin($username, $password){
// Verify if user already has an account
global $database;
$statement = $database->prepare('SELECT username, password FROM user WHERE username = ? AND password = ?');
$statement->bindValue(1, $username);
$statement->bindValue(2, $password);
$result = $statement->execute();
$row = $result->fetchArray(SQLITE3_ASSOC);
print_r($row);
if ( $row){
	return 1;
}
return 0;
}

function makeLogout(){
	$_SESSION['username'] = NULL;
	return buildUrl("indexTwo");

}