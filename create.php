<?php
// 外部ファイルの読み込み
    require_once "human.php";
    //セッションスタート
    session_start();
    //print "ok";
    var_dump($_POST);
    $name = $_POST["name"];
    // print $name;
    $age = $_POST["age"];
    // print $age;
    
    
    
    //名前が入力されていなければ
    if($name === ""){
        //	print "名前を入力してください";
        //セッションにエラーメッセージをセット
        $_SESSION["name_error"] = "名前を入力してください";
    }
    //年齢がないとき
    if($age === ""){
       // print "年齢がないよ";
       $_SESSION["age_error"] = "年齢を入れてください";
    }
    //もし、名前か年齢のどちらかがない時は
    if($name === "" || $age === ""){
        	 //画面変わる
        header("Location: new.php");    
    }else{ // きちんと入力された場合
    	$human = new Human($name, $age);
    	$_SESSION["human"] = $human;
    	$_SESSION["message"] = "新規メンバー登録に成功しました";
    	header("Location: index.php");
    }
   
?>
