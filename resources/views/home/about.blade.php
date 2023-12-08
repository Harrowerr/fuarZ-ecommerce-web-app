<!DOCTYPE html>
<html> 
<head>
      <base href="/">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/fuarz.png" type="">
      <title>fuarZ</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('/home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <link href="{{asset('home/assets/css/custom.css')}}" rel="stylesheet" />
      <link href="{{asset('home/assets/css/main.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

         <section class="section-padding">
            <div class="container pt-25">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                        <h6 style="font-size: 15px" class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated"><b> Our Company</b></h6>
                        <h1 style="font-size: 30px;" class="font-heading mb-40">
                            <b>We are Building The Destination For Getting Things Done</b>
                        </h1>
                        <p>We believe in a world where you have total freedom to be you, without judgement. To experiment. To express yourself. To be brave and grab life as the extraordinary adventure it is. </p>
                        <p>So we make sure everyone has an equal chance to discover all the amazing things they’re capable of – no matter who they are, where they’re from or what looks they like to boss. We exist to give you the confidence to be whoever you want to be. </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="/home/assets/imgs/page/about-1.png" alt="">
                    </div>
                </div>
            </div>
        </section>                

         <!-- client section -->
         @include('home.client')
         <!-- end client section -->

         <!-- footer section -->
         @include('home.footer')
         <!-- end footer section -->

 <!-- Vendor JS-->
 <script src="/home/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="/home/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/home/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="/home/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="/home/assets/js/plugins/slick.js"></script>
<script src="/home/assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="/home/assets/js/plugins/wow.js"></script>
<script src="/home/assets/js/plugins/jquery-ui.js"></script>
<script src="/home/assets/js/plugins/perfect-scrollbar.js"></script>
<script src="/home/assets/js/plugins/magnific-popup.js"></script>
<script src="/home/assets/js/plugins/select2.min.js"></script>
<script src="/home/assets/js/plugins/waypoints.js"></script>
<script src="/home/assets/js/plugins/counterup.js"></script>
<script src="/home/assets/js/plugins/jquery.countdown.min.js"></script>
<script src="/home/assets/js/plugins/images-loaded.js"></script>
<script src="/home/assets/js/plugins/isotope.js"></script>
<script src="/home/assets/js/plugins/scrollup.js"></script>
<script src="/home/assets/js/plugins/jquery.vticker-min.js"></script>
<script src="/home/assets/js/plugins/jquery.theia.sticky.js"></script>
<script src="/home/assets/js/plugins/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="/home/assets/js/main.js?v=3.3"></script>
<script src="/home/assets/js/shop.js?v=3.3"></script>      



      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
