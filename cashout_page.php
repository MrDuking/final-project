<?php
require("database.php");
if(isset($_POST["submit"])){
  $Hoten=$_POST["fname"];
  $Email=$_POST["email"];
  $DiaChi=$_POST["adr"];
  $ThanhPho=$_POST["city"];
  $Quan=$_POST["State"];
if(isset($Hoten)&& isset($Email)&& isset($DiaChi)&& isset($ThanhPho) && isset($Quan));
$sql="INSERT INTO `khachhang`( `HoTen`, `Email`, `DiaChi`, `ThanhPho`, `Quan`) 
VALUES ('$Hoten','$Email','$DiaChi','$ThanhPho','$Quan')";
mysqli_query($conn,$sql);
echo"<script>alert('Thanh cong')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport˜" content="width=device-width, initial-scale=1.0">
    <title>ThieenJ Store - Sneaker House</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cashout_page.css">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.ico"/>
    <script src="https://kit.fontawesome.com/0607d6f524.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="main">
        <div class="header">
            <h1 class="store-name-top">ThieenJ Store Chuyên Bán Hàng Chính Hãng 100% Sỉ & Lẻ HCM </h1>
            <div class="navbar">
                <a href="/index.html"><i class="fa fa-fw fa-home"></i> Trang Chủ</a>
                <div class="dropdown">
                    <button class="dropbtn">Giày Sneaker 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="/direct/mlb.html">MLB</a>
                      <a href="/direct/adidas.html">Adidas</a>
                      <a href="/direct/nike.html">Nike</a>
                    </div>
                </div> 
                <a href="/direct/clothes.html">Quần Áo</a>
                <a href="/direct/balo.html">Túi-Balo</a>
            </div>
            <!-- <a href="/direct/cart.html"><img src="/img/cart/cart-shopping.webp" alt="HTML tutorial" style="position:absolute;bottom:2px;right:10px;width:32px;height:32px"></a> -->
        </div>
            <!-- End menu-bar -->
    <!-- END Header -->
            <!-- Begin Cart content -->
        <div class="container-cashout">
            <h2 style="margin: 50px 20px 50px 0px;position: relative;text-align: center;font-size: 25px;">Điền Thông Tin Thanh Toán:</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-50">
            <h3 style="margin-bottom:20px ;">Thông Tin Khách Hàng: </h3>
            <label for="fname"><i class="fa fa-user"></i> Họ & tên: </label>
            <input type="text" id="fname" name="firstname" placeholder="Nguyen Van A">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="nguyenvanA@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Địa Chỉ</label>
            <input type="text" id="adr" name="address" placeholder="999 Phan Dang Lu,P1">
            <label for="city"><i class="fa fa-institution"></i> Thành Phố</label>
            <input type="text" id="city" name="city" placeholder="TPHCM">

            <div class="row">
              <div class="col-50">
                <label for="state">Quận</label>
                <select type="" id="state" name="state" form="carform">
                    <option value="Quận 1">Quận 1</option>
                    <option value="Quận 2">Quận 2</option>
                    <option value="Quận 3">Quận 3</option>
                    <option value="Quận 4">Quận 4</option>
                    <option value="Quận 5">Quận 5</option>
                    <option value="Quận 6">Quận 6</option>
                    <option value="Quận 7">Quận 7</option>
                    <option value="Quận 8">Quận 8</option>
                    <option value="Quận 9">Quận 9</option>
                    <option value="Quận 10">Quận 10</option>
                    <option value="Quận 11">Quận 11</option>
                    <option value="Quận 12">Quận 12</option>
                    <option value="Quận Bình Tân">Quận Bình Tân</option>
                    <option value="Quận Bình Thạnh">Quận Bình Thạnh</option>
                    <option value="Quận Tân Bình">Quận Tân Bình</option>
                    <option value="Quận Tân Phú">Quận Tân Phú</option>
                    <option value="Quận Thủ Đức">Quận Thủ Đức</option>                    
                    <option value="Quận Phú Nhuận">Quận Phú Nhuận</option>
                    <option value="Quận Hóc Môn">Quận Hóc Môn</option>
                    <option value="Quận Gò Vấp">Quận Gò Vấp</option>                    
                </select>
            </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Gửi Hàng Đến Địa Chỉ Như Thông Tin Trên
          <br>
          <input type="checkbox" checked="checked" name="sameadr"> Gọi tôi để xác nhận đơn hàng
        </label>
        <!-- <div class="checkout-btn">
          <a href="/index.html"></a><input  type="submit" value="THANH TOÁN" class="btn" onclick="checkout_success()">
        </div> -->
        <div class="checkout-btn">
          <button type="submit" name="submit">ThanhToan</button>
          <!-- <a class="btn" onclick="checkout_success()" href="/index.html">THANH TOÁN</a> -->
        </div>
      </form>
    </div>
</div>
<script src="/js/main.js"></script>
</body>
</html>