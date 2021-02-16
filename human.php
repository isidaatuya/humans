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
	//度合いぶ
	public function drive(){
		//年齢が１８さい以上だとドライブ
		if($this->age >= 18){
			print("楽しんで" . PHP_EOL);
		}else{ //年齢が１８歳未満の時はドライブできません
			print("まだ運転できません" . PHP_EOL);
			print("あと" . (18 - $this->age) . "年齢お待ちくください");
		}
	}
}

//isida誕生
// $isida = new human("石田",25);
//石田さん自己紹介する
// $isida->say();
// $isida->drive();

//山田さん誕生
// $yamada = new human("山田", 15);
// $yamada->say();
// $yamada->drive();
?> 