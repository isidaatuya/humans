<?php
  //セッションスタート
  session_start();
  
  // エラーメッセージをセッションから復元
 $errors = $_SESSION["errors"];
 $_SESSION["errors"] = null;
 
  //viewの場合
  include_once "views/new_views.php";
?>