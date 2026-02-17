<?php 
session_start();
error_reporting(0);
$siteUrl='http://'.$_SERVER['HTTP_HOST'].'/bproject';
$SiteTitle = "construction";
// Database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'phone_book_db';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn) {
	die('Database Connection Error!');
}