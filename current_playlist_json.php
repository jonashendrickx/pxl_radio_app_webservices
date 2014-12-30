<?php
include("onair.txt");

$array= array(
	0 => array(
		'artist' => $artiest1,
		'title' => $titel1
	),
	1 => array(
		'artist' => $artiest2,
		'title' => $titel2
	),
	2 => array(
		'artist' => $artiest3,
		'title' => $titel3
	),
);
echo json_encode($array);
?>