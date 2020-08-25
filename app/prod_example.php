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
      <div class="modal-body">
        
      <form>
        <div class="form-group">
            <label for="inputProduct">Product</label>
            <input type="Product" class="form-control" id="inputProduct">
        </div>
        <div class="form-group">
            <label for="inputDescription">Description</label>
            <input type="Description" class="form-control" id="inputDescription">
        </div>
        <div class="form-group">
            <label for="inputPrice">Price</label>
            <input type="text" class="form-control" id="inputPrice" placeholder="$$$$">
        </div>
        <div class="form-group">
            <label for="inputImage">Image URL</label>
            <input type="text" class="form-control" id="inputImage" placeholder="https://google.com">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Product</button> <!-- use this button to add  -->
      </div>
    </div>
  </div>
</div>



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