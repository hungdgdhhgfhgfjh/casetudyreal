<?php
session_start();
include_once "csdl.php";
//Lấy tất cả từ bảng thể loại
$sql                  = "SELECT * FROM customers";
//thực hiện truy vấn
$stmt                 = $connect->query( $sql );
//tùy chọn kiểu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//lấy tất cả kết quả
$users   = $stmt->fetchAll();
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
          // $sql  = "INSERT INTO `customers` (`id`, `fullName`, `email`, `pass_word`, `numberPhone`) VALUES (NULL, '".$fullName."', '".$email."', '".$password."', '".$numberPhone."');";
          //   //thực hiện truy vấn
          // $stmt = $connect->query( $sql );
          //   //tùy chọn kiểu trả về
          // $stmt->setFetchMode(PDO::FETCH_OBJ);
          //   //lấy tất cả kết quả
          // $users = $stmt->fetchAll();
          // $news = "bạn đã đăng ký thành công hãy nhấn vào<a href='login.php'>đây<a> để đăng nhập";
    try   {
              $sql  = "INSERT INTO `customers` (`id`, `fullName`, `email`, `pass_word`, `numberPhone`) VALUES (NULL, '".$fullName."', '".$email."', '".$password."', '".$numberPhone."');";
              $result = $connect->query($sql);
              $result->setFetchMode(PDO::FETCH_OBJ);
              $users    = $result->fetchAll();    
              $news = "Sign Up Success  <a href='login.php'>here<a>login";
              if (!$result)
                   {
                       throw new Exception();
                       $error = 'registration failed !';
                   }
              // if ($users)
              //        {
              //         throw new Exception();
              //         $insert  = "INSERT INTO `customers` (`id`, `fullName`, `email`, `pass_word`, `numberPhone`) VALUES (NULL, '".$fullName."', '".$email."', '".$password."', '".$numberPhone."');";
             //         $stmt   = $connect->query($insert);
             //         $news = "bạn đã đăng ký thành công hãy nhấn vào<a href='login.php'>đây<a> để đăng nhập";
             //        }
          } 
    catch (Exception $e)
               {
                $error = 'registration failed !';
                $_SESSION['error'] = $error;
                // $news = "bạn đã đăng ký thành công hãy nhấn vào<a href='login.php'>đây<a> để đăng nhập";
               }
        }
  }
}




?>
<?php include_once "../view/htmlLogin.php"; ?>
<?php include_once "../view/bodyRegister.php"; ?>
<?php include_once "../view/footerrLogin.php"; ?>