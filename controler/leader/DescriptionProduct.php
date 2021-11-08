<?php include_once ".././../controler/csdl.php";?>
<?php
session_start();
$AdminLogin =(isset($_SESSION["Admin"]) && !empty($_SESSION["Admin"]))?$_SESSION["Admin"]:'';
if(!$AdminLogin){
    header("location:../login.php");
}
//Lấy tất cả từ bảng thể loại
$sql                  = "SELECT * FROM description_products";
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$Description_products   = $stmt->fetchAll();
// echo "<pre>";
// print_r($Discerption_products);
// echo "</pre>";
?>
<?php include_once "./view/headeer.php";?>  
<body>
    <div class="container">
      <h2 style="olor: blueviolet;margin-left: 325px;font-size: 47px;margin-top: 147px;">Discreption Product</h2>   
      <a class="btn btn-primary" href="AddDescription.php">ADD Description</a>
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
            <th>Configuration species </th>
            <th>Screen</th>
            <th>Operating System</th>
            <th>Chip</th>
            <th>RAM</th>
            <th>Memory_in</th>
            <th>battery</th>
            <th>Edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($Description_products as $key => $Description_product): ?>
          <tr>
            <td><?= $Description_product->id; ?></td>
            <td><?= $Description_product->configuration_species; ?></td>
            <td><?= $Description_product->Screen; ?></td>
            <td><?=  $Description_product->operating_system; ?></td>
            <td><?= $Description_product->Chip; ?></td>
            <td><?= $Description_product->RAM; ?></td>
            <td><?= $Description_product->Memory_in; ?></td>
            <td><?= $Description_product->battery; ?></td>
            <td><a href="EditDescription.php?id=<?php echo $Description_product->id; ?>" class="btn btn-primary">Edit</a></td>
            <td><a href="deleteDescription.php?id=<?php echo $Description_product->id;?>" class="btn btn-danger">Delete</a></td>
            <td></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
    </body>
<?php include_once "./view/foooter.php";?>  