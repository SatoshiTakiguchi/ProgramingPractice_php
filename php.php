
<?php

class Fruits
{
    private $name;
    private $price = [];
    
    // 初期化
    public function __construct($name,$num,$min_price,$max_price){
        $this->name = $name;
        for($i = 0; $i < $num; $i++){
            $this->price[] = mt_rand($min_price,$max_price);
        }
    }
    
    // 値段と個数の再編成
    public function reCreate($num,$min_price,$max_price){
        $this->price = [];
        for($i = 0; $i < $num; $i++){
            $this->price[] = mt_rand($min_price,$max_price);
        }
    }
    // 名前変更
    public function setName($name){
        $this->name = $name;
    }
    // 最高値取得
    public function maxPrice(){
        return max($this->price);
    }
    // 最安値取得
    public function minPrice(){
        return min($this->price);
    }
    // 平均価格取得
    public function avePrice(){
        return round(array_sum($this->price)/count($this->price));
    }
    
    // 統計結果出力
    public function getStatistics(){
        echo "{$this->name}の統計\n";
        echo "最高値{$this->maxPrice()}円\n";
        echo "最安値{$this->minPrice()}円\n";
        echo "平均価格{$this->avePrice()}円\n";
    }
}

$momo = new Fruits("桃",15,200,300);
$ichigo = new Fruits("イチゴ",15,400,500);
$momo->getStatistics();
$ichigo->getStatistics();

// echo "\nおまけ\n";
// $momo->setName("momo");
// $momo->reCreate(2,100,200);
// $momo->getStatistics();

?>
