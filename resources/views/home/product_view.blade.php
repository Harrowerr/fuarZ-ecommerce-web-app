<html>
<head>
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
      <title>fuarZ></title>
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
   <style>
   .icon-control {
    margin-top: 5px;
    float: right;
    font-size: 80%;
}



.btn-light {
    background-color: #fff;
    border-color: #e4e4e4;
}

.list-menu {
    list-style: none;
    margin: 0;
    padding-left: 0;
}
.list-menu a {
    color: #343a40;
}

.card-product-grid .info-wrap {
    overflow: hidden;
    padding: 18px 20px;
}

[class*='card-product'] a.title {
    color: #212529;
    display: block;
}

.card-product-grid:hover .btn-overlay {
    opacity: 1;
}
.card-product-grid .btn-overlay {
    -webkit-transition: .5s;
    transition: .5s;
    opacity: 0;
    left: 0;
    bottom: 0;
    color: #fff;
    width: 100%;
    padding: 5px 0;
    text-align: center;
    position: absolute;
    background: rgba(0, 0, 0, 0.5);
}
.img-wrap {
    overflow: hidden;
    position: relative;
}
   </style>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>

@include ('sweetalert::alert')

<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            <div>

               <br><br>
               <form action="{{url('search_product')}}" method="GET">
                  @csrf

                  <input style="width: 500px;" type="text" name="search" placeholder="Search for Something">
                  <input type="submit" value="Search">
               </form>
            </div>
         </div>

         @if(session()->has('message'))
            <div class = "alert alert-success">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               {{session()->get('message')}}
            </div>
         @endif

            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details', $products->id)}}" class="option1">
                           Product Details
                           </a>
                           <form action="{{url('add_cart', $products->id)}}" method="POST">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4"> 
                                    <input type="number" name="quantity" value="1" min="1" style="width: 100px;">
                                 </div>
                                 <div class="col-md-4">
                                    <input type="submit" value="Add To Cart">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5 style="color:black"> 
                           {{$products->title}}
                        </h5>
                     </div>
                     <div class="detail-box">
                        @if($products->discount_price != null)
                        <h6 style="color:red;">
                           Discount Price
                           <br>
                           ${{$products->discount_price}}
                        </h6>

                        <h6 style="text-decoration: line-through; color: blue;">
                           Price
                           <br>
                           ${{$products->price}}
                        </h6>

                        @else

                        <h6 style="color: blue;">
                           ${{$products->price}}
                        </h6>

                        @endif

                     </div>
                  </div>
               </div>
               @endforeach
               

               <span style="padding-top: 20px;">

               {!!$product->appends(Request::all())->links('pagination::bootstrap-5')!!}
               </span>
            </div>
         </div>
      </section>
   </body>
</head>


