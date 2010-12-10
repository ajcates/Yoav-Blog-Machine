<ul>
	<? foreach($_view['menuItems'] as $item) { ?>
		<li><a href="<? echo $item['link']  ?>"><? echo $item['text']  ?></a></li>
	<? } ?>
</ul>