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


         <section class="pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 style="font-size: 35px;" class="mb-10 text-center"><b>Get In Touch</b></h3>
                            <p class="text-muted mb-30 text-center font-sm">Hey! We're looking forward<br>to contact with you!</p>
                            <form class="contact-form-style text-center" id="contact-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Your Email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="telephone" placeholder="Your Phone" type="tel">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="subject" placeholder="Subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <button class="submit submit-auto-width" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         @include('home.footer')

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
