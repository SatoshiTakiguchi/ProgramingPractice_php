
<?php
# 以下[桃，イチゴ]とする
$price = [[],[]]; # [[桃の値段配列],[イチゴの値段配列]]
# それぞれ値段を設定する
for($i = 0; $i < 15; $i++){
    $price[0][] = mt_rand(200,300);
}
for($i = 0; $i < 15; $i++){
    $price[1][] = mt_rand(400,500);
}

# 最大値、最小値、合計値、平均値の初期化
$max_price = [0,0];
$min_price = [1000,1000];
$sum_price = [0,0];
$ave_price = [0,0];

# 果物一つ一つについて
for($i = 0; $i < 2; $i++){
    $num = count($price[$i]); # 果物の個数を取得

    #商品一つ一つについて
    for($j = 0; $j < $num; $j++){
        $p = $price[$i][$j]; # 変数を記述しやすくする
        
        # 合計金額の更新
        $sum_price[$i] += $p;
        
        # 最高金額の更新
        if($max_price[$i] < $p){
            $max_price[$i] = $p;
        }
        # 最安値の更新
        if($p < $min_price[$i]){
            $min_price[$i] = $p;
        }
    }
    #平均金額の取得
    $ave_price[$i] = $sum_price[$i] / $num;
    
}

echo 
"桃\n",
"最高値",$max_price[0],"\n",
"最安値",$min_price[0],"\n",
"平均価格",$ave_price[0],"\n";

echo 
"イチゴ\n",
"最高値",$max_price[1],"\n",
"最安値",$min_price[1],"\n",
"平均価格",$ave_price[1],"\n";

?>
