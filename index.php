


<?php
require('connection.php');
require('function.php');


$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
  $cat_arr[]=$row;  
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
  rel="stylesheet"
/>

    <title>Workshop Portal</title>
  </head>
  <body  style="background-color:  #FFB6C1">
<?php 
require('header.php');
 ?> 
    

  <?php
$get_product=get_product($con,'','');
  ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">

    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" class="d-block w-100" style="width: 70%; height: 500px;" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $get_product['0']['workshop_name']?></h5>

      </div>
    </div>
    <div class="carousel-item">
<a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['1']['image']?>" class="d-block w-100" style="width: 70%; height: 500px;" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $get_product['1']['workshop_name']?></h5>

      </div>
    </div>
    <div class="carousel-item">
<a href="#"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['2']['image']?>" class="d-block w-100" style="width: 70%; height: 500px;" alt="..."></a>
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

                            <?php
                            $get_product=get_product($con,10);
                            foreach($get_product as $list){
                            ?>

 <div>
   <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                          
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><?php echo $list['workshop_name']?>
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-8 leading-relaxed"><?php echo $list['description']?></p>
      <div class="flex justify-center">
        
      <a href="form.php?id=<?php echo $list['id']?>"><button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-center">Registar Now</button> 
</a>        
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="her1o" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>">
    </div>
  </div>
</section>
<?php } ?>
 </div>

<?php 
require('footer.php');
 ?> 


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
    


  </body>
</html>
