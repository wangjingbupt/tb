<?php

$dh = opendir('/home/erik/site/taobao/data/');
while (($file = readdir($dh)) !== false)
{
	if($file =='.' || $file =='..')
		continue;
	$url = "<a href='/list.php?file={$file}' >{$file}</a>";
	echo "<p>{$url}</p>";
}
closedir($dh);



?>
