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
            width: 110%;
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
     
         <!-- header section strats -->
         @include('home.header')

         <div class="center">
            <table>
                <tr>
                    <th class="th_deg">Product Details</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Payment Status</th>
                    <th class="th_deg">Delivery Status</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Cancel Order</th>
                </tr>

                @foreach($order as $order)

                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img height="100" width="180" src="product/{{$order->image}}">
                    </td>
               
                <td>
                    @if($order->delivery_status == 'processing')
                    
                    <a onclick="confirmation(event)" class="btn btn-dark" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                    
                    @else
                    
                    <p style="color:#ff5100">Not Allowed</p>

                    @endif
                </td>
                </tr>

                @endforeach
            </table>
         </div>
        
         @include('home.footer')
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
            title: "Are you sure to cancel this order?",
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
   </body>
</html>