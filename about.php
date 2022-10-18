
<?php 
require('connection.php');
require('function.php');
if(isset($_GET['id'])){
  $product_id=mysqli_real_escape_string($con,$_GET['id']);
  if($product_id>0){
    $get_product=get_product($con,'','',$product_id);
  }else{
    ?>
    <script>
    window.location.href='index.php';
    </script>
    <?php
  }
}else{
  ?>
  <script>
  window.location.href='index.php';
  </script>
  <?php
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Workshop &mdash; Colorlib Website Template</title>
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
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-11 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Work<span class="text-primary">shop</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.html">Home</a></li>
                
                <li><a href="contact.html">Contacts</a></li>
                
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <div class="site-section site-hero inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up">Get To Know</span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">About Us  <?php echo $get_product['0']['categories']?></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4 ">
            <div class="site-section-heading" data-aos="fade-up" data-aos-delay="100">
              <h2>Welcome To Workshop  </h2>

            </div>
          </div>
          <div class="col-lg-5 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus. Minima architecto impedit eaque molestiae dicta quam. Cum ducimus. Culpa distinctio! Aperiam!</p>
            <p>voluptatem nulla repellendus enim perspiciatis reiciendis iusto assumenda neque quaerat quidem architecto.</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12" data-aos="fade-up" data-aos-delay="300">
      <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="full-image" class="img-fluid">
          </div>
        </div>

        <?php
                            $get_product=get_product($con,5);
                            ($get_product){
                            ?>
        <div style="padding-left: 400px ">
          <a href="buy-tickets.php?id=<?php echo $list['id']?>"  class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>Buy Tickets</span></a>
           ?>
        </div>
        
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4" data-aos="fade-up">
            <div class="site-section-heading">
              <h2>Programs</h2>
            </div>
          </div>
          <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.</p>
          </div>
        </div>

        <div class="row align-items-stretch program">
          <div class="col-12 border-top border-bottom py-5" data-aos="fade" data-aos-delay="200">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">8:00</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="300">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">9:30</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="400">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">10:30</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="500">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">10:45</span> <span>NOON</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Break With Snacks</h2>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="600">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">11:30</span> <span>AM</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Design your open source strategy</h2>
                <span>Chris Mathews</span>
              </div>
            </div>
          </div>

          <div class="col-12 border-bottom py-5" data-aos="fade" data-aos-delay="700">
            <div class="row align-items-stretch">
              <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">12:00</span> <span>NOON</span></div>
              <div class="col-md-9">
                <h2 class="text-white">Break For Lunch</h2>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading" data-aos="fade-up">
              <h2 class="text-center">Our Team</h2>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
            <div class="testimony text-center"> 
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="author mb-0">Emely Peters</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="200">
            <div class="testimony text-center">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="author mb-0">Alex Anchors</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="300">
            <div class="testimony text-center">
              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="author mb-0">Aaron Thomas</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="400">
            <div class="testimony text-center">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="author mb-0">Emely Peters</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="500">
            <div class="testimony text-center">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="author mb-0">Alex Anchors</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="600">
            <div class="testimony text-center">
              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="author mb-0">Aaron Thomas</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
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
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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