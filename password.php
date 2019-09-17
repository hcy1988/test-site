<?php
session_start();
$_SESSION["loginname"] = $_POST["username"];
$_SESSION["pass"] = $_POST["pass"];

if($_SESSION["loginname"] != "hcy" || $_SESSION["pass"] != "hcytest"){
    ?>
    ログインに失敗しました。<br />
    <a href="login.html">セッション生成ページ</a>
    <?php
    exit;
}
if(isset($_POST["username"])) setcookie("username", $_POST["username"], time()+120);
?>
会員専用画面です。<br />
ログイン認証に成功しました。現在ログインしている状態です。<br />
<a href="cookie.php">マイページへ</a>
会員専用画面です。<br />
ログイン認証に成功しました。現在ログインしている状態です。<br />
<a href="cookie.php">マイページへ</a>
