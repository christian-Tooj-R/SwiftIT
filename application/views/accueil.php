<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
      <link rel="icon" href="<?php echo base_url('assets/images/fevicon.png'); ?>" type="image/gif" />
      <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css'); ?>">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
      <link rel="stylesoeet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html">
               <img src="<?php echo base_url('assets/images/logo.png'); ?>" style="width: 172px;height: 158px;"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-item nav-link" href="index.html">Home</a>
                  <a class="nav-item nav-link" href="about.html">About</a>
                  <a class="nav-item nav-link" href="teashop.html">Teashop</a>
                  <a class="nav-item nav-link" href="pricing.html">Pricing</a>
                  <a class="nav-item nav-link" href="testimonies.html">Testimonies</a>
                  <a class="nav-item nav-link" href="contact.html">Contact</a>
               </div>
            </div>
            <div class="login_menu">
            </div>
         </nav>
      </div>
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <?php ?>
      </div>
      <!-- about section end -->


      <!-- footer section start --> 
      <div>
         <?php $this->load->view("footer"); ?>
      </div>
      <!-- Javascript files-->
      <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/jquery-3.0.0.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/plugin.js'); ?>"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
      <!-- javascript --> 
      <script src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
         });
            
         $(document).ready(function(){
             // Add minus icon for collapse element which is open by default
             $(".collapse.show").each(function(){
              $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
             });
             
             // Toggle plus minus icon on show hide of collapse element
             $(".collapse").on('show.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
             }).on('hide.bs.collapse', function(){
              $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
             });
         });
      </script>
   </body>
</html>