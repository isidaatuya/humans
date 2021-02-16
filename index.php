<?php
 // 外部ファイルを読み込む
	require_once "human.php";
	//セッションスタート
	session_start();
	//全ての会員情報を保存する配列
	$humans = array();
	if($_SESSION["humans"] !== null){
		$humans = $_SESSION["humans"];
	}
	
	// $ishida = new Human("ishida", 19);
	// $yamada = new Human("yamada", 50);
	// $humans[] = $ishida;
	// array_push($humans, $ishida);
	// $humans[] = $yamada;
	// var_dump($humans);
	$message = "";
	$human = "";
	
	//もしメンバー登録に成功したならば
	if($_SESSION["human"] !== null){
		$human = $_SESSION["human"];
		$_SESSION["human"] = null;
		array_push($humans, $human);
		$_SESSION["humans"] = $humans;
	}
	if($_SESSION["message"] !== null){
		$message = $_SESSION["message"];
		$_SESSION["message"] = null;
	}
	
?>
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