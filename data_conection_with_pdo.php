<?php

try
{
	$bd = new PDO('mysql:host=localhost;dbname=meniga_l', 'meniga_l', 'VQA82pn6');
}
catch(Exception $e)
{
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
}
$bd->exec('SET NAMES UTF8');
$GLOBALS['pdo'] = $bd;