<?


//MODEL for blog posts.

function getBaseUrl() {
	//return 'http://ajcates-macbook.local/tests/yoav/';
	return 'http://localhost/tests/yoav/';
}

function getAllPosts() {
	
	/*
	include('modules/db.php');

	$db = new DB();
	$db->connect();

	return $db->query('SELECT * FROM `posts`');
	*/
	
	include('data.php');
	return $data;
	
	//return array($data['shit-talk'], $data['munch']);
}



function getPostsInMonth($month=null) {
	


	$posts = getAllPosts();
	$returnPosts = array();
	
	foreach($posts as $post) {
		$postDate = strtotime($post['date']);
		$postMonth = date('F', $postDate);
		
		//var_dump($postMonth);
		
		if($postMonth == $month) {
			$returnPosts[] = $post;
		}
	}
	
	
	return $returnPosts;
}



function getMenu() {


	//echo "July 1, 2000 is on a " . ;
	$menu = array(
		array(
			'text' => 'Home',
			'link' => getBaseUrl()
		)
	);
	foreach(range(0, 11) as $i) {
		$month = date('F', mktime(0, 0, 0, $i, 0, 2010));
		$menu[] = array(
			'text' => $month,
			'link' => getBaseUrl() . 'index.php?month=' . $month
		);	
	}
	return $menu;
	
	
	//return array_map( function($i) { return date('F', mktime(0, 0, 0, $i, 0, 2010)) }, range(0, 11) );
	
	
	


/*
	return array(
		array(
			'text' => 'Home',
			'link' => getBaseUrl()
		),
		array(
			'text' => 'March',
			'link' => getBaseUrl() . 'index.php?month=March'
		),
		array(
			'text' => 'April',
			'link' => getBaseUrl() . 'index.php?month=April'
		)
	);
*/
}



