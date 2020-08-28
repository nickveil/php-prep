<?php require('components/html_head.php'); ?>
<h1>Product Example</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Product
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="add" method="POST" action="prod_example.php">
        <div class="modal-body">
            
        
            <div class="form-group">
                <label for="inputProduct">Product</label>
                <input type="Product" class="form-control" name="inputProduct" id="inputProduct">
            </div>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <input type="Description" class="form-control" name="inputDescription" id="inputDescription">
            </div>
            <div class="form-group">
                <label for="inputPrice">Price</label>
                <input type="text" class="form-control" name="inputPrice" id="inputPrice" placeholder="$$$$">
            </div>
            <div class="form-group">
                <label for="inputImage">Image URL</label>
                <input type="text" class="form-control" name="inputImage" id="inputImage" placeholder="https://google.com">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Product</button> <!-- use this button to add  -->
        </div>
      </form>
    </div>
  </div>
</div>





<?php 
    include('../database.php');

    // function testPost () {
    //     $sql = "INSERT INTO products (product_name, product_description, product_price,product_img) VALUES ('test3', 'testing', 2.34, 'https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');";
    //     $request = pg_query(getDb(), $sql);
    // }

    if(isset($_POST['inputProduct']) && isset($_POST['inputDescription']) && isset($_POST['inputPrice']) && isset($_POST['inputImage'])){
        $safeName = htmlentities($_POST['inputProduct']);
        $safeDescription = htmlentities($_POST['inputDescription']);
        $safePrice = htmlentities($_POST['inputPrice']);
        $safeImage = htmlentities( $_POST['inputImage']);
        addProduct($safeName, $safeDescription, $safePrice, $safeImage);
        // var_dump(addProduct($safeName, $safeDescription, $safePrice, $safeImage));
    } else {
        echo "Please complete all fields to add a product.";
    }
    

    function addProduct($name, $description, $price, $url){
        // var_dump($name);
        // $sql = "INSERT INTO products (product_name, product_description, product_price,product_img) VALUES ('test3', 'testing', 2.34, 'https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80');";
        $sql = "insert into products (product_name, product_description, product_price, product_img) VALUES (' " .$name."', '".$description."',". $price .", '". $url. "');";
        $request = pg_query(getDB(), $sql);
        // var_dump(addProduct($safeName, $safeDescription, $safePrice, $safeImage));
        // if($query){
        //     echo "Record Successful.";
        // }else {
        //     echo "nope.";
        // }
        return pg_fetch_all($request);
    }

?>

<div class="row">
<?php 
    
    $products = getProducts();
    if ($products == null){
        echo "No products listed. Click add product to add.";
    } else {
        foreach($products as $product){ ?>


    <div class="col-4">
        <img src="<?=$product['product_img']?>" alt="" style="height:200px; width:200px;">
        <h1><?=$product['product_name']?></h1>
        <p><?=$product['product_description']?></p>
        <h1><?=$product['product_price']?></h1>
        
    </div>


<?php }} ?>
</div>
<?php require('components/html_foot.php'); ?>