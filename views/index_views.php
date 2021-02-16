<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>メンバー一案</title>
	</head>
	<body>
		<h1>メンバー一覧</h1>
		<p><?= $message ?></p>
		<?php if(count($humans) !== 0){ ?>
		<?php foreach($humans as $human){ ?>
		<ul>
			<Li>名前：<?= $human->name ?></Li>
			<li>年齢：<?= $human->age ?></li>
			<li>運転：<?= $human->drive() ?></li>
		</ul>
		<?php } ?>
		<?php }else{ ?>
		<p>メンバーがいません</p>
		<?php } ?>
		<a href="new.php">新規登録</a>
		<a href="delete.php">会員削除</a>
	</body>
</html>