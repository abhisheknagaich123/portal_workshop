<?php
require('connection.php');
require('function.php');


$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
  $cat_arr[]=$row;  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Workshop &mdash; abhishek@</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

 <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Work<span class="text-primary">shop</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="#">about</a></li>
                <?php
                    foreach($cat_arr as $list){
                      ?>
                      <li><a href="buy-tickets.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>

                      <?php
                    }
                    ?>
                <li><a href="contact.php">Contacts</a></li>
                <li class="cta"><a href="buy-tickets.php">Buy Tickets</a></li>
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>
 
    
   <?php
$get_product=get_product($con,'','');
  ?>
    

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">

    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" class="d-block w-100" style="width: 70%; height: 600px;" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $get_product['0']['workshop_name']?></h5>

      </div>
    </div>
    <div class="carousel-item">
<a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['1']['image']?>" class="d-block w-100" style="width: 70%; height: 600px;" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $get_product['1']['workshop_name']?></h5>

      </div>
    </div>
    <div class="carousel-item">
<a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['2']['image']?>" class="d-block w-100" style="width: 70%; height: 600px;" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $get_product['2']['workshop_name']?></h5>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>


      <div class="site-section">
      <div class="container">
        
                           <?php
                            $get_product=get_product($con,5);
                            foreach($get_product as $list){
                            ?>
         <div class="row align-items-center speaker">
          
          <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>" alt="Image" class="img-fluid">
          </div>
          <div class="bio pl-lg-5">
                       <div class="bio pl-lg-5">
              <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-right" data-aos-delay="300"><?php echo $list['workshop_name']?></span>
              <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-right" data-aos-delay="300"><?php echo $list['categories']?></span>
              <p class="mb-4" data-aos="fade-right" data-aos-delay="400"><?php echo $list['description']?></p>
              <p data-aos="fade-right" data-aos-delay="500">
    
                <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                <a href="#" class="p-2"><span class="icon-github"></span></a>
              </p>
              <a href="buy-tickets.php?id=<?php echo $list['id']?>" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>Buy Tickets</span></a>
              <div class="row" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12 text-center" style="padding-top: 25px">
            <a href="about.php?id=<?php echo $list['id']?>" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>More About us</span></a>
          </div>
        </div>
            </div>

          </div>
        </div>
        <?php } ?>


        <div class="row" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12 text-center">
            <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>go to 1st workshop</span></a>
          </div>
        </div>
      </div>
    </div>
      
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h2 class="footer-heading text-uppercase mb-4">About Event</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aliquid quibusdam fugit architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading text-uppercase mb-4">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h2 class="footer-heading text-uppercase mb-4">Connect with Us</h2>
            <p>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2"><span class="icon-youtube"></span></a>
              <a href="#" class="p-2"><span class="icon-instagram"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          
            <div class="col-md-12 text-center">
              <div class="border-top pt-5">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >abhishek</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    


  </body>
</html>