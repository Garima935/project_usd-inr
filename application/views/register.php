<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>US Dollar to Indian Rupee Conversion</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/Untitled-removebg-preview.png" type="image/png">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/slick.css">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/LineIcons.css">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/animate.css">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/magnific-popup.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
    
<style>
    .header-hero {
    height: auto;

}
</style>    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?= base_url();?>assets/images/logo_transparent.png" alt="Logo" style="height: 60px;">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                
                            </div> <!-- navbar collapse -->
                             <div class="navbar-btn d-none d-sm-inline-block" style="float: right;">
                                <a class="main-btn" href="<?= base_url();?>">Go to Home</a>
                            </div>

                        
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">
            <?php if($this->session->flashdata('success')){?>
            <div class="alert alert-success"><?= $this->session->flashdata('success')?></div>
            <?php } ?>
            <?php if($this->session->flashdata('failure')){?>
            <div class="alert alert-danger"><?= $this->session->flashdata('failure')?></div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-6" style="margin:0 auto;">
                    <div class="contact-wrapper-form pt-115  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4 class="contact-title pb-10"></i> Sign <span> up</span></h4>
                        
                        <form id="contact-form" action="<?= base_url(); ?>Register/checkuser" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Name</label>
                                        <input type="text" name="name" placeholder="Name" class="onlyalphabet" autocomplete="off">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Email</label>
                                        <input type="email" name="email" placeholder="Email" autocomplete="off">
                                    </div> <!-- contact-form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <label>Enter Your Password</label>
                                        <input type="password" name="password" placeholder="Password" autocomplete="off">
                                    </div> <!-- contact-form -->
                                </div>
                                
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="contact-form mt-45">
                                        <button type="submit" class="main-btn">Submit</button>
                                    </div> <!-- contact-form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer" class="footer-area bg_cover" style="background-image: url(<?= base_url();?>assets/images/footer-bg.jpg)">
        <div class="container">
            <div class="footer-copyright text-center">
                <p class="text">© 2020 Crafted by <a href="javascript:void(0)" rel="nofollow">USD-INR</a> All Rights Reserved.</p>
            </div>
        </div> <!-- container -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->  




    <!--====== Jquery js ======-->
    <script src="<?= base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url();?>assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="<?= base_url();?>assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="<?= base_url();?>assets/js/slick.min.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="<?= base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url();?>assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="<?= base_url();?>assets/js/waypoints.min.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.counterup.min.js"></script>
    
    <!--====== Circles js ======-->
    <script src="<?= base_url();?>assets/js/circles.min.js"></script>
    
    <!--====== Appear js ======-->
    <script src="<?= base_url();?>assets/js/jquery.appear.min.js"></script>
    
    <!--====== WOW js ======-->
    <script src="<?= base_url();?>assets/js/wow.min.js"></script>
    
    <!--====== Headroom js ======-->
    <script src="<?= base_url();?>assets/js/headroom.min.js"></script>
    
    <!--====== Jquery Nav js ======-->
    <script src="<?= base_url();?>assets/js/jquery.nav.js"></script>
    
    <!--====== Scroll It js ======-->
    <script src="<?= base_url();?>assets/js/scrollIt.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="<?= base_url();?>assets/js/main.js"></script>
    
</body>

</html>
<script type="text/javascript">
    $(function () {
      $('.onlyalphabet').keydown(function (e) {
          if ( e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
</script>