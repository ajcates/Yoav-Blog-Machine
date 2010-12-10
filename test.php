<?

echo 'hello world';


include('modules/db.php');

$db = new DB();

var_dump(
	$db->connect()
);


var_dump(
	$db->query(
		'SELECT * FROM `posts`'
	)
);



