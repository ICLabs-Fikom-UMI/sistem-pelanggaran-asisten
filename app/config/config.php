<?php

$url = "http://localhost";
$url = explode("/", $url);

$baseurl = 'http://' . $url[2] . '/lguard';

define('BASEURL', $baseurl);

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pelanggaran_asisten');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

