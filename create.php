<?php
   // 外部ファイルの読み込み
    require_once "human.php";
    //セッションスタート
    session_start();
   
    $name = $_POST["name"];
    $age = $_POST["age"];

    //入力情報から新しい人間を作る
    $new_human = new human($name, $age);
    //エラー情報を受け取る
    $errors = $new_human->validate();

   // エラーが一つもなければ
   if(count($errors) === 0){
        $_SESSION["human"] = $new_human;
     	$_SESSION["message"] = "新規メンバー登録に成功しました";
     	
     	header("Location: index.php");
     	exit;
     
   }else{ //一つでも入力エラーがあれば
       $_SESSION["errors"] = $errors;
       	header("Location: new.php"); 
       	exit;
   }

    // //もし、名前か年齢のどちらかがない時は
    // if($name === "" || $age === ""){
    //     	 //画面変わる
    //        
    // }else{ // きちんと入力された場合
    // 	$human = new Human($name, $age);
   
    // }
   
?>
