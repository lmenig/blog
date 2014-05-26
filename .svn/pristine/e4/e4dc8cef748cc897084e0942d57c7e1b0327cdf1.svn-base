<?php
error_reporting(E_ALL);
session_start();
require_once 'data_conection_with_pdo.php';
//require_once 'control/classes.php';


ob_start();
if (empty($_GET))
{	
	include 'control/home.php';
}
else if (!empty($_GET['id']))
{
	require 'control/blogpost.php';
}
else if (file_exists( 'control/'.key($_GET).'.php'))
{
	include 'control/'.key($_GET).'.php';
}
else	
{
 header('HTTP/1.0 404 Not Found');
 header('Location: 404missing.html');
 die();
}

$content=ob_get_clean();
include 'view/layout.php';