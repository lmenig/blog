<?php
include 'model/blogpost.php';
include 'control/flux.php';
$homepost = new flux(0);
$article = new blogpost(0);
foreach ($homepost->_fluxarr as $row)
{
	$article->_rowarr=$row;
	include 'view/blogpost.php';
}