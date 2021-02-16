<!doctype html>
<html lang="ja">
	<head>
		<meta  charset="utf-8">
		<title>新規メンバー</title>
	</head>
	<body>
		<h1>新規メンバー</h1>
		<?php if($errors !== null): ?>
		<?php foreach($errors as $error): ?>
		<p><?= $errors ?></p>
		<?php endforeach; ?>
		<?php endif; ?>
	<form action="create.php" method="POST">
		名前<input type="text" name="name"> 
		年齢<input type="text" name="age">
		<input type="submit" value="登録">
	</form>
	</body>
</html>