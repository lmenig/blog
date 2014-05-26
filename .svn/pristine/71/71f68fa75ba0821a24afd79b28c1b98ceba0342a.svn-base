<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
if (isset($_POST['login']) && isset($_POST['pwd']))
{
if ($_POST['login']=='admin' && $_POST['pwd']='lol123')
    $_SESSION['logged']=true;
}
if (empty($_SESSION['logged']))
    echo '
    <form method="post" action="admin.php">

    <label>login</label> <input type="text" name="login">
    <label>password</label><br> <input type="password" name="pwd">
    <br><input type="submit" value="se connecter">
    </form>';

else if ($_SESSION['logged'] = true)
    echo '<form method="post" action="admin.php">
    <label>Titre :</label>
    <input type="text" name="article">
    <label>Contenu :</label>
    <textaera name="content">
    </textaera>';
?>
</body
</html>
