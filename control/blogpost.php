<?php
require_once 'model/blogpost.php';
$article = new blogpost($_GET['id']);
include 'view/blogpost.php';
$comments = $article->fetch_comment();
foreach ($comments as $comment)
	include 'view/comment.php';
include 'view/com_form.php';
	