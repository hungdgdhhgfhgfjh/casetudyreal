<body>
    <div class="container">
      <h2 class="h2">Order Details</h2>
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
        <thead>
          <tr>
            <th>product Name</th>
            <th>image product</th>
            <th>Price Each</th>
            <th>customers id</th>
            <th>address</th>
            <th>Edit</th>
            <th>Delete</th>
      
          </tr>
        </thead>
        <tbody>
          <?php foreach($order_details as $key => $order_detail): ?>
          <tr>
            <td><?= $order_detail->product; ?></td>
            <td><img width="200px" src="<?= $order_detail->image_product; ?>" alt=""></td>
            <td><?= number_format($order_detail->price_each); ?></td>
            <td><?=  $order_detail->customers_id; ?></td>
            <td><?= $order_detail->address; ?></td>
            <td><a class="btn btn-primary" href="Edit_order_details.php?id=<?= $order_detail->id; ?>">edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are You Delete ')" href="deleteOrder_details.php?id=<?= $order_detail->id; ?>">delete</a></td>
          
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    </body>