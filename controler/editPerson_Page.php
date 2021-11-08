<?php
session_start();
include_once "csdl.php";
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
$id = (isset($_REQUEST["id"]) && !empty($_REQUEST["id"])) ? $_REQUEST["id"] : "";
$sql  = "SELECT * FROM `customers` WHERE id =$id";
// echo $sql;
// die();
//thực hiện truy vấn
$stmt      = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$user   = $stmt->fetch();
$erroemail           = '';
$erropassword        = '';
$erronumberPhone     = '';
$erroname            = '';
$news                = "";
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
if($email == '' || $password == "" || $numberPhone == "" || $fullName == "")
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
           $stmt->setFetchMode(PDO::FETCH_OBJ);
           $finduser ="SELECT * FROM `customers` WHERE id =$id";
           $stmt                 = $connect->query( $finduser );
           $stmt->setFetchMode(PDO::FETCH_OBJ);
           //lấy tất cả kết quả
           $user   = $stmt->fetch();
           $_SESSION['success']  = "Edit success";
           $_SESSION['user']     = $user;
           echo "<pre>";
           print_r($_SESSION["user"]);
           echo "<pre>";
           header("location:personalPage.php");

       }
    }
}
?>
<?php include_once "../view/htmlLogin.php"; ?>
<style>
.body {
    background-image: url("https://lh3.googleusercontent.com/iEgYEImW_pDNT13ar8YJzj6lLYjSkCbM0ROyv7elI1cXRM2tdGogs-ctW8tlYRE1r3zB8bDlMW4osxMJ86sMPUiOdlLZ156oBmXz-H_hhk5RCg5k6Z6U6TqVueCZmG2Bx56tkUAqGQ=w1314-h891-no");
    width: 100%;
}
</style>

<body class="body">
    <div class="text-center">
    <strong  style=" font-weight: bolder;font-size: 46px;color: springgreen;" >Update</strong>
    </div>
    <div style="height: 425px;background: white;width: 385px;margin-left: 494px;border-radius:10px ;margin-top: 45px;border: 10px black;">
        <div class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email"
                        value="<?php echo $user->email; ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="password"
                        value="<?php echo $user->pass_word; ?>">
                    <div class="form-group">
                        <label for="pwd">number Phone:</label>
                        <input type="text" class="form-control" placeholder="Enter numberPhone" id="pwd"
                            name="numberPhone" value="<?php echo $user->numberPhone; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pwd">full name</label>
                        <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="fullName"
                            value="<?php echo $user->fullName; ?>">
                    </div>
                    <button type="submit" style="width: 100%;background: #9c88ff;"
                        class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?php include_once "../view/footerrLogin.php"; ?>