<?php

$title = $_GET['title'];
$img= $_GET['img'];
$price= $_GET['price'];
$url= $_GET['url'];
$data = $title."||".$img."||".$url."||".$price."\n";
file_put_contents('/home/erik/site/taobao/data/'.date('Y-m-d').".log",$data,FILE_APPEND);
echo '123';



?>
