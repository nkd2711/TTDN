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
        $sql = "SELECT * 
        FROM sanpham1
       
        order by rand()
          limit 12";
    //Bước 3
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Nguyen Khanh Duy">
  <title>Index</title>
  <!-- Custom-->
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="ps-loading">
  <div class="header--sidebar"></div>

  <div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0"
      data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
      data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Giao hàng miễn phí</strong>: Nhận giao hàng tiêu chuẩn miễn phí sản phẩm của chúng tôi cho mọi đơn hàng với J&T Express</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Giao hàng miễn phí</strong>: Nhận giao hàng tiêu chuẩn miễn phí sản phẩm của chúng tôi cho mọi đơn hàng với J&T Express</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Giao hàng miễn phí</strong>: Nhận giao hàng tiêu chuẩn miễn phí sản phẩm của chúng tôi cho mọi đơn hàng với J&T Express</p>
    </div>
  </div>
  <main class="ps-main">

    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <h3 class="ps-section__title" data-mask="features">Danh sách sản phẩm</h3>
          <ul class="ps-masonry__filter">
    <li class="current"><a href="?category=all" data-filter="*">All <sup>120</sup></a></li>
    <li><a href="?category=xiaomi" data-filter=".Xiaomi">Xiaomi <sup>25</sup></a></li>
    <li><a href="?category=tplink" data-filter=".tplink">TP-Link <sup>18</sup></a></li>
    <li><a href="?category=ezvir" data-filter=".ezvir">Ezvir <sup>15</sup></a></li>
    <li><a href="?category=imou" data-filter=".imou">IMOU <sup>22</sup></a></li>
    <li><a href="?category=tenda" data-filter=".tenda">Tenda <sup>10</sup></a></li>
