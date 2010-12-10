<?

$ourArray = array('herion', 'cocaine', 'weed', 'purple pills');

$favDrug = 'herion';

function getHigh($drug) {
	return $drug;
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<h3>hello world</h3>
<ul>





<?php
for($i = 0; $i < count($ourArray); $i++) {
	if($ourArray[$i] == $favDrug) {
		echo '<li>' . getHigh($ourArray[$i]) . '</li>';
	} else {
		echo '<li>drug: ' . $ourArray[$i] . '<br/> $i count: ' . $i  . ' </li>';
	}
}
?>
</ul>
</body>
</html>

