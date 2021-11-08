<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tạo Footer HTML CSS</title>

</head>
<style>
body {
    margin: 0;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    color: black;
}

.navbar a:hover {
    background: brown;
    color: black;
}

.main {
    padding: 16px;
    margin-top: 30px;
    height: 1500px;
    /* Used in this example to enable scrolling */
}

input {
    width: 362px;
    margin-left: 209px;
    margin-top: 12px;
    height: 22px;
    border-radius: 18px;
}

.input1{
    width: 380px;
    margin-left: 69px;
    margin-top: 12px;
    height: 39px;
    border-radius: 18px;
}

.button1 {
    margin-left: -78px;
    width: 66px;
    height: 38px;
    border-radius: 18px;
    background: aquamarine;
    margin-top: 11px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Roboto;
}

body {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    min-height: 100vh;
    flex-direction: column;
}

footer {
    position: relative;
    width: 100%;
    height: auto;
    padding: 50px 100px;
    background: #111;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

footer .container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: row;
}

/*Thiết Lập Cho Thành Phần Nội Dung Giới Thiệu*/
footer .container .noi-dung {
    margin-right: 30px;
}

footer .container .noi-dung.about {
    width: 40%;
}

footer .container .noi-dung.about h2 {
    position: relative;
    color: #fff;
    font-weight: 500;
    margin-bottom: 15px;
}

footer .container .noi-dung.about h2:before {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 50px;
    height: 2px;
    background: #f00;
}

footer .container .noi-dung.about p {
    color: #999;
}

/*Thiết Lập Cho Thành Phần Icon Mạng Xã Hội*/
.social-icon {
    margin-top: 20px;
    display: flex;
}

.social-icon li {
    list-style: none;
}

.social-icon li a {
    display: inline-block;
    width: 40px;
    height: 40px;
    background: #222;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
    text-decoration: none;
    border-radius: 4px;
}

.social-icon li a:hover {
    background: #f00;
}

.social-icon li a .fa {
    color: #fff;
    font-size: 20px;
}

.links h2 {
    position: relative;
    color: #fff;
    font-weight: 500;
    margin-bottom: 15px;
}

.links h2 {
    position: relative;
    color: #fff;
    font-weight: 500;
    margin-bottom: 15px;
}

.links h2::before {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 50px;
    height: 2px;
    background: #f00;
}

.links {
    position: relative;
    width: 25%;
}

.links ul li {
    list-style: none;
}

.links ul li a {
    color: #999;
    text-decoration: none;
    margin-bottom: 10px;
    display: inline-block;
}

.links ul li a:hover {
    border-bottom:20px white;
}

.contact h2 {
    position: relative;
    color: white;
    font-weight: 500;
    margin-bottom: 15px;
}

.contact h2::before {
    content: "";
    position: absolute;
    z-index: -1;
    left: 0;
    right: 100%;
    bottom: 0;
    background: #ECECEC;
    height: 4px;
    -webkit-transition-property: right;
    transition-property: right;
    -webkit-transition-duration: 0.15s;
    transition-duration: 0.15s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.contact {
    width: calc(35% - 60px);
    margin-right: 0 !important;
}

.contact .info {
    position: relative;
}

.contact .info li {
    display: flex;
    margin-bottom: 16px;
}

.contact .info li span:nth-child(1) {
    color: #fff;
    font-size: 20px;
    margin-right: 10px;
}

.contact .info li span {
    color: #999;
}

.contact .info li a {
    color: #999;
    text-decoration: none;
}

.h2 {
    color: blueviolet;
    margin-left: 448px;
    font-size: 47px;
    margin-top: 88px;
}

.div2 {
    background: black;
    width: 100%;
    height: 46px;
    margin-top: 5px;

}
.img1{
    border-radius: 100%;
    width: 107px;
    height: 45px;
}
.mua{
    width: 64px;
    margin-left: 70px;
    margin-top: 12px;
    background: red;
    border-radius: 21px;
    display: block;
    height: 26px;
    text-align: center;
    color: black;
}
.h2{
    color: blueviolet;
    margin-left: 448px;
    font-size: 47px;
    margin-top: 147px;
}
</style>

<body>
    <div class="navbar" style="background-color: red;z-index: 2;">
        <img class="img1" onclick="facebook()" src="./anh/quochung.png" alt="">
        <input class="input1" placeholder="" type="text" name="" id="">
        <button class="button1">search</button>
        <a href="Product_type.php">Category</a>
        <a href="DescriptionProduct.php">Description Product</a>
      <a href="maneger_customer.php">Customer</a>
      <a href="maneger_product.php">product</a>
      <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" style="background-color:red;" type="button" data-toggle="dropdown"> Hi Anh Hưng
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> log out</a></li>

    </ul>
  </div>
        <div class="div2">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a style="color:white;" href="">I Pad</a>
            <a  style="color:white;">Smart Phone</a>
            <a style="color:white;">Lap Top</a>
            <a style="color:white;">PC-COMPUTER</a>
            <a style="color:white;">Accessory</a>
            <a href="orders.php" style="color:white;">Orders</a>
            <a href="order_details.php" style="color:white;">Order_detail</a>
        </div>
    </div>
    <script>
    function facebook() {
        window.location.href = "https://www.facebook.com/hung.HungRandy";
    }
    </script>