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
	
	//viewsのファイル
	include_once "views/index_views.php";
?>
