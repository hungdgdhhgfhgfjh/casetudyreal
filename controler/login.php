<?php
session_start();
$_SESSION["user"] = '';
$erro             = '';
$erroemail        = '';
$erropassword     = '';
include_once "csdl.php";
$news = "";
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
  $RegexEmail          = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
  $flag                = 0;
  if($email == '' || $password == "")
  {
      $erroemail        = "Please enter your Email";
      $erropassword     = "Please enter your Password";
      $erro             = "login lost";

  }
  else
  {
      if(!preg_match($RegexEmail,$email))
      {
          $erroemail        = "Please enter your Email";
          $erronumberPhone  = "Please enter your number Phone";
          $erro             = "login lost";
      }
      else
      {
        $sql    = "SELECT * FROM `customers` WHERE email = '".$email."' AND pass_word ='".$password."'";
        $stmt   = $connect->query( $sql );
        //tùy chọn kiểu trả về
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //lấy tất cả kết quả
        $user   = $stmt->fetch(); 
        if(!$user)
        {
          $erroemail        = "Please enter your Email";
          $erropassword     = "Please enter your Password";
        }
        else
        {
          $_SESSION["user"] = $user;
          $flag = 1;
          unset($_SESSION["cart"]);
          header("location: homeuser.php");
        }  
      }
  }
  if($flag == 0)
  {
    $erro = "login lost";
  }
  if($email == "admin@gmail.com" && $password  == "password")
  {
    $user = ["email"=> "admin@gmail.com",
             "password"=> "password"];
    $_SESSION["Admin"] = $user;
    $flag = 1;
    header("location: ./leader/maneger_customer.php");
  }
}
?>
<?php include_once "../view/htmlLogin.php"; ?>
<h2 class="text-center" style="color: springgreen;margin-left: 116px;font-size: 48px;">Login</h2>
<div style="background: white;width: 385px;margin-left: 494px;margin-top: 45px;border-radius: 10px;">
    <div class="container" style="height: 304px;border-radius: 10px;">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <strong class="alert-success"><?php echo $news;?></strong>
                <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
                <strong class="alert-danger" style="color:red"><?php echo $erroemail; ?></strong>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd">
                <strong class="alert-danger" style="color:red"><?php echo $erropassword; ?></strong>
                <br>
                You do not have an account please<a href="register.php">register</a>
            </div>
            <button type="submit" style="width: 100%;background: #9c88ff;" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</div>
<h1 style="margin-left: 21px;margin-top: -390px;color: yellowgreen;display: block;">WELL COME TO SHOP</h1>
<h1 style="margin-left: 100px;margin-top: 21px;color: darkorange;width: 98px; display:block;">Hưng</h1>
<h1 style="margin-left: 216px;margin-top: -56px;color: darkorange;width: 98px;display:block;">Randy</h1>
<?php include_once "../view/footerrLogin.php"; ?>