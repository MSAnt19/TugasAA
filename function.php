<?php
function content($m)
{
	$cek = trim($m);

	if($cek == "0") 	{ $file = "home.php"; }
	if($cek == "home") 	{ $file = "home.php"; }
	if($cek == "about") { $file = "about.php"; }
	if($cek == "education")  { $file = "education.php"; }
	if($cek == "chat")   { $file = "chat.php"; }
	return $file;
}
