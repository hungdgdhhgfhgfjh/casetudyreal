<body>
    <div class="container">
      <h2 class="h2">Customer</h2>
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
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>Number Phone</th>
            <th>Edit</th>
            <th>Delete</th>
      
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $key => $customer): ?>
          <tr>
            <td><?= $customer->id; ?></td>
            <td><?= $customer->fullName; ?></td>
            <td><?= $customer->email; ?></td>
            <td><?= $customer->pass_word; ?></td>
            <td><?= $customer->numberPhone; ?></td>
            <td><a class="btn btn-primary" href="editCustomer.php?id=<?= $customer->id; ?>">edit</a></td>
            <td><a class="btn btn-danger" href="deleteCustomer.php?id=<?= $customer->id; ?>">delete</a></td>
          
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    </body>