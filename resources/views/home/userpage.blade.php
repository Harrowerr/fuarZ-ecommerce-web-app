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
         <!-- slider section -->
         <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Trade-in offer</h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand">On all products</h1>
                                    <p class="animated">Save more with coupons & up to 50% off</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{url('products')}}"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="/home/assets/imgs/slider/slider-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-7">Great Collection</h1>
                                    <p class="animated">Save more with coupons & up to 50% off</p>
                                    <a class="animated btn btn-brush btn-brush-2" href="{{url('products')}}"> Discover Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="/home/assets/imgs/slider/slider-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="/home/assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="/home/assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="/home/assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="/home/assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="/home/assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="/home/assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- product section 
      @include('home.product')
      --end product section -->

      <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li>
                    </ul>
                   
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/18')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-1-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-1-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirts</a>
                                        </div>
                                        <h2><a href="{{url('product_details/18')}}">Colorful Pattern Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$23 </span>
                                            <span class="old-price">$46</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/10')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirts</a>
                                        </div>
                                        <h2><a href="{{url('product_details/10')}}">Plain Color Pocket Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$30 </span>
                                            <span class="old-price">$60</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/17')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirts</a>
                                        </div>
                                        <h2><a href="{{url('product_details/17')}}">Vintage Floral Oil Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$25 </span>
                                            <span class="old-price">$50</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/16')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-4-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Clothing</a>
                                        </div>
                                        <h2><a href="{{url('product_details/16')}}">Colorful Hawaiian Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$25 </span>
                                            <span class="old-price">$50</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/19')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-5-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-5-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-50%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirt</a>
                                        </div>
                                        <h2><a href="{{url('product_details/19')}}">Flowers Sleeve Lapel Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$10</span>
                                            <span class="old-price">$20</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/20')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-6-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-50%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirts</a>
                                        </div>
                                        <h2><a href="{{url('product_details/20')}}">Ethnic Floral Casual Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$17</span>
                                            <span class="old-price">$34</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/21')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-13-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-13-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-50%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirt</a>
                                        </div>
                                        <h2><a href="{{url('product_details/21')}}">HOTOUCH Cotton Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28 </span>
                                            <span class="old-price">$56</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/22')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-8-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
     
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirt</a>
                                        </div>
                                        <h2><a href="{{url('product_details/22')}}">Mens Porcelain Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$21 </span>
                                            <span class="old-price">$42</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                        </div>
                  <!--En tab one (Featured)-->
                  
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/10')}}">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirts</a>
                                        </div>
                                        <h2><a href="{{url('product_details/10')}}">Plain Color Pocket Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$30 </span>
                                            <span class="old-price">$60</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/17')}}">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirts</a>
                                        </div>
                                        <h2><a href="{{url('product_details/17')}}">Vintage Floral Oil Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$25 </span>
                                            <span class="old-price">$50</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/16')}}">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-4-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirt</a>
                                        </div>
                                        <h2><a href="{{url('product_details/16')}}">Colorful Hawaiian Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$25 </span>
                                            <span class="old-price">$50</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/19')}}">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-5-1.jpg" alt="">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-5-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirt</a>
                                        </div>
                                        <h2><a href="{{url('product_details/19')}}">Flowers Sleeve Lapel Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$10</span>
                                            <span class="old-price">$20</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/20')}}">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-6-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirt</a>
                                        </div>
                                        <h2><a href="{{url('product_details/20')}}">Ethnic Floral Casual Shirts</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$17</span>
                                            <span class="old-price">$34</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{url('product_details/22')}}">
                                                <img class="hover-img" src="/home/assets/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="default-img" src="/home/assets/imgs/shop/product-8-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                           
                                            
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{url('products')}}">Shirt</a>
                                        </div>
                                        <h2><a href="{{url('product_details/22')}}">Mens Porcelain Shirt</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$21 </span>
                                            <span class="old-price">$42</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>

         <!-- end slider section -->
      </div>

      <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="/home/assets/imgs/banner/banner-4.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 style="font-size: 30px;" class="mb-15 mt-40 text-brand">Up To 50% OFF Almost Everything</h4>
                        <h1 style="font-size: 30px;" class="fw-600 mb-20">Don't Miss the 50% Discount of Our Products<br>And More!</h1>
                        <a href="{{url('products')}}" class="btn">Show Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a><img src="/home/assets/imgs/shop/category-thumb-1.jpg" alt=""></a>
                            </figure>
                            <h5><a>Shirt</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a> <img src="/home/assets/imgs/shop/category-thumb-11.jpg" alt=""></a>
                            </figure>
                            <h5><a>Polo Shirts</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a><img src="/home/assets/imgs/shop/category-thumb-12.jpg" alt=""></a>
                            </figure>
                            <h5><a>T-Shirts</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a><img src="/home/assets/imgs/shop/category-thumb-10.jpg" alt=""></a>
                            </figure>
                            <h5><a>Dress Shirts</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a><img src="/home/assets/imgs/shop/category-thumb-7.jpg" alt=""></a>
                            </figure>
                            <h5><a>Jumpsuits</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a><img src="/home/assets/imgs/shop/category-thumb-8.jpg" alt=""></a>
                            </figure>
                            <h5><a>Hats</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a><img src="/home/assets/imgs/shop/category-thumb-9.jpg" alt=""></a>
                            </figure>
                            <h5><a>Jeans</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="/home/assets/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 50% on <br>Woman Bag</h4>
                                <a href="{{url('products')}}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="/home/assets/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="{{url('products')}}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="/home/assets/imgs/banner/banner-3.png" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="{{url('products')}}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


      <!-- arrival section -->
      @include('home.new_arrival')
      <!-- end arrival section -->

      <!-- why section -->
      @include('home.why')
      <!-- end why section -->
      <section class="section-padding">
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="/home/assets/imgs/banner/brand-1.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="/home/assets/imgs/banner/brand-2.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="/home/assets/imgs/banner/brand-3.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="/home/assets/imgs/banner/brand-4.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="/home/assets/imgs/banner/brand-5.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="/home/assets/imgs/banner/brand-6.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="/home/assets/imgs/banner/brand-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
           

      
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->

      <script type="text/javascript"> 
        
        function reply(caller)
        {
            document.getElementById('commentId').value = $(caller).attr('data-Commentid');

            $('.replyDiv').insertAfter($(caller)); //Interting whichever button is clicked

            $('.replyDiv').show(); //showing the reply button
        }

        function reply_close(caller)
        {
            $('.replyDiv').hide(); //Closing the reply button
        }

      </script> 

      <script>
         document.addEventListener("DOMContentLoaded", function(event) { 
               var scrollpos = localStorage.getItem('scrollpos');
               if (scrollpos) window.scrollTo(0, scrollpos);
         });

         window.onbeforeunload = function(e) {
               localStorage.setItem('scrollpos', window.scrollY);
         };
      </script>

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
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;
    valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
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


