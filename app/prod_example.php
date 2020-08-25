<?php require('components/html_head.php'); ?>
<h1>Product Example</h1>



<?php 
include('../database.php');

    $products = getProducts();

?>
<div class="row">
<?php foreach($products as $product){ ?>


    <div class="col-4">
        <img src="<?=$product['product_img']?>" alt="" style="height:200px; width:200px;">
        <h1><?=$product['product_name']?></h1>
        <p><?=$product['product_description']?></p>
        <h1><?=$product['product_price']?></h1>
        
    </div>


<?php } ?>
</div>

<?php require('components/html_foot.php'); ?>