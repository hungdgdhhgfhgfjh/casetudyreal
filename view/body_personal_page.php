<div class="container">
  <h2 class="text-center text-primary" style="margin-top: 189px;">Your Personal Page</h2> 
  <a class="btn btn-success" href="checkout.php">Your Orders</a>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>fullName</th>
        <th>email</th>
        <th>numberPhone</th>
        <th>edit</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $user->fullName ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->numberPhone ?></td>
            <td><a class="btn btn-success" href="editPerson_Page.php?id=<?=  $user->id ?>">edit</a><td>  
        </tr>
    </tbody>
  </table>
</div>