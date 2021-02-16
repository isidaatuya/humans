<?php
	session_start();
	$_SESSION["humans"] = null;
	$_SESSION["message"] = "全会員を削除しました";
	header("Location: index.php");
?>