</ul>

        </div>

        <div class="ps-section__content pb-50">
          <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
            <div class="ps-masonry" style="display:ruby">
              <div class="grid-sizer"></div>
              <section class="home-page-product-section">
   
   <div class="sanpham">
      <span> Sản Phẩm Đề Xuất</span>
      </div>
     <div class="row">
     <?php       $limit = 8; 
                         $count = 0; 
                         while ($row= mysqli_fetch_assoc($result)) { 
                             if ($count >= $limit) {
                                 break; 
                             }    
                     ?> 
       <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
         <div class="shopping-card">
           <div class="img-sec">
           <a href="chitiet.php?masp=<?php echo $row["masp"] ?>">
           <img  src="upload/<?php echo $row["img1"] ?>"> </a> 
             <span class="hot-offer">New</span>
             <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
             </div>
           </div>
           <div class="title"><?php echo $row["tensp"] ?></div>
           <div class="buttons">
             <div class="right-btn">
               <span class="price"><?php echo $row["dongiamoi"] ?> 000 VNĐ</span>
             </div>
             <div class="left-btn">
             
               <form action="cart.php" method="post">
               <div class="a">
             
                 <input type="submit" value="Mua Ngay" name="addcart" class="b-text">
               
              
                 <input type="hidden" name="soluong" value="1">
                                         <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                         <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
                                         <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">   
               </div>
               </form>
             </div>
           </div>
         </div>
       </div>
       <?php 
                         $count++;    
                         }     ?> 
            </div>
          </div>
        </div>

      </div>
      </div>
    </div>
    
    <div class="ps-section--sale-off ps-section pt-80 pb-40">
      <div class="ps-container">
        <div class="ps-section__header mb-50">
          <h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
        </div>
        <div class="ps-section__content">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
            <div class="ps-hot-deal">
        <h3>Camera IP wifi Ezviz CS-C6N 1080P 2MP</h3>
        <p class="ps-hot-deal__price">Only: <span>450.000vnđ</span></p>
        
        <ul class="counter-down" style="display:flex; font-size: 20px;">
            <li style="padding:0px 7px"><span class="hours" style="padding:0px 10px"></span>:
                
            </li>
            <li ><span class="minutes" style="padding:0px 10px"></span>:
            </li>
            <li style="padding:0px 7px"><span class="seconds"></span>
            </li>
        </ul>
        <div class="remaining-time" style="margin-bottom: 30px; font-size:10px">
                        Sắp Hết Flash Sales
                      </div>
        <a class="ps-btn" href="#">Order Today<i class="ps-icon-next"></i></a>
    </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
              </a><img width="80%"
                src="camner.jpg"
                alt=""></div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
    <div class="ps-home-testimonial bg--parallax pb-80"
      data-background="https://st.meta.vn/Data/image/2022/11/11/camera-ip-wifi-ezviz-cs-c6n-1080p-2mp-g.jpg">
      <div class="container">
        <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0"
          data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
          data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"
          data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
          <div class="ps-testimonial">
            <div class="ps-testimonial__thumbnail"><img
                src="https://i.pinimg.com/736x/19/13/5e/19135e6246a0112311853f2fc8807681.jpg"
                alt=""><i class="fa fa-quote-left"></i></div>
            <header>
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="5">5</option>
              </select>
              <p>Anh Tuấn</p>
            </header>
            <footer>
              <p>“Mới mua chiếc camera này và đã thử nghiệm một vài lần. Chất lượng hình ảnh thật tuyệt vời! Rất hài lòng với sự lựa chọn của mình! “</p>
            </footer>
          </div>
          <div class="ps-testimonial">
            <div class="ps-testimonial__thumbnail"><img
                src="https://i.pinimg.com/736x/5e/98/58/5e9858f1f4495a0b909827d3a88ccf67.jpg"
                alt=""><i class="fa fa-quote-left"></i></div>
            <header>
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="5">5</option>
              </select>
              <p>Anh Dũng</p>
            </header>
            <footer>
              <p>“Mới mua chiếc camera này và đã thử nghiệm một vài lần. Chất lượng hình ảnh thật tuyệt vời! Rất hài lòng với sự lựa chọn của mình! “</p>
            </footer>
          </div>
          <div class="ps-testimonial">
            <div class="ps-testimonial__thumbnail"><img
                src="https://i.pinimg.com/736x/3b/b1/60/3bb1605f9a11dde9b526c046b53f8f1f.jpg"
                alt=""><i class="fa fa-quote-left"></i></div>
            <header>
              <select class="ps-rating">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="1">3</option>
                <option value="1">4</option>
                <option value="5">5</option>
              </select>
              <p>Anh Hưng</p>
            </header>
            <footer>
              <p>“Mới mua chiếc camera này và đã thử nghiệm một vài lần. Chất lượng hình ảnh thật tuyệt vời! Rất hài lòng với sự lựa chọn của mình! “</p>
            </footer>
          </div>
        </div>
      </div>
    </div>
   
    <!-- contact start -->
    <section class="uf-contact-form-01 mx-auto">
        <div class="container">
            <div class="row justify-content-center bg-white rounded-4 shadow py-5 gx-5 px-lg-5">
                <div class="col-md-6 text-center">
                    <h2 class="uf-ct-01-text-primary text-uppercase fw-bold">Contact Us</h2>
                    <p>Or reach out manually to <a href="mailto:uifresh.net@gmail.com" class="text-decoration-none">uifresh.net@gmail.com</a></p>
                    <img src="./plane.png" alt="" class="uf-img-contact-form-01 pt-4 d-md-block d-none">
                </div>
                <div class="col-md-6">
                    <form>
  <div class="mb-3">
    <label for="uf-imail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="uf-imail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text uf-ct-01-text-primary">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="uf-iname" class="form-label">Your name</label>
    <input type="text" class="form-control" id="uf-iname">
  </div>
  <div class="mb-3">
  <label for="uf-itextarea" class="form-label">Your message</label>
  <textarea class="form-control" id="uf-itextarea" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-lg uf-ct-01-btn-primary">Send Message</button>
