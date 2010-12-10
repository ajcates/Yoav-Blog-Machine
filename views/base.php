<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $_view['title'] ?></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<? include('menu.php') ?>
	</header>
	<? foreach($_view['posts'] as $post) { ?>
		<h1><? echo $post['title'] ?></h1>
		<p><? echo $post['content'] ?></p>
		<h4><? echo $post['date'] ?></h4>
		<hr />
	<? } ?>
</body>
</html>