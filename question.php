<?php
//session_start();
require_once("core.php");
require_once("functions.php");
ob_start();

if (!isset($_SESSION["access_token"])) {

  header('Location: '.LOGINLINK);
}


if (!isset($_SESSION["email"])) {
  add_user();
}
$answer = strtolower(trim($_POST["answer"]));
print_r($answer);
//$answer = str_replace(' ','',$answer);
echo "$answer";
$answer=sha1($answer);
//echo "$answer";
print_r($answer);
if (checkans($answer,getlevel($_SESSION["fb_id"]))) {
//flush();
     updateUser($_SESSION["fb_id"]);
     header('Location: '.REDIRECTLINK.'/index.php');
}
else{
//flush();
    header('Location: '.REDIRECTLINK.'/index.php?msg=2');
}
?>
