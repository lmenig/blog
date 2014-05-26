<?php
include '../data_conection_with_pdo.php';
$req=$bd->prepare('INSERT INTO comment(comment, article_id) VALUES ( :comment, :article_id)');
$req->execute(array(':comment' => htmlentities($_POST['comment']), ':article_id' => htmlentities($_POST['id'])));
print_r($_POST);
header('Location: ../?id='.$_POST['id']);
