
<?php 	  session_start();
//   if(isset($_SESSION)){

//   }
 
 
 ?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "camera";

    //B1: Create connetion
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }
    //B2:
    $sql_nhom = "SELECT * FROM `sanpham_nhom` ";
   ;
    //Bước 3
    $result_nhom = mysqli_query($conn, $sql_nhom);
   
    $addToCartClicked = isset($_POST['addcart']);

    if ($addToCartClicked && !isset($_SESSION['user'])) {
        // Người dùng chưa đăng nhập và đã nhấn nút "Thêm vào giỏ hàng"
        // Chuyển hướng đến trang login.php
        header("Location: login.php");
        exit();
    }

   
    ?>
    <style>
.content{
  background-color:white;
}


    </style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assetss/css/home.css" />
    <link rel="stylesheet" href="./assetss/css/flexboxgrid.css" />
  <link rel="stylesheet" href="plugins/ps-icon/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS Library-->
  <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
  <!-- Custom-->
  <link rel="stylesheet" href="css/style.css">
    <script
      src="https://kit.fontawesome.com/f57658a5dd.js"
      crossorigin="anonymous"
    ></script>
    <title>Shopping Website</title>
  </head>
  <body>


  <div class="header--sidebar"></div>
  <header class="header">
    <div class="header__top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
            <p>18 Pho Vien - Dong Ngac - Bac Tu Liem - Ha Noi - Hotline: 0964 058 502 - 0964 058 502</p>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
            <div class="header__actions">
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navigation">
      <div class="container-fluid">
        <div class="navigation__column left">
          <div class="header__logo"><a class="ps-logo" href="index.html"><img src="images/logo2.jpg" alt=""></a></div>
        </div>
        <div class="navigation__column center" style="min-width: 710px">
       
          <ul class="main-menu menu">
            <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Trang chủ</a>
            </li>
            <?php if(isset($_SESSION['user'])){ ?>
            <li class="menu-item menu-item-has-children has-mega-menu"><a href="xemdonhang_dadat.php">Đơn Hàng</a>
            </li>
            <?php } ?>
            <li class="menu-item menu-item-has-children dropdown"><a href="lienhe.php">Liên hệ</a>
            </li>
            <li class="menu-item menu-item-has-children dropdown">
            <div class="flax" style="display: inline;">  
              <form class="ps-search--header" action="timkiemsp.php" method="get" style="">
                <input class="form-control" type="text" name="timkiem" placeholder="Tìm Kiếm sản phẩm ...">
                <button type="submit"><i class="ps-icon-search"></i></button>
              </form>
            </div>         
            </li>
            <li class="menu-item menu-item-has-children dropdown">
            <a class="ps-cart__toggle" href="cart.php"><i class="ps-icon-shopping-cart"></i></a>
            </li>
            <?php if(isset($_SESSION['user'])){ ?>
            <li class="menu-item menu-item-has-children dropdown"><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a> </li>
            <li class="menu-item menu-item-has-children dropdown"><a href="sanpham.php" id="user_profile"> <i class="far fa-user"></i>	<?php echo $_SESSION['user']; ?></a></li>
            <?php } else { ?>
              <li class="menu-item menu-item-has-children dropdown"><a href="login.php"><i class="far fa-user"></i> Đăng Nhập</a></li>
              <li class="menu-item menu-item-has-children dropdown"><a href="dangki.php"> <i class="fas fa-sign-out-alt"></i>Đăng Kí</a> </li>
            <?php } ?> 
          </ul>
        </div>
      </div>
    </nav>
  </header>
