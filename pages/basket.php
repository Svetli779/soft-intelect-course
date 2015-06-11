<?php
class Basket{
    public function addInBasket(){
        $product_id = Validate::post('product_id', 'number', 0);
        if($product_id > 0 ){
            $_SESSION['BASKET'][] = $product_id;
        }
    }

    public function removeFromBasket(){
        $product_id = Validate::post('product_id', 'number', 0);
        if($product_id > 0 ){
            if( in_array($product_id, $_SESSION['BASKET'])){
                $key = array_search($product_id, $_SESSION['BASKET']);

                if($key){
                    unset( $_SESSION['BASKET'][$key] );
                } else {
                    echo "MISSING KEY";
                }
            } else {
                echo "NO PRODUCT";
            }
        } else {
            echo "FALSE";
        }
    }
}