<?

/*
$login = array(
	'host' => 'localhost',
	'user' => 'yoav',
	'password' => 'pass'
);

function connect() {
	$con = mysql_connect('localhost', 'mysql_user', 'mysql_password');
	if (!$con) {
	    die('Could not connect: ' . mysql_error());
	}	
	
	
	
	
	return $con;
}


function runQuery($query) {
	$con
}

function cleanInput($input) {

}

*/


class db {

	var $login = array(
		'host' => 'localhost',
		'user' => 'yoav',
		'password' => 'pass',
		'name' => 'yoav-blog'
	);
	var $con = null;

	function connect() {
		if(!$this->con) {
			$this->con = mysql_connect($this->login['host'], $this->login['user'], $this->login['password']);
			if (!$this->con) {
			    die('Could not connect: ' . mysql_error());
			    return false;
			}
		}
		mysql_select_db($this->login['name']);
		return $this->con;
	}
	
	function query($sql) {
		$result = mysql_query($sql, $this->con);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
			return false;
		}
		
		$returnArray = array();
		
		while ($row = mysql_fetch_assoc($result)) {
			$returnArray[] = $row;
		}
		
		return $returnArray;
	}
	
	

	function clean($input) {
		return mysql_real_escape_string($input, $this->con);
	}

}






/*
- runQuery
- connect
- cleanInput
*/


