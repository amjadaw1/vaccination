<?php
date_default_timezone_set('Africa/Cairo');
$date_naw=date('Y-m-d H:i:s');
$date_da=date('Y-m-d');
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn, 'vacdb');
$conn->set_charset("utf8");
if ($conn == false) {
    die(mysqli_connect_error());
}

//$connect = new PDO("mysql:host=localhost;dbname=mix", "root", "");
