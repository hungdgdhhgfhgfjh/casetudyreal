<?php include_once ".././../controler/csdl.php";?>
<?php
session_start();
$erroConfiguration_species = "";
$erroScreen                = "";
$erroChip                  = '';
$erroOperating_system      = '';
$erroRam                   = '';
$erroBattery               = '';
$erroMemory_in             = '';
$erroProduct_id            = '';
if($_SERVER["REQUEST_METHOD"] == "POST" )
{
//     echo "<pre>";
//     print_r($_REQUEST);
//     echo "</pre>";
//     Array
// (
//     [id] => 1
//     [configuration_species] => Phone Configuration iPhone X 64GB
//     [screen] => OLED5.8
//     [operating_system] => iOS 12
//     [chip] => Apple A11 Bionic
//     [ram] => 3 GB
//     [memory_in] => 64 GB
//     [battery] => 2716 mAh
// )
    $configuration_species = $_REQUEST["configuration_species"];
    $screen                = $_REQUEST["screen"];
    $operating_system      = $_REQUEST["operating_system"];
    $chip                  = $_REQUEST["chip"];
    $ram                   = $_REQUEST["ram"];
    $memory_in             = $_REQUEST["memory_in"];
    $battery               = $_REQUEST["battery"];
    $product_id            = $_REQUEST["product_id"];
if($configuration_species == "" || $screen == ""  || $operating_system == "" || $chip =="" || $ram == "" || $memory_in == "" || $battery == "" || $product_id == "")
    {
        $erroConfiguration_species = "Please enter your Configuration species";
        $erroScreen                = "Please enter your Screen";
        $erroChip                  = "Please enter your Chip";
        $erroOperating_system      = "Please enter your Operating System";
        $erroRam                   = "Please enter your Ram";
        $erroMemory_in             = "Please enter your memory in";
        $erroBattery               = "Please enter your battery";
        $erroProduct_id                = "Please enter your product_id";
    }
else
    {
           try {
                $sql = "INSERT INTO `description_products` (`id`, `products_id`, `configuration_species`, `Screen`, `operating_system`, `Chip`, `RAM`, `Memory_in`, `battery`) VALUES (NULL, ".$product_id.", '".$configuration_species."', '".$screen."', '".$operating_system."', '".$chip."', '".$ram."','".$memory_in."', '".$battery."');";
                //thực hiện truy vấn
                $stmt = $connect->query( $sql );
                //tùy chọn kiểu trả về
                $stmt->setFetchMode(PDO::FETCH_OBJ);
                //lấy tất cả kết quả
                $Description   = $stmt->fetch();
                $news   = "";
                $_SESSION['success'] = "add success*";
           throw new Exception();
                if ($Description)
                    {
                        throw new Exception();
                        $upadte = "INSERT INTO `description_products` (`id`, `products_id`, `configuration_species`, `Screen`, `operating_system`, `Chip`, `RAM`, `Memory_in`, `battery`) VALUES (NULL, ".$product_id.", '".$configuration_species."', '".$screen."', '".$operating_system."', '".$chip."', '".$ram."','".$memory_in."', '".$battery."');";
                        $_SESSION['error'] = "you have to add product! ";
                        $stmt   = $connect->query( $upadte);
                        
                    }
                } 
        catch (Exception $e)
          {
           
            header("location: DescriptionProduct.php");
          }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .strong1{
        font-weight: bolder;
    font-size: 46px;
    color: springgreen;
    margin-left: 579px;
    margin-top: 35px;
    }
    body {
    background-image: url("https://lh3.googleusercontent.com/iEgYEImW_pDNT13ar8YJzj6lLYjSkCbM0ROyv7elI1cXRM2tdGogs-ctW8tlYRE1r3zB8bDlMW4osxMJ86sMPUiOdlLZ156oBmXz-H_hhk5RCg5k6Z6U6TqVueCZmG2Bx56tkUAqGQ=w1314-h891-no");
    width: 100%;
}
</style>
<body  >
                <strong class="strong1" >ADD</strong>
                <div style="height: 878px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
                    <div class="container">
            <form action=""  method="POST">
                <div class="form-group">
                <label for="email">  Configuration species</label>
                <input class="form-control" type="text" name="configuration_species" >
               <strong class="alert-danger"><?php echo $erroConfiguration_species; ?></strong>
                </div>
                <div class="form-group">
                <label for="email">Screen</label> 
                    <input class="form-control" type="text" name="screen" >
                    <strong class="alert-danger"><?php echo  $erroScreen; ?></strong>
                <div class="form-group">
                <label for="email">Operating System</label>
                <input class="form-control" type="text" name="operating_system" >
                <strong class="alert-danger"><?php echo  $erroOperating_system; ?></strong>
                </div>
                <div class="form-group">
                <label for="email">Chip</label>
                 <input class="form-control" type="text" name="chip" >
                 <strong class="alert-danger"><?php echo  $erroChip; ?></strong>
                  </div>
               
                  <div class="form-group">
                  <label for="email">RAM</label>
                 <input class="form-control" type="text" name="ram" >
                 <strong class="alert-danger"><?php echo  $erroRam; ?></strong>
                  </div>
                  <div class="form-group">
                  <label for="email">Memory_in</label>
               <input class="form-control"  type="text" name="memory_in" >
               <strong class="alert-danger"><?php echo  $erroMemory_in; ?></strong>
                  </div>
                  <div class="form-group">
                  <label for="email"> battery</label>
                <input class="form-control" type="text" name="battery" >
                <strong class="alert-danger"><?php echo  $erroBattery; ?></strong>
                  </div>
                  <div class="form-group">
                  <label for="email"> product_id</label>
                product_id   <select name="product_id" id="">
                    <?php  for($i=0 ;$i<100;$i++): ?>
                        <option value="<?=  $i; ?>"><?=  $i; ?></option>
                        <?php endfor; ?>
                </select>
                <strong class="alert-danger"><?php echo  $erroProduct_id ; ?></strong>
                  </div>
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
              </div>
            </div>
      <h1 style="margin-left: 624px;margin-top: -312px;color: yellowgreen;">WELL COME TO SHOP</h1>
      <h1 style="margin-left: 691px;margin-top: 21px;color: darkorange;">Hưng Randy</h1>
    </div>