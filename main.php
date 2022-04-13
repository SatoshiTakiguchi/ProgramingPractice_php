
<?php
require 'Products.php';
require 'Shops.php';   

// 桃作成
$momo_list = [];
for($i = 0; $i < 15; $i++){
    $momo_list[] = new Products("桃",mt_rand(200,300));
}
// イチゴ作成
$ichigo_list = [];
for($i = 0; $i < 15; $i++){
    $ichigo_list[] = new Products("イチゴ",mt_rand(300,400));
}

// 店作成
$shop = new Shops();
// 店に商品を追加
$shop->addProductByList($momo_list);
$shop->addProductByList($ichigo_list);
// 統計情報の表示
$shop->getStatistics("桃");
$shop->getStatistics("イチゴ");
$shop->getStatistics();

?>
