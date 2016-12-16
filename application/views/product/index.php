<div class="box-header">
  <h3 class="box-title">Product list</h3>

  <div class="box-tools">
    <div class="input-group input-group-sm" style="width: 150px;">
      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

      <div class="input-group-btn">
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
  <table class="table table-hover">
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Category ID</th>
      <th>Price</th>
    </tr>

    <?php
    //print_r($products);
    //die;
    foreach ($products as $product){
        echo "<tr>"
        . "<td>$product->product_id</td>"
        . "<td>$product->product_name</td>"
        . "<td>$product->category_id</td>"
        . "<td>$product->price</td>"
        . "</tr>";
    }
    ?> 
  </table>
</div>
<!-- /.box-body -->



