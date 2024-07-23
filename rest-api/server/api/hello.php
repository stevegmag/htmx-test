<?php
header("Access-Control-Allow-Origin: *");
// get request method
$method = $_SERVER['REQUEST_METHOD'];

$genres = array(
    "Rock",
    "Electronic",
    "Country",
    "Heavy metal",
    "Hip hop",
    "Jazz",
    "Classical",
    "Soul",
    "Folk",
    "Reggae",
    "Techno",
    "Disco"
);
$rtn = $genres[array_rand($genres, 1)];

if ($method == 'GET') {
	echo $rtn;
}
if ($method == 'POST') {
	echo $rtn;
}
if ($method == 'PUT') {
	echo "THIS IS A PUT REQUEST";
}
if ($method == 'DELETE') {
	echo "THIS IS A DELETE REQUEST";
}