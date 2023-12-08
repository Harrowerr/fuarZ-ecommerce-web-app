<!DOCTYPE html>
<html> 
   <head>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <style>
         
         th {
            background-color: #ff5100;
            color: white;
         }

         td {
            padding: 15px;
            background-color: rgba(255,255,255,0.2);
            
         }

         table{
            width: 100%;
            margin: auto;
            text-align: center;

            border-collapse: collapse;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
         }


         body {
            padding-top: 50px;
            
            font-family: sans-serif;
            font-weight: 100;
         }

         .center{
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 160px;
         }

         .th_deg{
            font-size: 20px;
            padding: 5px;
          
         }

         .img_deg{
            height: 200px;
            width: 200px;
         }

         .total_deg{
            font-size: 20px;
            padding: 40px;

         }
      </style>
   </head>
   <body>
   
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
   
         <!-- end slider section -->
    
         @if(session()->has('message'))

         <div class = "alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
         </div>

         @endif

      <div class="center">

      <table>

      <tr>
         <th class="th_deg">Product Title</th>
         <th class="th_deg">Product Quantity</th>
         <th class="th_deg">Price</th>
         <th class="th_deg">Image</th>
         <th class="th_deg">Action</th>
      </tr>
      
      <?php $totalprice = 0; ?>

      @foreach($cart as $cart)

      <tr>
         <td>{{$cart->product_title}}</td>
         <td>{{$cart->quantity}}</td>
         <td>${{$cart->price}}</td>
         <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
         <td><a onclick="confirmation(event)" class = "btn btn-dark" href="{{url('/remove_cart', $cart->id)}}">X</a></td>
      </tr>

      <?php $totalprice = $totalprice + $cart->price ?> 
       
      @endforeach
      
   </table>
   <div>
      <h1 class="total_deg">Total Price : ${{$totalprice}}</h1>
   </div>

   <div>
      <h1 style="font-size: 25px; padding-bottom: 15px">Proceed to Order</h1>
      <a href="{{url('cash_order')}}" class="btn btn-dark">Cash On Delivery</a>
      <a href="{{url('stripe', $totalprice)}}" class="btn btn-dark">Pay Using Card</a>
   </div>
</div>

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

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "Are you sure to cancel this product",
            text: "You will not be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {  

                window.location.href = urlToRedirect;  

            }  
        });     
    }
</script>


      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>

         <!-- footer section -->
         @include('home.footer')
         <!-- end footer section -->
   </body>
</html>