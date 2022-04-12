<?php
class Shops{
    private $products = []; # 商品オブジェクトリスト

    // 商品の追加
    public function addProduct($product){
        $this->products[] = $product;
    }
    // リスト入力による商品の一括追加
    public function addProductByList($product_list){
        for($i = 0; $i < count($product_list); $i++){
            $this->addProduct($product_list[$i]);
        }
    }

    // 入力と商品名が一致する商品リスト取得
    public function getProductList($name=null){
        // 入力がなければすべての商品リストを返す
        if(!$name){
            return $this->products;
        }

        $res_list = [];
        for($i = 0; $i < count($this->products); $i++){
            $product = $this->products[$i];
            if($name == $product->getName()){
                $res_list[] = $product;
            }
        }
        return $res_list;
    }
    // 入力と商品名が一致する値段のみのリスト取得
    public function getPriceList($name=null){
        $product_list = $this->getProductList($name);
        $res_list = [];
        for($i = 0; $i < count($product_list); $i++){
            $product = $product_list[$i];
            $res_list[] = $product->getPrice();
        }
        return $res_list;
    }

    // 商品名ごとの最高値取得
    public function maxPrice($name=null){
        $price_list = $this->getPriceList($name);
        return max($price_list);
    }
    // 商品名ごとの最安値取得
    public function minPrice($name=null){
        $price_list = $this->getPriceList($name);
        return min($price_list);
    }
    // 商品名ごとの平均価格取得
    public function avePrice($name=null){
        $price_list = $this->getPriceList($name);
        return round(array_sum($price_list)/count($price_list));
    }

    // 統計結果出力
    public function getStatistics($name=null){
        if(!$name){
            echo "すべての商品の統計\n";    
        }else{
            echo "{$name}の統計\n";
        }
        echo "最高値{$this->maxPrice($name)}円\n";
        echo "最安値{$this->minPrice($name)}円\n";
        echo "平均価格{$this->avePrice($name)}円\n";
    }

}

?>