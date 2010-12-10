<?php
///////////
//SPECIAL SECTION.
//$request = '/march';




/////////

//Controller:

include('model.php');

//$posts = getAllPosts();

if(isset($_GET['month'])) {
	$posts = getPostsInMonth($_GET['month']);
} else {
	$posts = getAllPosts();
}





$_view = array(
	'title' => 'PHP lesson yo',
	'posts'  => $posts,
	'menuItems' => getMenu()
);

include('views/base.php');


//var_dump($allPosts);


