<body>
    <div class="container">
      <h2 class="h2">Customer</h2>
                  <?php
if (isset($_SESSION['error'])) : ?>
    <div class="alert alert-danger" >
        <?= $_SESSION['error']; ?>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success" >
        <?= $_SESSION['success']; ?>
    </div>
<?php endif; ?>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>full name</th>
            <th>email</th>
            <th>numberPhone</th>
            <th>Edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $key => $user): ?>
          <tr>
            <td><?= $user->fullName; ?></td>
            <td><?= $user->email; ?></td>
            <td><?= $user->numberPhone; ?></td>
            <td><a class="btn btn-primary" href="editCustomer.php?id=<?php echo $user->id; ?>">edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are You Delete ')" href="deleteCustomer.php?id=<?php echo $user->id; ?>">delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div>
 