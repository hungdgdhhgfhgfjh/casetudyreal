<?php
 include_once "../../../controler/csdl.php";
 echo "<pre>";
 print_r($_REQUEST);
 echo "</pre>";
 $id = (isset($_REQUEST["id"])  && !empty($_REQUEST["id"])) ?$_REQUEST["id"]:"";
//  if(!$id)
//  {
    
//  }
$sql                  = "SELECT * FROM customers WHERE id=".$id;
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$user   = $stmt->fetch();
echo "<pre>";
print_r($user);
echo "</pre>";
$erroemail           = '';
$erropassword        = '';
$erronumberPhone     = '';
$erroname            = '';
$news                 = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//   Array
// (
//     [email] => lequochung2001@gmail.com
//     [password] => 1111
//     [numberPhone] => 1111
//     [name] => 111111
// )

//   echo "<pre>";
//   print_r($_REQUEST);
//   echo "<pre>";
    $email               = $_REQUEST["email"];
    $password            = $_REQUEST["password"];
    $numberPhone         = $_REQUEST["numberPhone"];
    $fullName            = $_REQUEST["fullName"];
    $RegexEmail          = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    $RegexNumberPhone    = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";
    $RegexName           = "/[a-zA-Z]/";
if($email == '' && $password == "" && $numberPhone == "" && $fullName == "")
  {
    $erroemail        = "Please enter your Email";
    $erropassword     = "Please enter your Password";
    $erronumberPhone  = "Please enter your number Phone";
    $erroname         = "Please enter your name";
  }
else
    {
 if(!preg_match($RegexEmail,$email) && !preg_match($RegexNumberPhone,$numberPhone) && !preg_match($RegexName,$name))
     {
         $erroemail        = "Please enter your Email";
         $erronumberPhone  = "Please enter your number Phone";
         $erroname         = "Please enter your name";
     }
 else
       {
           $sql ="UPDATE `customers` SET `fullName` = '".$fullName."', `email` = '".$email."', `pass_word` = '".$password."', `numberPhone` = '".$numberPhone."' WHERE `customers`.`id` = ".$id;
           $stmt                 = $connect->query( $sql );
           header("location:maneger_customer.php");

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
    margin-left: 112px;
    }
</style>
<body style="background-color: #4834d4;">
 <div class="container">
        <div class="row" >
            <div class="col-sm-4">
                <strong class="strong1" >Update</strong>
            <form action=""  method="POST">
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
            <strong class="alert-success"><?= $news; ?></strong>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" value="<?php echo $user->email; ?>">
               <strong class="alert-Danger" ><?=$erroemail;?></strong>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password" value="<?php echo $user->pass_word; ?>">
                  <strong class="alert-Danger" ><?=$erropassword;?></strong>
                <div class="form-group">
                  <label for="pwd">number Phone:</label>
                  <input type="text" class="form-control" placeholder="Enter numberPhone" id="pwd" name="numberPhone" value="<?php echo $user->numberPhone; ?>" >
                  <strong class="alert-Danger" ><?=$erronumberPhone;?></strong>
                </div>
                <div class="form-group">
                    <label for="pwd">full name</label>
                    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="fullName"  value="<?php echo $user->fullName; ?>">
                    <strong class="alert-Danger" ><?=$erroname;?></strong>
                  </div>
               
                <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
    <div>
      <h1 style="margin-left: 624px;margin-top: -312px;color: yellowgreen;">WELL COME TO SHOP</h1>
      <h1 style="margin-left: 691px;margin-top: 21px;color: darkorange;">Hưng Randy</h1>
    </div>