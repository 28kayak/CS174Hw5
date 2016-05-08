<?php

$lang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];

$temp = explode(";", $lang);
$lang = explode(",", $temp[0]);
$message = "lang[0] = ".$lang[0];
echo "<script type='text/javascript'>alert('$message');</script>";

if ($lang[0] == "en-US") 
{
	# code...
	include("index.html");
}
else if ($lang[0] == "ja")
{
	# code...
	include("index-jp.html");

}
else
{
	include();
}






 ?>
