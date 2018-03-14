<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '407845809639518',
		'app_secret' => 'd250527b9d23ceece2c0ac03eb26847d',
		'default_graph_version' => 'v2.12'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>