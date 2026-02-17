<?php 
session_start();
error_reporting(0);

/* Correct URL for Render */
$siteUrl = 'https://' . $_SERVER['HTTP_HOST'];

$SiteTitle = "construction";

/* Railway MySQL connection */

$dbhost = 'tramway.proxy.rlwy.net';
$dbuser = 'root';
$dbpass = 'dgOrnARudhMgGwYfspmxqWgYTesFFOWO';
$dbname = 'railway';
$dbport = '33492';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if(!$conn){
    die('Database Connection Error: ' . mysqli_connect_error());
}
?>
