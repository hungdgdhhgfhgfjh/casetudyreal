<body>
    <div class="container">
      <h2 class="h2">Orders</h2>
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
            <th>customer_id</th>
            <th>address</th>
            <th>totalPrice</th>
            <th>status</th>
            <th>order_date</th>
            <th>required_date</th>
            <th>Edit</th>
            <th>Delete</th>
      
          </tr>
        </thead>
        <tbody>
          <?php foreach($orders as $key => $order): ?>
          <tr>
            <td><?= $order->fullName; ?></td>
            <td><?= $order->address; ?></td>
            <td><?= number_format($order->totalPrice); ?></td>
            <td><?= $order->status; ?></td>
            <td><?= $order->order_date; ?></td>
            <td><?= $order->required_date; ?></td>
            <td><a class="btn btn-primary" href="editOrder.php?id=<?= $order->id; ?>">edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are You Delete ')" href="deleteOrder.php?id=<?= $order->id; ?>">delete</a></td>
          
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    </body>