</form>
                </div>
            </div>
        </div>
    </section>
     <!-- conact end -->
  </main>
  <div class="ps-subscribe" style="width: inherit !important; display: flex; margin: auto;">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
            <h3><i class="fa fa-envelope"></i>Đăng ký nhận bản tin</h3>
          </div>
          <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
            <form class="ps-subscribe__form" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="">
              <button>Sign up now</button>
            </form>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
            <p>...và nhận được <span>500.000đ</span> phiếu giảm giá cho lần mua sắm đầu tiên.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
      <div class="ps-footer__content" style="witdh: ; display: flex; margin: auto;">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--info">
                <header><a class="ps-logo" href="index.php"><img src="images/logo2.jpg" alt=""></a>
                  <h3 class="ps-widget__title">Địa chỉ Văn phòng 1</h3>
                </header>
                <footer>
                  <p><strong>18 Pho Vien - Dong Ngac - Bac Tu Liem - Ha Noi</strong></p>
                  <p>Email: <a href='mailto:khanhduy@camera.com'>khanhduy@camera.com</a></p>
                  <p>Phone: 0964 058 502</p>
                </footer>
              </aside>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--info second">
                <header>
                  <h3 class="ps-widget__title">Địa chỉ Văn phòng 2</h3>
                </header>
                <footer>
                  <p><strong>18 Pho Vien - Dong Ngac - Bac Tu Liem - Ha Noi</strong></p>
                  <p>Email: <a href='mailto:khanhduy@camera.com'>khanhduy@camera.com</a></p>
                  <p>Phone: 0964 058 502</p>
                </footer>
              </aside>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--link">
                <header>
                  <h3 class="ps-widget__title">Tìm cửa hàng của chúng tôi</h3>
                </header>
                <footer>
                  <ul class="ps-list--link">
                    <li><a href="#">Mã giảm giá</a></li>
                    <li><a href="#">Đăng ký nhận Email</a></li>
                    <li><a href="#">Phản hồi trang web</a></li>
                    <li><a href="#">Nghề nghiệp</a></li>
                  </ul>
                </footer>
              </aside>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--link">
                <header>
                  <h3 class="ps-widget__title">Nhận trợ giúp</h3>
                </header>
                <footer>
                  <ul class="ps-list--line">
                    <li><a href="#">Trạng thái đơn hàng</a></li>
                    <li><a href="#">Vận chuyển và Giao hàng</a></li>
                    <li><a href="#">Trả lại</a></li>
                    <li><a href="#">Tùy chọn thanh toán</a></li>
                    <li><a href="#">Liên hệ với chúng tôi</a></li>
                  </ul>
                </footer>
              </aside>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--link">
                <header>
                  <h3 class="ps-widget__title">Các sản phẩm</h3>
                </header>
                <footer>
                  <ul class="ps-list--line">
                    <li><a href="#"> Xiaomi </a></li>
                    <li><a href="#"> TP-Link </a></li>
                    <li><a href="#"> Ezvir </a></li>
                    <li><a href="#"> IMOU </a></li>
                    <li><a href="#"> Tenda </a></li>
                  </ul>
                </footer>
              </aside>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-footer__copyright">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
              <p>&copy; <a href="#">KD Store</a>, Inc. All rights Resevered. Design by <a href="#"> Khanh Duy</a>
              </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
              <ul class="ps-social">
                <li><a href="https://www.facebook.com/nkd.2711"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- JS Library-->
  <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>

  <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
  <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

  <script>
        // Đặt thời gian đích sự kiện
        const eventDate = new Date("<?php echo date('Y-m-d H:i:s', strtotime('2024-12-31 23:59:59')); ?>").getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const timeRemaining = eventDate - now;

            if (timeRemaining >= 0) {
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Gán các giá trị đếm ngược vào các phần tử HTML
                document.querySelector(".hours").innerHTML = hours;
                document.querySelector(".minutes").innerHTML = minutes;
                document.querySelector(".seconds").innerHTML = seconds;
            } else {
                document.querySelector(".hours").innerHTML = "0";
                document.querySelector(".minutes").innerHTML = "0";
                document.querySelector(".seconds").innerHTML = "0";
            }
        }

        // Cập nhật đồng hồ đếm ngược mỗi giây
        setInterval(updateCountdown, 1000);
    </script>
</body>

</html>










