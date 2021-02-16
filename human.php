<?php 
//人間を作る
class human{
	public $name; //namae
	public $age; //年齢
	
	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
	// 自己紹介をする、メソッド
	public function say(){
		print("矢田氏の名前は" . $this->name . "です" . PHP_EOL);
		print("年齢は" . $this->age . "歳です" . PHP_EOL);
	}
	//ドライブ
	public function drive(){
		//年齢が１８さい以上だとドライブ
		if($this->age >= 18){
			print("楽しんで" . PHP_EOL);
		}else{ //年齢が１８歳未満の時はドライブできません
			print("まだ運転できません" . PHP_EOL);
			print("あと" . (18 - $this->age) . "年齢お待ちくください");
		}
	}
	
	 //入力チェック
	 public function validate(){
	 	//入力エラーが複数ある場合にすべてエラーを保存する配列
	 	$errors = array();
	 	 //名前が入力されていなければ
	    if($this->name === ""){
	        //エラー配列にエラーメッセージをセット
	        $errors[] = "名前を入力してください";
	    }
	    //年齢がないとき
	    if($this->age === ""){
	       $errors[] = "年齢を入れてください";
	    }
	    //完成したエラー配列、はい上げる
	    return $errors;
	 }
}

 
?> 