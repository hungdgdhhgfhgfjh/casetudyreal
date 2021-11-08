<body>
    <div class="container">
      <h2 class="h2">Product</h2>
                  <?php
if (isset($_SESSION['error'])) : ?>
    <div class="alert alert-danger" >
        <?= $_SESSION['error'];
        unset($_SESSION['error']); ?>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success" >
        <?= $_SESSION['success'];
        unset($_SESSION['success']); ?>
    </div>
<?php endif; ?>            
      <table class="table table-striped">
        <a href="addProduct.php" class="btn btn-primary">Add Product</a>
        <thead>
          <tr>
            <th>id</th>
            <th>product</th>
            <th>price</th>
            <th>product Type</th>
            <th>image</th>
            <th>Edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($products as $key => $product): ?>
          <tr>
            <td><?= $product->id; ?></td>
            <td><?= $product->product; ?></td>
            <td><?= number_format($product->price); ?></td>
            <td><?= $product->type_name; ?></td>
            <td><img width="100px" src="<?= $product->image_product; ?>" alt=""></td>
            <td><a class="btn btn-primary" href="editProduct.php?id=<?php echo $product->id; ?>">edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are You Delete ')" href="deleteProduct.php?id=<?php echo $product->id; ?>">delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div>
 