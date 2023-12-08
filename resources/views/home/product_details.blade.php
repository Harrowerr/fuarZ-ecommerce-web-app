<!DOCTYPE html>
<html> 
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <meta property="og:title" content="">
      <meta property="og:type" content="">
      <meta property="og:url" content="">
      <meta property="og:image" content="">
      <link rel="shortcut icon" href="images/fuarz.png" type="">
      <title>fuarZ</title>
      <script src="https://unpkg.com/js-image-zoom@0.4.1/js-image-zoom.js" type="application/javascript"></script>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('/home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <link href="{{asset('home/css/style_2.css')}}" rel="stylesheet" />
      <link href="{{asset('home/css/custom.css')}}" rel="stylesheet" />
      <link href="{{asset('home/assets/css/main.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      

      <style>
        .containerrr{
            width:auto;
        position: relative;
        top: 1%;
        left: 50%;
        transform: translate(-50%, -50%);
        }
        .checked{
        color: orange;
        }

        * {box-sizing: border-box;}


        .product-img{
            cursor: none;

        }
      </style>
    </head>
   <body>

   @include ('sweetalert::alert')
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
       
         <!-- end slider section -->
      
        <br><br><br>
         <main>
         <div class="left">
                    <div class="product-img" id="product-img">
                        <img src="/product/{{$product->image}}" id="Mainimg" alt="">
                        <div id="myresult" class="img-zoom-result"></div>
                    </div>
                        <div class="thumbnails">
                            <ul class="thumbnails-list">
                                <li class="img-thumbs active">
                                <img src="/product/{{$product->image}}" alt="" >
                            </li>
                            </ul>
                        </div>
		    </div>
            <script>
            var options = {
                width: 390,
                zoomWidth: 500,
                offset: {vertical: 0, horizontal: 10}
            };
            new ImageZoom(document.getElementById("product-img"), options);
            
            </script>
            </body>
            </html>
        

			<div class="right">
				
				<h1>{{$product->title}}</h1>
                <h3 style="color: #ff5100;">Brands: {{$product->brands}}</h3>

                <p>{{$product->title}}</p>
                <div>
                    <ul>
                         <li><i class="fas fa-crown" style="font-size: 10px; color: black"></i>  1 Year AL Jazeera Brand Warranty</li>
                         <li><i style="font-size:10px; color:black;" class="fa" >&#xf021;</i> &nbsp;30 Day Return Policy</li>
                         <li><i style="font-size: 10px; color: black;" class="fa" >&#xf09d;</i>&nbsp; Cash on Delivery available</li>
                    </ul>
                </div>
                <br>
                
  				<div class="price-description">
                    @if($product->discount_price != null)
  					<h2><b>${{$product->discount_price}}</b></h2>
  					<h5><strike>${{$product->price}}</strike></h5>
                    <h4>50% Off</h4>
  				</div>
                    @endif
                    
                    <br><br>
                    <div id="sizes" class="attr-detail attr-size">
                       <strong class="mr-10">Size</strong>
                          <ul class="list-filter size-filter font-small">
                               <li><a href="#">S</a></li>
                               <li class="active"><a href="#">M</a></li>
                               <li><a href="#">L</a></li>
                               <li><a href="#">XL</a></li>
                               <li><a href="#">XXL</a></li>
                          </ul>
                    </div>
                    <br>
                    <form action="{{url('add_cart', $product->id)}}" method="POST">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4"> 
                                    <input type="number" id="sizes" name="quantity" value="1" min="1" style="width: 100px;">
                                 </div>
                                 <div style = "margin-left: -250px; margin-right: auto;" class="col-md-4">
                                    <input type="submit" id="sizes" class="zoom-button" value="Add To Cart">
                                 </div>
                              </div>
                    </form>
                    
                    <ul class="product-meta font-xs color-grey mt-50">
                        <hr><br>
                       <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                       <li>Product Category:<span class="in-stock text-success ml-5">{{$product->category}}</span></li>
                       <li>Availability:<span class="in-stock text-success ml-5">{{$product->quantity}} Items In Stock</span></li>
                    </ul>
			</div>
		</main>
<br><br><br><br>
    
                    <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (3)</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            <p>{{$product->description}}</p>
                                            <h4 class="mt-30">Packaging & Delivery</h4>
                                            <hr class="wp-block-separator is-style-wide">
                                            <p>At fuarZ, we take pride in providing our customers with exceptional products and services. Our packaging and delivery rules are designed to ensure a seamless and delightful experience for every customer. Please review the following guidelines before making a purchase:
                                            <p>

                                            Packaging Guidelines:

<p>Quality Assurance: We carefully inspect each garment before packaging to ensure it meets our quality standards. However, if you receive a product with any manufacturing defects, please contact our customer support within 7 days of delivery.

Environmentally Conscious Packaging: We are committed to sustainability. Whenever possible, we use eco-friendly packaging materials that are recyclable or biodegradable.

Item Protection: Your items are meticulously folded, wrapped in protective layers, and placed in sturdy packaging to prevent damage during transit.

Personal Touch: Each package includes a personalized thank-you note, expressing our gratitude for your purchase.

Delivery Guidelines:

Shipping Options: We offer various shipping options at checkout. Choose the one that best suits your timeframe and budget.

Estimated Delivery Time: The estimated delivery time is provided during checkout and is based on your location and chosen shipping method. Please note that this is an estimate and not a guaranteed delivery date.

Order Processing: Orders are typically processed within 1-2 business days. During peak seasons, processing times may be slightly longer.

Customs and Duties: For international orders, please be aware that customs duties and taxes may apply. These charges are the responsibility of the recipient.

Delays and Issues: While we strive to meet delivery estimates, external factors such as weather, customs, and logistical challenges may occasionally cause delays. We appreciate your patience in such situations.

Lost or Stolen Packages: If you believe your package is lost or stolen, please contact us immediately. We will work with the carrier to resolve the issue.

Returns and Exchanges:

Returns Policy: If you are not satisfied with your purchase, please refer to our Returns & Exchanges policy on our website for detailed instructions.

Return Window: You have 14 days from the date of delivery to initiate a return or exchange.

Unworn and Tags: Returned items must be unworn, unwashed, and have all original tags attached.

Return Shipping: The cost of return shipping is the responsibility of the customer unless the return is due to a manufacturing defect or an error on our part.

By placing an order on fuarZ website, you agree to adhere to these packaging and delivery rules. Our goal is to provide you with a seamless shopping experience and high-quality products. If you have any questions or concerns, please don't hesitate to contact our customer support team.

                                            </p>
                                            <p>Thank you for choosing fuarZ. </p>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                    <div class="comment-list">
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="/home/assets/imgs/page/avatar-6.jpg" alt="">
                                                                    <h6><a href="#">Jack Markov</a></h6>
                                                                    <p class="font-xxs">Since 2012</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:100%">
                                                                        </div>
                                                                    </div>
                                                                    <p>Thank you very fast shipping from Poland only 3days.</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">July 4, 2023 at 3:12 pm </p>
                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single-comment -->
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="/home/assets/imgs/page/avatar-7.jpg" alt="">
                                                                    <h6><a href="#">Ana Rosie</a></h6>
                                                                    <p class="font-xxs">Since 2008</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:100%">
                                                                        </div>
                                                                    </div>
                                                                    <p>Great low price and works well.</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">July 8, 2023 at 3:12 pm </p>
                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                          <!--single-comment -->
                                                          <div class="single-comment justify-content-between d-flex">    
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="/home/assets/imgs/page/avatar-8.jpg" alt="">
                                                                    <h6><a href="#">Steven Keny</a></h6>
                                                                    <p class="font-xxs">Since 2010</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:100%">
                                                                        </div>
                                                                    </div>
                                                                    <p>Authentic and Beautiful, Love these way more than ever expected They are Great earphones</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">July 12, 2023 at 3:12 pm </p>
                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--single-comment -->
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4 class="mb-30">Customer reviews</h4>
                                                   
                                                    <div class="progress">
                                                        <span>5 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>4 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>3 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>2 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress mb-30">
                                                        <span>1 star</span>
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                    </div>
                                                    <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--comment form-->
                                        <div class="comment-form">
                                            <h4 class="mb-15">Add a review</h4>
                                            <div class="product-rate d-inline-block mb-30">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12">
                                                    <form class="form-contact comment_form" action="#" id="commentForm">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="button button-contactForm">Submit
                                                                Review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

        <br><br>
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->



        <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>


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

        <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }

        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }

        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }

        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
      </script>



      <script src="home/js/jquery.zoomtoo.js"></script>
      <script src="home/js/jquery.jquery.zoomtoo.min.js"></script>
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