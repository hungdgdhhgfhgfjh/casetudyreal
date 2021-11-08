<body>
    <div class="container">
      <h2 class="h2">Category</h2>
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
        <a href="addProduct_type.php" class="btn btn-primary">Add Category</a>
        <thead>
          <tr>
            <th>id</th>
            <th>type name</th>
            <th>image</th>
            <th>Edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($product_types as $key => $product_type): ?>
          <tr>
            <td><?= $product_type->id; ?></td>
            <td><?= $product_type->type_name; ?></td>
            <td><img width="150px" src="<?= $product_type->image_product; ?>" alt=""></td>
            <td><a class="btn btn-primary" href="editProduct_type.php?id=<?php echo $product_type->id; ?>">edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are You Delete ')" href="delete_Product._type.php?id=<?php echo $product_type->id; ?>">delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div>