<?php
class Products{
    public function index(){
        html_header();

        $list = DB::getInstance()->select("SELECT * FROM products");

        ?>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        <?php
        foreach($list as $product){
            ?>
            <tr>
                <td><?=$product['product_id']?></td>
                <td><img src="https://placeholdit.imgix.net/~text?txtsize=15&txt=160%C3%97160&w=100&h=70" alt="..." class="img-responsive img-thumbnail"></td>
                <td><?=$product['name']?></td>
                <td>
                    <button type="button" data-item-id="<?=$product['product_id']?>" class="add-to-basket btn btn-info btn-sm">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        Add to basket
                    </button>
                    <button type="button" data-item-id="<?=$product['product_id']?>" class="remove-from-basket btn btn-danger btn-sm">
                        <i class="glyphicon glyphicon-remove"></i>
                        Remove from basket
                    </button>
                </td>
            </tr>
            <?php
        }

        ?>
        </table>
        <?php

        if( count($list) == 0){
            echo "<div>No products</div>";
        }
        html_footer();
    }
}
