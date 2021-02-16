<?php
  //セッションスタート
  session_start();
  //変数の初期化
  $name_error = "";
  $age_error = "";
  
  // 名前が入力されたいなければ
  if($_SESSION["name_error"] !== null){
  	$name_error = $_SESSION["name_error"];
  	$_SESSION["name_error"] = null;
  }
  
  // 年齢がないとき
    if($_SESSION["age_error"] !== null){
  	$age_error = $_SESSION["age_error"];
  	$_SESSION["age_error"] = null;
  }
  
?>

<!doctype html>
<html lang="ja">
	<head>
		<meta  charset="utf-8">
		<title>新規メンバー</title>
	</head>
	<body>
		<h1>新規メンバー</h1>
		<p><?= $name_error ?></p>
		<p><?= $age_error ?></p>
	<form action="create.php" method="POST">
		名前<input type="text" name="name"> 
		年齢<input type="text" name="age">
		<input type="submit" value="登録">
	</form>
	</body>
</html>