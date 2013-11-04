<?php

$dir ='/home/erik/site/taobao/data/';
echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>
									 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head><body><div><center>';
$file = $dir.$_GET['file'];
if(file_exists($file))
{
	echo "<table border=1>";
	$fp = fopen($file,'r');
	while(($line=fgets($fp,4096)))
	{
		$line = trim($line);
		$arr = explode("||",$line);
		echo "<tr><td><img src='{$arr[1]}' style='height:150px;'></td><td>{$arr[0]}</td><td><a href='{$arr[2]}' target='_blank'>链接地址</a></td><td>{$arr[3]}</td></tr>";


	}
	echo "</table></center></div>";

}

?>
